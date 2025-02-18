<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Events\PostViewed;
use Request;
use DB;
use Auth;

class PostViewedListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(PostViewed $event)
    {

      $result = DB::table('views')->where([
                  ['view_type', '=', 'App\Post'],
                  ['view_id', '=', $event->post->id],
                  ['visitor_ip', Request::ip()]
              ])->count();

      if($result == 0) {
          DB::table('views')->insert([
              [
                  'view_id'       => $event->post->id,
                  'view_type'     => 'App\Post',
//                  'user_id'       => 1,
                  'visitor_ip'    => Request::ip(),
              ]
          ]);
      }

    }
}
