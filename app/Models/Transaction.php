<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'sub_item_id',
        'no_transaction',
        'qty',
        'amount'
    ];

    public function subItem()
    {
        return $this->belongsTo(SubItem::class);
    }
}
