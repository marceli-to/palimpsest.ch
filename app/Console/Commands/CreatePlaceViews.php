<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

class CreatePlaceViews extends Command
{
    protected $signature = 'views:create-places';
    protected $description = 'Create Blade views for each place in config/places.php';

    public function handle()
    {
        $places = Config::get('places');
        $viewsPath = resource_path('views/pages/places');

        if (!is_dir($viewsPath)) {
            mkdir($viewsPath, 0755, true);
        }

        foreach ($places as $key => $place) {
            $filename = $viewsPath . '/' . $key . '.blade.php';
            if (!file_exists($filename)) {
                file_put_contents($filename, "{{-- View for ".$place." --}}");
                $this->info("Created view for ". $place);
            } else {
                $this->warn("View for ". $place['name'] ." already exists at ". $filename ."");
            }
        }

        $this->info('Place views creation process completed.');
    }
}
