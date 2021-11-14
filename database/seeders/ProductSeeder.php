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
            'name' => 'Samsung Fold 3',
            'price' => '54200',
            'category' => 'mobile',
            'description' => 'OS 	Android 11, One UI 3.1.1
            Chipset 	Qualcomm SM8350 Snapdragon 888 5G (5 nm)
            CPU 	Octa-core (1x2.84 GHz Kryo 680 & 3x2.42 GHz Kryo 680 & 4x1.80 GHz Kryo 680)
            GPU 	Adreno 660',
            'gallery'=> 'https://i.guim.co.uk/img/media/e78695c18ca8a4699b01db857bd15d20e520db0a/617_0_4122_2473/master/4122.jpg?width=445&quality=45&auto=format&fit=max&dpr=2&s=e8756af0ce9ba487269b1016b1b423f6'

            
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
            'gallery'=> 'https://i.guim.co.uk/img/media/e78695c18ca8a4699b01db857bd15d20e520db0a/617_0_4122_2473/master/4122.jpg?width=445&quality=45&auto=format&fit=max&dpr=2&s=e8756af0ce9ba487269b1016b1b423f6'

            

        ]);

    }
}

