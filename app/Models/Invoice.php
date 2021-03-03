<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'transaction_id',
        'no_invoice',
        'from',
        'destination',
        'issue_date',
        'due_date',
        'subject',
        'sub_total',
        'tax',
        'payment'
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
