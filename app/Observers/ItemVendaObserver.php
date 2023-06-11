<?php

namespace App\Observers;

use App\Models\ItemVenda;
use App\Models\Produto;

class ItemVendaObserver
{
    /**
     * Handle the ItemVenda "created" event.
     *
     * @param  \App\Models\ItemVenda  $itemVenda
     * @return void
     */
    public function created(ItemVenda $itemVenda)
    {
        $produto = Produto::find($itemVenda->produto_id);
        $produto->quantidade -= $itemVenda->quantidade;
        $produto->save();
    }

    /**
     * Handle the ItemVenda "updated" event.
     *
     * @param  \App\Models\ItemVenda  $itemVenda
     * @return void
     */
    public function updated(ItemVenda $itemVenda)
    {
        //
    }

    /**
     * Handle the ItemVenda "deleted" event.
     *
     * @param  \App\Models\ItemVenda  $itemVenda
     * @return void
     */
    public function deleted(ItemVenda $itemVenda)
    {
        //
    }

    /**
     * Handle the ItemVenda "restored" event.
     *
     * @param  \App\Models\ItemVenda  $itemVenda
     * @return void
     */
    public function restored(ItemVenda $itemVenda)
    {
        //
    }

    /**
     * Handle the ItemVenda "force deleted" event.
     *
     * @param  \App\Models\ItemVenda  $itemVenda
     * @return void
     */
    public function forceDeleted(ItemVenda $itemVenda)
    {
        //
    }
}
