[Back](Readme.md)


Sails... installation

When deploying Passport to your application's servers for the first time, you will likely need to run the `passport:keys` command. This command generates the encryption keys Passport needs in order to generate access tokens. The generated keys are not typically kept in source control:

```php
php artisan passport:keys 

```
or inside sail
```php
sail php artisan passport:keys 

```







### Websockets config


[Github issue config](https://github.com/beyondcode/laravel-websockets/issues/693)
