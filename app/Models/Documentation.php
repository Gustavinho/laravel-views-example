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

    public function get($page)
    {
        return $this->fs->get(resource_path("docs/{$page}.json"));
    }

    public function exists($page): bool
    {
        return $this->fs->exists(resource_path("docs/{$page}.json"));
    }
}
