<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AdminProducts;

class AdminCategories extends Model
{
    public function admin_categories()
    {
        return $this->belongsTo(AdminCategoriesVisibility::class, "visibility", 'id');
    }

    public function categoryProduct()
    {
        return $this->hasMany(AdminProducts::class, 'category');
    }
}
