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
        ]);

        DB::table('shoes')->insert([
            'created_at'      => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'      => Carbon\Carbon::now()->toDateTimeString(),
            'company'         => 'Saucony',
            'model'           => 'Ride 6',
            'heel_toe_offset' => '8mm',
        ]);

        DB::table('shoes')->insert([
            'created_at'      => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'      => Carbon\Carbon::now()->toDateTimeString(),
            'company'         => 'Saucony',
            'model'           => 'Virrata 2',
            'heel_toe_offset' => '0mm',
        ]);
    }
}
