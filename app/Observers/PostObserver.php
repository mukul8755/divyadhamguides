<?php

namespace App\Observers;

use App\Models\Post;
use Artisan;
class PostObserver
{
    /**
     * Handle the Blog "created" event.
     */
    public function created(Post $blog): void
    {
        Artisan::call('sitemap:generate');
    }

    /**
     * Handle the Blog "updated" event.
     */
    public function updated(Post $blog): void
    {
       Artisan::call('sitemap:generate');
    }

    /**
     * Handle the Blog "deleted" event.
     */
    public function deleted(Post $blog): void
    {
        Artisan::call('sitemap:generate');
    }

    /**
     * Handle the Blog "restored" event.
     */
    public function restored(Post $blog): void
    {
        //
    }

    /**
     * Handle the Blog "force deleted" event.
     */
    public function forceDeleted(Post $blog): void
    {
        //
    }
}
