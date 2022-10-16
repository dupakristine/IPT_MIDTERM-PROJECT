<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname'=>'Dupa',
                'fname'=>'Kristine',
                'address'=>'Ilijan Norte, Tubigon, Bohol',
                'phone'=>'09075125112',
                'email'=>'dupakristine96@gmail.com',
                'password'=>bcrypt('luffy143')
            ],
            [
                'lname'=>'Dupa',
                'fname'=>'Fatima',
                'address'=>'Ilijan Norte, Tubigon, Bohol',
                'phone'=>'09290909091',
                'email'=>'dupafat@gmail.com',
                'password'=>bcrypt('luffy143')
            ],
            [
                'lname'=>'Murcia',
                'fname'=>'clarke',
                'address'=>'Cahayag',
                'phone'=>'09541902451',
                'email'=>'clarke@gmail.com',
                'password'=>bcrypt('naruto-kun')
            ]
        ];

        foreach($data as $usr) {
            \App\User::create($usr);
        }
    }
}