<?php

namespace Ryodevz\AfaraRestApi;

use Ryodevz\AfaraRestApi\AfaraMyId;

class Animeku
{
    private $base = 'animeku';

    private $search = '/search';

    private $episode = '/episode';

    private $video = '/video';

    public function search(string $q)
    {
        return AfaraMyId::json($this->base . $this->search . '?q=' . $q);
    }

    public function episodes(string $slug)
    {
        return AfaraMyId::json($this->base . $this->episode . '?slug=' . $slug);
    }

    public function video(string $episode_slug)
    {
        return AfaraMyId::json($this->base . $this->video . '?episode_slug=' . $episode_slug);
    }
}
