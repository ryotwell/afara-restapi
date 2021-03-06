<?php

namespace Ryodevz;

use Ryodevz\AfaraMyId;

class Joox
{
    private $base = 'joox';

    private $search = '/search';

    private $album = '/album';

    private $show = '/show';

    public function search(string $q)
    {
        return AfaraMyId::json($this->base . $this->search . '?q=' . $q);
    }

    public function album(string $album_id)
    {
        return AfaraMyId::json($this->base . $this->album . '?id=' . $album_id);
    }

    public function show(string $id)
    {
        return AfaraMyId::json($this->base . $this->show . '?id=' . $id);
    }
}
