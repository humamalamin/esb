<?php

namespace App\View\Components;

use App\Models\Transaction;
use Illuminate\View\Component;

class SelectTransaction extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $transactions = Transaction::all();

        return view('components.select-transaction', compact('transactions'));
    }
}
