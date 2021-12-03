<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([[
          'name' =>'LG mobile',
          'price' => '1000',
          'category' => 'mobile',
          'gallery'  => 'https://media.wired.com/photos/5f401ecca25385db776c0c46/master/pass/Gear-How-to-Apple-ios-13-home-screen-iphone-xs-06032019_big_large_2x.jpga',
          'description' => 'Smartphone 4gb ram',
        ],
        [
            'name' =>'Washing Machine',
            'price' => '10000',
            'category' => 'electronic',
            'gallery'  => 'https://cdn.shopify.com/s/files/1/0532/7074/1168/products/Washingmachine_1_b6c7763c-d303-4506-93aa-4d0733d8ebf0_700x_crop_center.jpg?v=1633958155',
            'description' => 'Machine is good machine',
          ],
          [
            'name' =>'T-shirt',
            'price' => '1000',
            'category' => 'Clothes',
            'gallery'  => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBY65EpsEdiPB0qZFUsRtsvSMVcZWZCk2dxw&usqp=CAU',
            'description' => 'Branded t shirt',
          ],
          [
            'name' =>'Fogg perfume',
            'price' => '600',
            'category' => 'Perfume',
            'gallery'  => 'https://cdn.shopify.com/s/files/1/0535/2033/5037/products/CK-ONE_720x720.jpg?v=1611433991',
            'description' => 'Smartphone 4gb ram',
          ],
          [
            'name' =>'Lenovo laptop',
            'price' => '10000',
            'category' => 'LAptop',
            'gallery'  => 'https://www.google.com/aclk?sa=l&ai=DChcSEwj0jLG0h8X0AhXWMCsKHTS5C7IYABADGgJzZg&sig=AOD64_0yAbmLmboKqlmZz6LdAhXtG_m5AQ&adurl&ctype=5&ved=2ahUKEwj7y6O0h8X0AhVFR3wKHVNMAMcQwg96BAgBEFo',
            'description' => 'Laptop is for good',
          ],
        ]
    );
    }
}
