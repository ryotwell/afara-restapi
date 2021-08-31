<?php

namespace Ryodevz\AfaraRestApi;

use Ryodevz\AfaraRestApi\Animeku;

class Api
{
    private function build_query(array $query = [])
    {
        return http_build_query($query);
    }

    public function animeRandomImage()
    {
        return AfaraMyId::json('anime-random-image');
    }

    public function animeku()
    {
        return new Animeku;
    }

    public function avatarGenerator()
    {
        return AfaraMyId::TextOrPlain('avatar-generator');
    }

    public function bitlyShortener(string $long_url)
    {
        return AfaraMyId::json('bitly-shortener?url=' . $long_url);
    }

    public function brainlyScraper(string $q)
    {
        return AfaraMyId::json('brainly-scraper?q=' . $q);
    }

    public function dnsLookup(string $domain)
    {
        return AfaraMyId::json('dns-lookup?domain=' . $domain);
    }

    public function earthquake()
    {
        return AfaraMyId::json('earthquake');
    }

    public function ebook(string $q)
    {
        return AfaraMyId::json('ebook?q=' . $q);
    }

    public function fakeDataGenerator(array $option = [])
    {
        return AfaraMyId::json('fake-data-generator?' . $this->build_query($option));
    }

    public function freepikScraper(string $q)
    {
        return AfaraMyId::json('freepik-scraper?q=' . $q);
    }

    public function fileinfoMediafire(string $url)
    {
        return AfaraMyId::json('fileinfo-mediafire?url=' . $url);
    }

    public function getYoutubeVideoLink(string $url)
    {
        return AfaraMyId::json('get-youtube-video-link?url=' . $url);
    }

    public function getInstagramMediaLink(string $url)
    {
        return AfaraMyId::json('get-instagram-media-link?url=' . $url);
    }

    public function getFacebookVideoLink(string $url)
    {
        return AfaraMyId::json('get-facebook-video-link?url=' . $url);
    }

    public function githubUser(string $username)
    {
        return AfaraMyId::json('github-user?username=' . $username);
    }

    public function googleSearch(string $q)
    {
        return AfaraMyId::json('google-scraper?q=' . $q);
    }

    public function highlightCode($body)
    {
        return AfaraMyId::TextOrPlain('highlight-code?body=' . $body);
    }

    public function htmlViewer(string $url)
    {
        return AfaraMyId::json('html-viewer?url=' . $url);
    }

    public function imageScraper(string $q)
    {
        return AfaraMyId::json('image-scraper?q=' . $q);
    }

    public function instagramUser(string $username)
    {
        return AfaraMyId::json('instagram-user?username=' . $username);
    }

    public function indonesianTerritory(string $area)
    {
        return AfaraMyId::json('indonesian-territory?area=' . $area);
    }

    public function ipGeolocation(int $ipaddress)
    {
        return AfaraMyId::json('ip-geolocation?ipaddress=' . $ipaddress);
    }

    public function joox()
    {
        return new Joox;
    }

    public function myPublicIp()
    {
        return AfaraMyId::json('my-public-ip');
    }

    public function portScanner(string $hostname)
    {
        return AfaraMyId::TextOrPlain('port-scanner?hostname=' . $hostname);
    }

    public function prankCall(int $number)
    {
        return AfaraMyId::json('prank-call?number=' . $number);
    }

    public function quoteGenerator()
    {
        return AfaraMyId::json('quote-generator');
    }

    public function simSimi(string $text)
    {
        return AfaraMyId::json('sim-simi?text=' . $text);
    }

    public function translate(array $params = ['text' => null, 'to' => 'en_US'])
    {
        return AfaraMyId::json('translate?' . $this->build_query($params));
    }

    public function webPageScannerInfo(string $url)
    {
        return AfaraMyId::json('web-page-scanner-info?url=' . $url);
    }

    public function webPageScreenshot(array $params)
    {
        return AfaraMyId::TextOrPlain('web-page-screenshot?' . $this->build_query($params));
    }

    public function weather(string $territory)
    {
        return AfaraMyId::json('weather?territory=' . $territory);
    }

    public function wikiPedia(string $q)
    {
        return AfaraMyId::json('wiki-pedia?q=' . $q);
    }
}
