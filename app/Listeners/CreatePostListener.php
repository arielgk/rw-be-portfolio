<?php

namespace App\Listeners;

use App\Events\PostCreate;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreatePostListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PostCreate  $event
     * @return void
     */
    public function handle(PostCreate $event)
    {
        
        Log::info('Post created');



        
    }
}
