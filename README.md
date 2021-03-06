## Afara Restapi
[![Latest Version](https://img.shields.io/github/v/release/ryodevz/afara-restapi.svg?style=flat-square)](https://github.com/ryodevz/afara-restapi/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/ryodevz/afara-restapi.svg?style=flat-square)](https://packagist.org/packages/ryodevz/afara-restapi)

## Features

- get request
- post request
- put request

## Install via composer

Cara yang disarankan untuk memasang afara-restapi adalah melalui
[Composer](https://getcomposer.org/).

```bash
> composer require ryodevz/afara-restapi
```
## Install via git

```bash
> git clone https://github.com/ryodevz/afara-restapi
```

Lalu jalankan perintah ini
```bash
> composer install
```

### Example usage
```php
<?php

use Ryodevz\Api;

require 'vendor/autoload.php';

$api = new Api;

var_dump($api->myPublicIp());

// Example Response
192.168.2.1 
```