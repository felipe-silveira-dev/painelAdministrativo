<?php

namespace App\Observers;

use App\Models\ItemVenda;
use App\Models\Venda;

class VendaObserver
{
    public function created(Venda $venda): void
    {

    }

    /**
     * Handle the Venda "updated" event.
     *
     * @param  \App\Models\Venda  $venda
     * @return void
     */
    public function updated(Venda $venda)
    {
        //
    }

    /**
     * Handle the Venda "deleted" event.
     *
     * @param  \App\Models\Venda  $venda
     * @return void
     */
    public function deleted(Venda $venda)
    {
        //
    }

    /**
     * Handle the Venda "restored" event.
     *
     * @param  \App\Models\Venda  $venda
     * @return void
     */
    public function restored(Venda $venda)
    {
        //
    }

    /**
     * Handle the Venda "force deleted" event.
     *
     * @param  \App\Models\Venda  $venda
     * @return void
     */
    public function forceDeleted(Venda $venda)
    {
        //
    }
}
