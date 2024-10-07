## Local development


this guide is intended for hosts with installed php and mysql.


Dev requirements
 - [Composer](https://getcomposer.org/download/)

Server requirements

1 -   PHP >= 7.2.5

-   BCMath PHP Extension
-   Ctype PHP Extension
-   Fileinfo PHP extension
-   JSON PHP Extension
-   Mbstring PHP Extension
-   OpenSSL PHP Extension
-   PDO PHP Extension
-   Tokenizer PHP Extension
-   XML PHP Extension

2 - Mysql or Mariadb 
[Mysql install documentation](https://dev.mysql.com/doc/mysql-installation-excerpt/5.7/en/)
[ Mariadb install guide](https://www.mariadbtutorial.com/getting-started/install-mariadb/)



Create database ‘socialyz’ and import socialyz.sql file.

clone repository
  
edit .env file with your DB  information.

![[images/f9e3786ad08d641633a8ebd7c56757e8.png]]

Open a terminal, cd where you unzipped the project files and  run the following command:  




```
cd rw-socializ-be
php artisan serve 

```
