<?php

namespace App\Listeners;

use App\Events\ProductCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Services\InventoryService;


class CheckLowStock implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct(private InventoryService $inventoryService)
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProductCreated $event): void
    {
        if ($this->inventoryService->isLowStock($event->product)) {
            session()->flash('warning', 'Warning: ' . $event->product->name . ' is low on stock.');
        }
    }
}
