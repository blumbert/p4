<?php

use Illuminate\Database\Seeder;

class ShoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shoes')->insert([
            'created_at'      => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'      => Carbon\Carbon::now()->toDateTimeString(),
            'company'         => 'Saucony',
            'model'           => 'Kinvara 7',
            'heel_toe_offset' => '4mm',
            'image_url'       => 'http://www.runnersworld.com/sites/runnersworld.com/files/shoe_images/saucony_kinvara_7_m_600.jpg'
        ]);

        DB::table('shoes')->insert([
            'created_at'      => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'      => Carbon\Carbon::now()->toDateTimeString(),
            'company'         => 'Saucony',
            'model'           => 'Ride 6',
            'heel_toe_offset' => '8mm',
            'image_url'       => 'https://images-na.ssl-images-amazon.com/images/I/515LYaG98IL._SX395_.jpg'
        ]);

        DB::table('shoes')->insert([
            'created_at'      => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'      => Carbon\Carbon::now()->toDateTimeString(),
            'company'         => 'Saucony',
            'model'           => 'Virrata 2',
            'heel_toe_offset' => '0mm',
            'image_url'       => 'http://www.6pm.com/images/z/2/7/1/2/2/2/2712223-p-MULTIVIEW.jpg'
        ]);
    }
}
