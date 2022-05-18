<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'model',
        'unit',
        'price',
        'quantity',
        
       
        ];
        public function storekeepers()
        {
            return $this->belongsTo(Storekeeper::class);
        }
}
