<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    public function scopeDataHome()
    {
        $data = DB::table('products')
            ->join('cashiers', 'cashiers.id', '=', 'products.id_cashier')
            ->join('categories', 'categories.id', '=', 'products.id_category')
            ->select(
                'products.id as idpro',
                'products.name as namaproduk',
                'products.price as harga',
                'categories.name as kateg',
                'cashiers.name as cashier'
            );
        
        return $data;
    }
}
