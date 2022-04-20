# miniSM
Small web app to register users with email and let them vote on beers. </br>
This app is written and intended for mobile use only.


# Installation

## webpage
upload the contents of 'www' to your webserver.

#### Edit the contents of creds.php

```php
//Database
$DB_HOST_FQDN = "myDatabase.com.mysql";
$DB_USER = "myDatabase_com";
$DB_USER_PASS = "veryveryveryveryveryveryverySafepasswords";
$DB_NAME = "myDatabase_com";

//Email Credentials
$SMTP_SENDER_EMAIL = "myEmail@example.com";
$SMTP_SENDER_SECRET = "secret";
$SMTP_SENDER_HOST_FQDN = "send.one.com";
$SMTP_SENDER_HOST_PORT = 465;
```

#### Edit the contents of misc.php

```php
$salt = 'myOwnSaltySalt';
$VERIFICATION_URL_FQDN = 'https://www.example.com/'; //top-domain e.g. https://www.example.com/
```

## SQL / phpMyAdmin
Import the three tables 'miniSM_beers.sql', 'miniSM_Rating.sql', 'miniSM_Users.sql'.

