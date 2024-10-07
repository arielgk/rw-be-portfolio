
Config Dev enviroment on Linux machine


**Docker**

Requirements
- Docker desktop
- composer
-  php > 7.3 (needed to install sail script dependency) 

[Docker install on ubuntu 20.04](https://linuxhint.com/install_configure_docker_ubuntu/)

This guide is for Backend setup in an Unix based system.

Macs with M1 chip will  need a different docker-compose.yml file , replace docker-compose.yml with  docker-compose-m1.yml contents. this is caused by m1 architecture, mysql container image must be replaced with an arm compatible one, for example , mariadb/latest or similar.
meilisearch doesn't work in M1 and should be totally disabled.

Windows should work ok  outside the box, but it's not documented yet. (todo) 

Clone the repository


Install Composer
```

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

````


Move composer to user bin folder
```
sudo mv composer.phar /usr/local/bin/composer
```



Enter to the repository directory and install sail dependency

```

cd rw-socialyz-be

composer require laravel/sail --dev
```

be sure port 80 is available and you can turn off Apache if installed
```
sudo /etc/init.d/apache2 stop
```


```
cp .env.example .env
```



run sail up  to start the containers


````
# verbose mode
./vendor/bin/sail up 
# or run deamon
./vendor/bin/sail up -d
````

If everything went fine, you should see the following output on the console:

![[images/9aa97437106cf55cdcbfb98d6fef92e2.png]]


you can access containers anytime by running

```
docker ps -a
```

![[images/e681cb3a67ebd9270ea9b40724c800fe.png]]
![[images/d4b01bc860216b0d02f56276e9213a38.png]]

Optional step:
you can create an alias in your .bashrc for easier command execution

```
sail='bash vendor/bin/sail'
```


Create the DB
```
cd rw-socialyz-be
# without alias
./vendor/bin/sail php artisan migrate
# with alias
sail php artisan migrate
```

Create encryption keys:

```
sail php artisan passport:install
````


You can visit: 
 http://localhost/swagger/index.html
 
 if everything is correct you can test the API

![[85d350d82d48b408e862f0227d9b62f0.png]]





