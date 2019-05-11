<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'full_name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123456'),
            'mobile_number'=>'01710029052',
            'address'=>'Dhaka',
            'role'=>'admin',
            'email_verified_at'=>now()
        ]);
    }
}
