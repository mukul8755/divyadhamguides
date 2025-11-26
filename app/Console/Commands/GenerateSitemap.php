<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

use App\Models\Post;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate XML sitemap';

    public function handle()
    {
        $sitemap = Sitemap::create();

        // ---------- Static Pages ----------
        $staticPages = [
            '/',
            '/about',
            '/contact',
            '/services',
            '/stay',
            '/packages',
            '/association',
            '/travel-support',
            '/destinations',
            '/destinations/kashi',
            '/destinations/ayodhya-ram-mandir-darshan-booking-tour-packages',
            '/destinations/prayagraj'
        ];

        foreach ($staticPages as $page) {
            $sitemap->add(Url::create($page)->setPriority(0.9));
        }

        // ---------- Blog URLs ----------
        foreach (Post::all() as $blog) {
            $sitemap->add(
                Url::create("/blogs/" . $blog->id)
                   ->setChangeFrequency('weekly')
                   ->setPriority(0.8)
            );
        }

        // Write final sitemap
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('=== Sitemap Generated Successfully ===');
    }
}
