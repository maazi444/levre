<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AdminProducts;

class Orders extends Model
{
    protected $guarded = [];

    public function OrderDetail()
    {
        return $this->belongsTo(AdminProducts::class, 'prod_id', 'prodid');
    }
}
