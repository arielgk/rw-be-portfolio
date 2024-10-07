

Common problems

**Laravel error 500 on home or accesing any endpoint**

1 - Usually caused by laravel wrong permissions and unable to write log files
Solved by:

```
sudo chmod -R 777 storage
```



2 - passport key not generated

When deploying Passport to your application's servers for the first time, you will likely need to run the `passport:keys` command. This command generates the encryption keys Passport needs in order to generate access tokens. The generated keys are not typically kept in source control:

```
# when using docker
sail php artisan passport:keys
#else 
php artisan passport:keys
```


if problem persist run 

```
# when using docker
sail php artisan passport:install
#else 
php artisan passport:install
```



------------------------------
```
  SQLSTATE[HY000] [1045] Access denied for user 'sail'@'172.30.0.3' (using password: YES) (SQL: select * from information_schema.tables where table_schema = rw_socialyz_be and table_name = migrations and table_type = 'BASE TABLE')
```

maybe container was started without an .env file

run:
```
./vendor/bin/sail down --rmi all -v
./vendor/bin/sail up -d
```
------------------------

```
RuntimeException: Personal access client not found. Please create one. in file /var/www/html/vendor/laravel/passport/src/ClientRepository.php on line 122
````

It may happen after refreshing the  DB.

run 
```
php artisan passport:install
```





