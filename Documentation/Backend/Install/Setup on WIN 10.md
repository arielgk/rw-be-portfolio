# Windows Server setup



Get the code from Gitlab repository

![[Pasted image 20220316184225.png]]

We need a web server server with capability to run php  8 and mysql. There are many options for this, we are going to use MAMP

So go to https://www.mamp.info/en/windows/  and download MAMP installer

![[Pasted image 20220316183352.png]]


![[Pasted image 20220316183454.png]]



![[Pasted image 20220316184631.png]]

![[Pasted image 20220316184823.png]]


MAMP needs .Net Core Framework to run. installer will prompt if you want to install it. 
Click OK to continue

![[Pasted image 20220316184901.png]]


Click `Install`
![[Pasted image 20220316185059.png]]


![[Pasted image 20220316185152.png]]


After .NET Core Framework installation process completes. Click Close.

![[Pasted image 20220316185211.png]]


Just after .NET Core isetup window closes, MAMP installer will continue with the installation. 
![[Pasted image 20220316185232.png]]

Let make a default installation, clicking next on all steps.

![[Pasted image 20220316185257.png]]


Click `Next`
![[Pasted image 20220316185316.png]]


Select the installation directory on the file system, 
you could choose your own path or leave the default.
Click next to continue.
![[Pasted image 20220316185352.png]]


Click next to continue allowing to create a startup folder.

![[Pasted image 20220316185409.png]]

Click Next on this step.
![[Pasted image 20220316185423.png]]



In this step just check if everything is correct and press "Install"

![[Pasted image 20220316185438.png]]

![[Pasted image 20220316185618.png]]


After the installation completes click `Finish`

![[Pasted image 20220316191241.png]]

Open MAMPPRO

![[Pasted image 20220316193457.png]]


We are using a demo for this task, it's fully functional for a limited time, if it's your case click `Demo`

![[Pasted image 20220316194054.png]]


Mamp initalize
![[Pasted image 20220316193435.png]]

Once loaded press Apache toggle:
![[Pasted image 20220316194917.png]]



Under Languages->PHP select 8.1.0 and press `Save`

![[Pasted image 20220316204144.png]]


Click `Enable other extensions`

![[Pasted image 20220316221121.png]]



On the config file that opens find and  remove the ';' at the beggining of the file for the following extensions
![[Pasted image 20220316221657.png]]

Close the window and accept the prompt

![[Pasted image 20220316221831.png]]




Turn on  OAuth
![[Pasted image 20220316222001.png]]

Turn on Make this version available from command line


![[Pasted image 20220316224748.png]]




Press yes to restart the server

![[Pasted image 20220316221858.png]]

Accept the changes and reload the server

![[Pasted image 20220316203804.png]]



We need PHP to be available from the command line so we have to add MAMP's php binary directory to windows environment variables

![[Pasted image 20220316204518.png]]



Click the “Environment Variables…” button.

![[Pasted image 20220316204622.png]]



![[Pasted image 20220316204646.png]]



Click on New button


![[Pasted image 20220316204701.png]]


And add php binary path to the list

```
C:\MAMP\bin\php\php8.1.0\
````


![[Pasted image 20220316204839.png]]


For the environment variables to work you need to Reboot your system 

![[Pasted image 20220316205148.png]]


After the reboot , open a command prompt window and type:

```
php --version
```
the result should be as the following:

![[Pasted image 20220316211928.png]]




As we reboot, MAMP Apache server is surely disabled, Open MAMP and turn it on 

![[Pasted image 20220316213210.png]]


You can check if all is working until now, opening a browser window and inserting :

```
http://localhost:8888
```

![[Pasted image 20220316213308.png]]



## MySQL 8


Open a browser and go to :
https://dev.mysql.com/downloads/mysql/


Click on `MySQL installer for windows`

![[Pasted image 20220316194407.png]]

Download the installer, we choose the first one, it's smaller and download of component will be done during installation.

![[Pasted image 20220316195012.png]]

Click  on `No, thanks...`to start downloading

![[Pasted image 20220316195034.png]]

Once downlaod finishes, execute the installer:


Click Yes to allow the installer do its job
![[Pasted image 20220316195111.png]]

Click Yes again for allowing
![[Pasted image 20220316195156.png]]



Let's choose `Server only` install mode, click on that and press `Next`


![[Pasted image 20220316195627.png]]

Click `Execute`

![[Pasted image 20220316195642.png]]

After download finishes click `Execute` again
![[Pasted image 20220316195702.png]]


Click on `Next`:
![[Pasted image 20220316195859.png]]

Let's start configuration :
Click `Next`:

![[Pasted image 20220316200023.png]]
Seems that the default configuration it's ok four our machine, se we leaves the default values and click `Next`:

![[Pasted image 20220316200037.png]]

We will choose a strong password setup and click `Next`:

![[Pasted image 20220316200110.png]]

We use a strong password for the root user:
QjZCgsUzf0Kktv9G

![[Pasted image 20220316200526.png]]

Then click `Add user` button and complete with the following values:
user: laravel
pass: cCEy4ve1vAoR6Qe9


![[Pasted image 20220316200512.png]]

![[Pasted image 20220316200556.png]]



![[Pasted image 20220316200612.png]]

Service configuration looks good! Let's click `Next`:

![[Pasted image 20220316200631.png]]



All seems fine, press `Execute`: 
![[Pasted image 20220316200654.png]]


After it's done press `Finish`:

![[Pasted image 20220316202827.png]]

Press `Next`:

![[Pasted image 20220316202844.png]]


Press `Finish` and mysql installation it's done
![[Pasted image 20220316202900.png]]




Lets check if it is working:



Hit Start Menu and search for MYSQL 8.0 Command Line Client
![[Pasted image 20220316203038.png]]


Enter root password from before:
QjZCgsUzf0Kktv9G

![[Pasted image 20220316203126.png]]

ok . we are in!

Let's create a database, type:
```
create database rw_socialyz_be;
```




![[Pasted image 20220316203404.png]]


type the following to list all the databases:
```
show databases;
```
![[Pasted image 20220317000303.png]]

Ok. is there, let's continue


## Install Composer 

Composer is PHP dependencies installer and we need it for setup the server,


Open a browser and go to:
https://getcomposer.org/

![[Pasted image 20220316215620.png]]

Download `Composer-setup.exe` and run it, On the openend window press next

![[Pasted image 20220316215723.png]]


Composer installer will check for our php path that we setup on the windows PATH environment variable , if this is correct press "Next"

![[Pasted image 20220316215834.png]]

Composer setup will prompt if we need a proxy, is not our case while writing this guide,
so just press 'Next', 
![[Pasted image 20220316220000.png]]


Review and press INSTALL

![[Pasted image 20220316220116.png]]

press 'Next'
![[Pasted image 20220316220205.png]]

Press Finish

![[Pasted image 20220316220223.png]]

Open a command line prompt and type:

```
composer --version
```

if the following shows , everything is fine

![[Pasted image 20220316220314.png]]

## Laravel setup


Open Zip file downloaded from gitlab repository and extract `rw-socialyz-be` folder to 

```
C:/MAMP/htdocs
```


![[Pasted image 20220316213701.png]]

Open that folder and copy .env.example

![[Pasted image 20220316213824.png]]


Paste it on the same directory and rename to `.env`  then confirm the prompt.




![[Pasted image 20220316214026.png]]


Open .env file with a notepad and edit the DB credentials as following: 
(if you choose another user and  password in the mysql installation step different that the ones in this guide , please add them here)

![[Pasted image 20220316214453.png]]


Save and close .env
![[Pasted image 20220316214707.png]]


Open a command prompt window and type :

```
cd C:\MAMP\htdocs\rw-socialyz-be
```

![[Pasted image 20220316214226.png]]



Once on that directory type:

``` 
composer update 
```

![[Pasted image 20220316224901.png]]

composer installation should start
![[Pasted image 20220316224939.png]]

After composer update completes you should be seeing something like this.

![[Pasted image 20220316225220.png]]

Let's create the database tables
type:
```
php artisan migrate
```

![[Pasted image 20220316214847.png]]


This is how a successful migration look like:

![[Pasted image 20220316230755.png]]

and finally let's configure OAuth, type:

```
php artisan passport:install
```
![[Pasted image 20220316230925.png]]


## Host setup
Open MAMP and click on `choose` under document root



![[Pasted image 20220316231048.png]]

Choose:
```
C:\MAMP\htdocs\rw-socialyz-be\public
```


Press Yes to restart the server:

![[Pasted image 20220316231357.png]]


Now if we visit http://localhost:8888 we should see the Laravel welcome page without errors



![[Pasted image 20220316231520.png]]

Testing:


copy `Socialyz.json` from 


```
C:\MAMP\htdocs\rw-socialyz-be\Documentation\API
```
```
C:\MAMP\htdocs\rw-socialyz-be\public\swagger\
```


Add current server to Socialyz.json

```
{
    "openapi": "3.0.0",
    "info": {
        "version": "1.0",
        "title": "Socialyz"
    },
    "servers": [
        {
            "url": "http://127.0.0.1/api/v1"
        },
        {
            "url": "http://socialyz.com/api/v1"
        },
	    {
	        "url": "http://localhost:8888/api/v1"
	    }
    ],

```

Now you can visit  http://locahost:8888/swagger/index.html

![[Pasted image 20220316232856.png]]


Also you can download Postman, look at VPS install guide to know more about this process 

![[Pasted image 20220316233642.png]]




Aditional configs:
In  .env file we have a `APP_URL` variable
that url will be part of the url while the backend is generating images routes,
We need this in for future AWS setup.

So , localhost:8888 is Ok if you are accessing in a local environment, it should be changed to the local network ip of the server machine. For example : 

APP_URL=http://xxx.xxx.x.xx




![[Pasted image 20220317000641.png]]

Once that's done you could set the ip on the app, and access the server


Tap on version number:

![[Pasted image 20220317001450.png]]
tap on options

![[Pasted image 20220317001520.png]]

And finally change ip: 
![[Pasted image 20220317001531.png]]


this property will be stored on local storage of the phone, 
once cleared will be restored to the default.
At the moment of writing this guide it's RW AWS server ip

## Troubleshooting
Database problems:

`php artisan migrate` not working and db related issues

Search `services` on windows start menu and check if mysql80
![[Pasted image 20220316225947.png]]