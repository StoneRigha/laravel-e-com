<?php

namespace Database\Seeders;

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
          // inserting dummie products in the db
          DB::table('products')->insert([
            'name' => 'LG Hometheater',
            'price' => '4200',
            'category' => 'electronics',
            'description' => 'HiFi sound system',
            'gallery'=> 'https://i0.wp.com/deejoh.com/wp-content/uploads/2019/05/LG-Home-Theatre-LHD457-5.1ch-330W-Black.jpg?fit=1200%2C1200&ssl=1'

            
        ],
        [
            'name' => 'LG TV',
            'price' => '5200',
            'category' => 'TV',
            'description' => 'Smart Tv running android',
            'gallery'=> 'https://images.yaoota.com/bXhFTPBRR34FTPfKKZym6q8SQ1c=/trim/yaootaweb-production-ke/media/crawledproductimages/60634878cc1a27773964b0cb1fac19abbc0b86ff.jpg'

            

        ],
        [
            'name' => 'LG Hometheater',
            'price' => '4200',
            'category' => 'electronics',
            'description' => 'HiFi sound system',
            'gallery'=> 'https://i0.wp.com/deejoh.com/wp-content/uploads/2019/05/LG-Home-Theatre-LHD457-5.1ch-330W-Black.jpg?fit=1200%2C1200&ssl=1'

            

        ],
        [
            'name' => 'LG cooking appliance',
            'price' => '3200',
            'category' => 'appliances',
            'description' => 'ovens and stoves',
            'gallery'=> 'https://cdn.vox-cdn.com/thumbor/9ahNZ6eDwcWuKhqD_MntH0Kff94=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/22320968/ajohnson_210222_4437__005.jpg'

            

        ]);

    }
}

