<?php

use Illuminate\Database\Seeder;

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
            'jill'  => ['Kinvara 7', 'Ride 6'],
            'jamal' => ['Ride 6', 'Virrata 2']
        ];

        // define lorem ipsum text for comments
        $comments = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Nullam dolor ante, tincidunt id feugiat ut, efficitur eget felis. Etiam
        egestas dui at arcu viverra dapibus. Sed a leo et tellus auctor tempus
        quis sed tortor.';

        foreach ($users as $user => $shoes) {
            //get the user
            $user = User::where('name', $user);

            // add pivots for shoes
            foreach ($shoes as $shoeName) {
                // get the shoe
                $shoe = Shoe::where('model', $shoeName);

                // connect user to shoe
                $user->shoes()->save($shoe, [
                    'miles' => 250,
                    'comments' => $comments
                ]);
            }
        }
    }
}
