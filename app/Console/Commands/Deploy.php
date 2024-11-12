<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;
use Illuminate\Support\Facades\Http;

class Deploy extends Command
{
  protected $signature = 'deploy';

  protected $description = 'Publish the application';

  public function handle()
  {
    // Call the artisan command "export"
    $this->call('export');

    // Search for all occurrences of the string "https://palimpsest.ch.test" and replace it with ENV('APP_URL_PROD') in the dist folder
    // $this->replaceInDist('https://palimpsest.ch.test', env('APP_URL_PROD'));

    $this->fixMissingPages();
  }

  protected function replaceInDist($search, $replace)
  {
    $distPath = base_path('dist');
    $iterator = new RecursiveIteratorIterator(
      new RecursiveDirectoryIterator($distPath, RecursiveDirectoryIterator::SKIP_DOTS),
      RecursiveIteratorIterator::SELF_FIRST
    );

    foreach ($iterator as $file)
    {
      if ($file->isFile() && $file->getExtension() === 'html')
      {
        $filePath = $file->getPathname();
        $content = file_get_contents($filePath);
        $newContent = str_replace($search, $replace, $content);
        
        if ($content !== $newContent)
        {
          file_put_contents($filePath, $newContent);
        }
      }
    }

    $this->info("Replaced '{$search}' with '{$replace}' in the dist folder");

  }

  protected function fixMissingPages()
  {
    $this->info('Start fixing missing pages');

    $routes = [
      'mentions-legales',
      'politique-de-confidentialite',
    ];

    // Get the content for the entries in $routes
    foreach ($routes as $route)
    {
      $url = env('APP_URL') . '/' . $route;
      $content = Http::get($url)->body();
      
      // Save the content to the dist folder
      // $route is the folder, index.html is the file
      $filePath = base_path('dist/' . $route . '/index.html');
      file_put_contents($filePath, $content);
    }
  }
}
