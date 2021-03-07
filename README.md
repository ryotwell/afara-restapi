## Afara Restapi
[![Latest Version](https://img.shields.io/github/v/release/ryodevz/afara-restapi.svg?style=flat-square)](https://github.com/ryodevz/afara-restapi/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/ryodevz/afara-restapi.svg?style=flat-square)](https://packagist.org/packages/ryodevz/afara-restapi)

## Features

- [anime-random-image](#AnimeRandomImage)
- animeku
- avatar-generator
- bitly-shortener
- brainly-scraper
- dns-lookup
- earthquake
- ebook
- fake-data-generator
- freepik-scraper
- fileinfo-mediafire
- get-youtube-video-link
- get-instagram-media-link
- get-facebook-video-link
- github-user
- google-scraper
- highlight-code
- html-viewer
- image-scraper
- instagram-user
- indonesian-territory
- ip-geolocation
- joox-music
- my-public-ip
- port-scanner
- prank-call
- quote-generator
- sim-simi
- translate
- web-page-scanner-info
- web-page-screenshot
- weather
- wiki-pedia

More info [afara.my.id](https://afara.my.id/).

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