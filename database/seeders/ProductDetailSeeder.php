<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductDetail;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductDetail::factory()
        ->count(50)
        ->create();
    }
}
