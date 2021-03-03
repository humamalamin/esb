<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\InvoiceResource;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();

        return InvoiceResource::collection($invoices);
    }

    public function show($invoiceId)
    {
        $invoice = Invoice::find($invoiceId);

        return new InvoiceResource($invoice);
    }
}
