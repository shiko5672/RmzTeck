<?php

namespace App\Listeners;

use App\Events\AddToCart;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class IncreaseCounter
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
    public function handle(AddToCart $event)
    {
     $this->updatecart($event->cart);
    }
    public function updatecart($cart){
        $cart->number=$cart->number+1;
        $cart->save();
    }
}
