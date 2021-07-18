<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 500; $i++) {
            # code...
            DB::table('products')->insert([
                'name'      =>   'Product ' . $i . Str::random(10),
                'sku'       =>   'ap-'.rand(),
                'price'     =>    mt_rand(0*10, 500*10) / 10,
                'quantity'  =>    rand(0,500),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }


    }
}
