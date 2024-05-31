<?php

namespace App\Console\Commands;

use DOMDocument;
use Exception;
use Illuminate\Console\Command;

class sitemapCommand extends Command
{
    public $path = '';
    public $data = [];
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            ini_set("memory_limit", "-1");
            set_time_limit(0);
            ini_set('max_execution_time', 0);
            ignore_user_abort(true);

            Header('Content-type: text/xml');

            $dom = new DOMDocument('1.0', 'UTF-8');

            $root = $dom->createElement('urlset');
            $dom->appendChild($root);
            $root->setAttribute('xmlns', "http://www.sitemaps.org/schemas/sitemap/0.9");
            $root->setAttribute('xmlns:xhtml', "http://www.w3.org/1999/xhtml");
            $root->setAttribute('xmlns:image', "http://www.google.com/schemas/sitemap-image/1.1");
            $root->setAttribute('xmlns:video', "http://www.google.com/schemas/sitemap-video/1.1");

            $fileName = 'sitemap.xml'; // Set the filename to sitemap.xml directly

            $urls = [
                'about-us',
                'contact-us',
                'terms-conditions',
                'privacy-policy',
                'plazzo-heights',
                'empire-residence',
                'plazzo-residence',
                'empire-suites',
                'empire-estates',
                'projects',
                'leads',
                'schedule-tour',
            ];

            foreach ($urls as $url) {
                if (isset($url)) {
                    $result = $dom->createElement('url');
                    $root->appendChild($result);
                    $result->appendChild($dom->createElement('loc', url('https://empiredevelopments.ae/') . $url)); // Use url() instead of route()
                    $result->appendChild($dom->createElement('priority', '1.0'));
                    $result->appendChild($dom->createElement('lastmod', now()));
                }
            }
            $rootPath = base_path(); 
            $dom->save($rootPath . '/' . $fileName);

            if (env('APP_ENV') == 'local') {
                dd('Sitemap Generated');
            }

            \Log::info('Sitemap generated.');

        } catch (Exception $e) {
            \Log::error($e);
        }
    }
}
