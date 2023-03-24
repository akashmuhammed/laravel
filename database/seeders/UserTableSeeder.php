<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      User::create(
        [
            'name' => 'infinitecoders',
            'email'=> 'infinitecoders@gmail.com',
            'Date_of_birth' => '1998-12-5',
        ]
        );
        User::create(
            [
                'name' => 'inf2d2s',
                'email'=> 'infi2s@gmail.com',
                'Date_of_birth' => '1998-12-5',
            ]
            );
            User::create(
                [
                    'name' => 'infi3o3s',
                    'email'=> 'infi33rs@gmail.com',
                    'Date_of_birth' => '1998-12-5',
                ]
                );

                

                
    
    }   
}
