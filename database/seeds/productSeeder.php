<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;



class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => Str::random(8),
            'product_price' => Str::random(8),
            'product_stock' => Str::random(8),
            'product_type' => Str::random(8),
            'product_discount' => Str::random(8),
            'product_rating' => Str::random(8),
            'product_description' => Str::random(8),
            'active' => Str::random(8),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

            

        ]);
    }
}
