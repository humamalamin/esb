<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'item_type_id',
        'name',
        'description'
    ];

    public function itemType()
    {
        return $this->belongsTo(ItemType::class);
    }
}