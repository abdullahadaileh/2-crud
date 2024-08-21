<?php

// database/seeders/ProductSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // إدخال 50 منتجًا باستخدام الفاكتوري
        Product::factory(50)->create();
    }
}
