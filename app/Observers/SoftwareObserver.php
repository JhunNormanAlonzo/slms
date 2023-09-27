<?php

namespace App\Observers;

use App\Models\Client;
use App\Models\Software;
use Illuminate\Support\Facades\Cache;

class SoftwareObserver
{
    /**
     * Handle the Software "created" event.
     */

    private $key = "software";

    private function clearCache(){

        Cache::forget($this->key);
    }

    public function created(Software $software): void
    {
         $this->clearCache();
    }

    /**
     * Handle the Software "updated" event.
     */
    public function updated(Software $software): void
    {
         $this->clearCache();
    }

    /**
     * Handle the Software "deleted" event.
     */
    public function deleted(Software $software): void
    {
         $this->clearCache();
    }

    /**
     * Handle the Software "restored" event.
     */
    public function restored(Software $software): void
    {
         $this->clearCache();
    }

    /**
     * Handle the Software "force deleted" event.
     */
    public function forceDeleted(Software $software): void
    {
         $this->clearCache();
    }
}
