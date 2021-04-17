<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DownloadUserPictures extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'download:user-pictures';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download user pictures from pravatar to the public directory';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (!Storage::exists('avatar') || !Storage::exists('profile')) {
            foreach (range(1, 70) as $image) {
                $sizes = [
                    'profile' => 320,
                    'avatar' => 64
                ];
                foreach ($sizes as $sizeName => $size) {
                    $url = "https://i.pravatar.cc/{$size}/?img=" . $image;
                    $img = "{$sizeName}/{$image}.png";
                    Storage::put($img, file_get_contents($url));

                    $this->info("{$img} saved.");
                }
            }
        } else {
            $this->info('User pictures are already saved');
        }
    }
}
