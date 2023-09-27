<?php

namespace App\Observers;

use App\Models\ClientContact;
use Illuminate\Support\Facades\Cache;

class ClientContactObserver
{
    /**
     * Handle the ClientContact "created" event.
     */

    private $key = "clientContacts";

    private function clearCache(){

        Cache::forget($this->key);
    }
    public function created(ClientContact $clientContact): void
    {
        $this->clearCache();
    }

    /**
     * Handle the ClientContact "updated" event.
     */
    public function updated(ClientContact $clientContact): void
    {
        $this->clearCache();
    }

    /**
     * Handle the ClientContact "deleted" event.
     */
    public function deleted(ClientContact $clientContact): void
    {
        $this->clearCache();
    }

    /**
     * Handle the ClientContact "restored" event.
     */
    public function restored(ClientContact $clientContact): void
    {
        $this->clearCache();
    }

    /**
     * Handle the ClientContact "force deleted" event.
     */
    public function forceDeleted(ClientContact $clientContact): void
    {
        $this->clearCache();
    }
}
