<?php

namespace App\Models;

use Illuminate\Filesystem\Filesystem;

class Documentation
{
    private Filesystem $fs;

    public function __construct(Filesystem $filesystem)
    {
        $this->fs = $filesystem;
    }

    public function getPage($page)
    {
        $pages = $this->getPages();
        return $pages->$page;
    }

    public function get($doc)
    {
        return json_decode($this->fs->get(resource_path("docs/{$doc}.json")));
    }

    public function exists($page): bool
    {
        $pages = $this->getPages();
        return isset($pages->$page);
    }

    private function getPages()
    {
        return json_decode($this->fs->get(resource_path("docs/pages.json")));
    }
}
