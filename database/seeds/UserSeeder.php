<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Abhisena';
        $user->email = 'abhisena@gmail.com';
        $user->email_verified_at = date('Y-m-d h:i:s');
        $user->password = bcrypt('abhisena@gmail.com');
        $user->save();
    }
}
