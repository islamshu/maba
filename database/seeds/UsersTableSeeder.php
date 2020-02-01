<?php

use App\User;
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
        $user = User::create([
            'firstName' => 'islam',
            'lastName' => 'shublaq',
            'email' => 'admin@admin.com',
            'password' => bcrypt('05972326456'),

        ]);
        $user->attachRole('super_admin');
    }
}
