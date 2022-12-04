<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class AdminProducts extends Model
{
    public function product_category()
    {
        return $this->belongsTo(AdminCategories::class, "category", 'id');
    }
}
