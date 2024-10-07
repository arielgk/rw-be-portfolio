RW-SOCIALYZ_BE Installation guide


Installation guide for Laravel backend application:

## Requeriments: 

Ubuntu 20.04


## NGINX


Update system and Install NGINX:
````
sudo apt update
sudo apt install nginx

````


Check  if service is running:
```
systemctl status nginx
```
![[83343a65b3990e7382a3b8042f198c58.png]]

You should be able to see this page when entering the ip from the server on a browser window.
![[aa6a55d3896fef6b70a0fad4e2df1683.png]]

### Configure NGINX


Create site structure:
```
sudo mkdir -p /var/www/rw-socialyz-be/public

sudo chmod -R 755 /var/www/rw-socialyz-be


sudo vim /var/www/rw-socialyz-be/public/index.html
```

```
<html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
        <h1>Success!</h1>
    </body>
</html>                                                                       
                                                                           
```

Create a configuration for a new site
```

sudo vim  /etc/nginx/sites-available/socialyz

```


```
server {
        listen 80;
        listen [::]:80;
        server_name socialyz;

        root /var/www/rw-socialyz-be/public;
        index index.html index.htm index.nginx-debian.html;

        location / {
                try_files $uri $uri/ =404;
        }
}


```

Create a symlink to enable the recently created site. 
```
sudo ln -s /etc/nginx/sites-available/socialyz /etc/nginx/sites-enabled/

```


Open NGINX config file
```
sudo vim /etc/nginx/nginx.conf

```

Find server_names_hash_bucket_size and remove comment (#)

```

http {
    ...
    server_names_hash_bucket_size 64;
    ...
}

```


You can check is configuration is ok running:
```
sudo nginx -t


```
![[a23005c907d3a5aa470d1973579a82c7.png]]



Remove default site symlink
```
rm /etc/nginx/sites-enabled/default

```

Restart nginx
```
sudo systemctl restart nginx
```


In a browser windows go to server ip and check if it works.

![[e1c5866e392e46c050568a47f608af32.png]]



## MYSQL


Execute mysql installer:
```
sudo apt install mysql-server


sudo mysql_secure_installation


```


Installer will prompt for password validation , enter "y" 

![[e78a0aab358a1c134a9979f62c06ebd3.png]]

At password validation policy enter 2
![[085d30f4ebd397e4b3f0f6345eb9a642.png]]

enter your password and check the validation 
![[cf641ca584380a308d55e97fc0759768.png]]

if you need remote login answer "n" to Disallow root login remotely 
and  "y" to all other questions, 
otherwise enter "y" for every one.


![[89168961ac948b4ecd4638ec6d953149.png]]


enter `sudo mysql`  to check if everything is ok, write exit to leave;  

```
sudo mysql

```



![[c4db9b883fb0b014efbe6a03f17cf440.png]]


## PHP


we need php 8 so remove old php version if available:
```
sudo apt-get purge php7.*
``````


Update the system:
```
sudo apt update; sudo apt upgrade
sudo apt install ca-certificates apt-transport-https software-properties-common

```


Running `sudo apt list php`  we can check if php 8.0 is available to install, in our case is not available,

![[5e77034d08b6692491df6feb66a98552.png]]


So we are goning to add the `ondrej/php` repository using apt.

```
 sudo add-apt-repository ppa:ondrej/php
```


Next, to add the `ondrej` PPA for NGINX, use the following command:

```
 sudo add-apt-repository ppa:ondrej/nginx
```


## Install PHP and PHP-FPM for NGINX



Install php-fpm and its dependencies:
```
sudo apt install php-fpm

sudo apt install php-common php-mysql zip unzip php-zip php-cgi php-mbstring php-curl php-gd php-xml php-xmlrpc php-pear
```



Check if everything went fine with  `php -v` and ` sudo systemctl status php8.0-fpm
`


![[3775702fdbaec485c19bc736cb982ed6.png]]

![[cb13090ab4a46f1fa10fa1f152c871ed.png]]


Open socialyz nginx configuration file:
```	
sudo vim /etc/nginx/sites-available/socialyz
```

Update the contents like this
 
 ```
 
server {
    listen 80;
    listen [::]:80;
    server_name  socialyz;

    root /var/www/rw-socialyz-be/public;
    index index.php index.html index.htm;

    location / {
         try_files $uri $uri/ /index.php?$query_string;
    }
    error_page 404 /404.html;
    error_page 500 502 503 504 /50x.html;

    location = /50x.html {
        root /usr/share/nginx/html;
    }
    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.0-fpm.sock;
    }
}


 ```


Do a syntax check with `sudo nginx -t`

Restart nginx
```

sudo systemctl restart nginx

```


###  Check PHP installation(Optional) 


Create a phpinfo.php file on public directory
```
sudo vim /var/www/rw-socialyz-be/public/phpinfo.php
```

Add the following content to it
```
<?php phpinfo();
```

In a browser go to http://SERVER_IP/phpinfo.php

You should see something like this:

 ![[08fd2924dfdd3d86eb841197dab58022.png]]




### Configure PHP
Open php.ini and update the following properties
```
sudo vim  /etc/php/8.0/fpm/php.ini
```

```
max_execution_time = 120

upload_max_filesize = 10M
post_max_size = 10M


```


```
sudo systemctl restart php8.0-fpm.service
```


### Configure NGINX Upload limit


```
sudo vim /etc/nginx/nginx.conf
```

```
...
http {
 ...
  client_max_body_size 10M;
...
}
```


Restart nginx
```
sudo systemctl restart nginx

```

### Permissions

Note:
we are assuming that default users are being used, use your own if they are different.



execute chown to fix folder permissions
("ubuntu" is the user that we will use to login with scp and upload the code , "root" is the user that owns php-fpm service)
```
sudo chown -R ubuntu:root /var/www/rw-socialyz-be
```

Create a temporary directory in  the project root
```
mkdir -p  /var/www/rw-socialyz-be/tmp
```


rename our dummy public directory to something else, you can delete it later.
```
mv /var/www/rw-socialyz-be/public/ /var/www/rw-socialyz-be/public_old
```

Logout from ssh and  upload the local computer execute the following command, remember change  user and ip for the right ones.
```
scp rw-socialyz-be.tar.xz ubuntu@10.58.226.78:/var/www/rw-socialyz-be/tmp
```



```
tar -xf tmp/rw-socialyz-be.tar.xz -C /var/www/rw-socialyz-be --strip-components=1

```


### Create  MYSQL database


Open mysql cli
```
sudo mysql
```

Create a database
```
create database rw_socialyz_be;
```

Create user
```

CREATE USER 'socialyz'@'localhost' IDENTIFIED BY 'KbZ3GSeRzwcvjBOp';

GRANT ALL PRIVILEGES ON * . * TO 'socialyz'@'localhost';


exit

```


### Configure Laravel

```
cd /var/www/rw-socialyz-be
cp .env.example .env
```


Update .env file with your settings

```
vim .env

...

APP_URL=http://10.58.226.78 
...
DB_CONNECTION=mysql
DB_HOST=127.0.01
DB_PORT=3306
DB_DATABASE=rw_socialyz_be
DB_USERNAME=socialyz
DB_PASSWORD=Ow&ez3[c91BBfSaT

....
```

### Install Composer

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"



sudo mv composer.phar /usr/local/bin/composer

```



### Install Laravel dependencies


```
cd /var/www/rw-socialyz-be
composer install

```


### Generate a key for .env file
```
php artisan key:generate

```



### Create Laravel Database


```
php artisan migrate

```

### Create encryption keys

```

php artisan passport:install

```


### Testing


Open a browser and go to :
http://SERVER_IP/swagger/index.html


You should see the API documentation
![[5228f23f4fe1e864a9afae7d5bfc7575.png]]