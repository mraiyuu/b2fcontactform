<!--Heading-->
![npm](https://img.shields.io/npm/v/npm
) ![php](https://img.shields.io/badge/php-v8.0-v8
) ![laravel](https://img.shields.io/badge/laravel-v9.0-v8
)

---


# _Installation_

```diff
+PHP version 8 is required
+
```
```
composer require muva/contactform dev-main
php artisan vendor:publish, --tag-contactform-config
php artisan migrate 
```
<br/>
<br/>

# _Configuration_
```diff
Connect to your database
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=****
MAIL_USERNAME=**************
MAIL_PASSWORD=**************

setup your mail details 
```

