<?php

namespace App\Observers;

use App\Models\Client;
use Illuminate\Support\Facades\Cache;

class ClientObserver
{
    /**
     * Handle the Client "created" event.
     */

    private $key = "client";

    private function clearCache(){

        Cache::forget($this->key);
    }

    public function created(Client $client): void
    {
        $this->clearCache();
    }

    /**
     * Handle the Client "updated" event.
     */
    public function updated(Client $client): void
    {
        $this->clearCache();
    }

    /**
     * Handle the Client "deleted" event.
     */
    public function deleted(Client $client): void
    {
        $this->clearCache();
    }

    /**
     * Handle the Client "restored" event.
     */
    public function restored(Client $client): void
    {
        $this->clearCache();
    }

    /**
     * Handle the Client "force deleted" event.
     */
    public function forceDeleted(Client $client): void
    {
        $this->clearCache();
    }
}
