## Afara Restapi

[![Latest Version](https://img.shields.io/github/v/release/ryodevz/afara-restapi.svg?style=flat-square)](https://github.com/ryodevz/afara-restapi/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/ryodevz/afara-restapi.svg?style=flat-square)](https://packagist.org/packages/ryodevz/afara-restapi)

## Install via composer

Cara yang disarankan untuk memasang afara-restapi adalah melalui
[Composer](https://getcomposer.org/).

```bash
> composer require ryodevz/afara-restapi
```

## Install via git

```bash
> git clone https://github.com/ryodevz/afara-restapi
> cd afara-restapi
> composer install
```

## Features

| Method                                                       | Description          |
| ------------------------------------------------------------ | -------------------- |
| animeRandomImage()                                           | Ramdom gambar        |
| search($query'), episodes($anime_slug), video($episode_slug) | film anime           |
| avatarGenerator() [name, color, background]                  | Generate avatar      |
| bitlyShortener($link)                                        | Perpendek link       |
| brainlyScraper($query)                                       | Cari tau             |
| dnsLookup($domain)                                           | Dns                  |
| earthquake()                                                 | Gempa                |
| ebook($query)                                                | E-Book               |
| fakeDataGenerator($options) ['sub', 'limit', 'locale']       | Generate data palsu  |
| freepikScraper($query)                                       | Cari design          |
| fileinfoMediafire($link)                                     | Info file mediafire  |
| getYoutubeVideoLink($link)                                   | url video            |
| getInstagramMediaLink($link)                                 | url media IG         |
| getFacebookVideoLink($link)                                  | Video facebook       |
| githubUser($username)                                        | Info user github     |
| googleScraper($query)                                        | Search engine google |
| highlightCode($body)                                         | Warnai code program  |
| htmlViewer($link)                                            | SC html              |
| imageScraper($query)                                         | Cari gambar          |
| instagramUser($username)                                     | User stalker         |
| indonesianTerritory($wilayah)                                | Wilayah Indo         |
| ipGeolocation($ipaddress)                                    | Geo IP               |
| search($query), album($albumid) show($musicid)               | Joox music           |
| myPublicIp()                                                 | ip public            |
| portScanner($hostname)                                       | Scan port            |
| prankCall($number)                                           | prank-call           |
| quoteGenerator()                                             | Quotes               |
| simSimi($text)                                               | sim-simi             |
| translate(['text' => 'Hello', 'to' => 'id_ID])               | Translate            |
| webPageScannerInfo($Link)                                    | Scan                 |
| webPageScreenshot($link)                                     | Screenshot           |
| weather()                                                    | Cuaca                |
| wikiPedia($query)                                            | wiki-pedia           |

Info selengkapnya [public-restapi.herokuapp.com](https://public-restapi.herokuapp.com/).

### Contoh memanggil untuk Api MyPublicIP

```php
<?php

use Ryodevz\Api;

require 'vendor/autoload.php';

$api = new Api;

$ipaddress = $api->myPublicIp();

echo $ipaddress;
```

### Contoh memanggil untuk Api Animeku

```php

use Ryodevz\Api;

require 'vendor/autoload.php';

$api = new Api;

$search = $api->animeku()->search('naruto');
$episodes = $api->animeku()->episodes('naruto-shippuuden');
$video_url = $api->animeku()->video('naruto-shippuuden-episode-488-sub-indo');
```
