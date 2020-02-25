<?php

namespace App\Observers;

use App\Booking;

class BookingObserver
{
    /**
     * Handle the booking "created" event.
     *
     * @param  \App\Booking  $booking
     * @return void
     */
    public function created(Booking $booking)
    {
        //
    }

    /**
     * Handle the booking "updated" event.
     *
     * @param  \App\Booking  $booking
     * @return void
     */
    public function updated(Booking $booking)
    {
        //
    }

    /**
     * Handle the booking "deleted" event.
     *
     * @param  \App\Booking  $booking
     * @return void
     */
    public function deleted(Booking $booking)
    {
        //
    }

    /**
     * Handle the booking "restored" event.
     *
     * @param  \App\Booking  $booking
     * @return void
     */
    public function restored(Booking $booking)
    {
        //
    }

    /**
     * Handle the booking "force deleted" event.
     *
     * @param  \App\Booking  $booking
     * @return void
     */
    public function forceDeleted(Booking $booking)
    {
        //
    }
}
