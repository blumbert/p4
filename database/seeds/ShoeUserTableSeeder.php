<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Shoe;

class ShoeUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // define array of users and their shoes
        $users = [
            'jill'  => [
                'Kinvara 7' => 'http://www.runnersworld.com/sites/runnersworld.com/files/shoe_images/saucony_kinvara_7_m_600.jpg',
                'Ride 6'    => 'https://images-na.ssl-images-amazon.com/images/I/515LYaG98IL._SX395_.jpg'
            ],
            'jamal' => [
                'Ride 6'    => 'https://images-na.ssl-images-amazon.com/images/I/515LYaG98IL._SX395_.jpg',
                'Virrata 2' => 'http://www.6pm.com/images/z/2/7/1/2/2/2/2712223-p-MULTIVIEW.jpg'
            ]
        ];

        // define lorem ipsum text for comments
        $comments = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Nullam dolor ante, tincidunt id feugiat ut, efficitur eget felis. Etiam
        egestas dui at arcu viverra dapibus. Sed a leo et tellus auctor tempus
        quis sed tortor.';

        foreach ($users as $user => $shoes) {
            //get the user
            $user = User::where('name', $user)->first();

            // add pivots for shoes
            foreach ($shoes as $shoeName => $shoe_image_url) {
                // get the shoe
                $shoe = Shoe::where('model', $shoeName)->first();

                // connect user to shoe
                $user->shoes()->save($shoe, [
                    'image_url' => $shoe_image_url,
                    'miles'     => 250,
                    'comments'  => $comments
                ]);
            }
        }
    }
}
