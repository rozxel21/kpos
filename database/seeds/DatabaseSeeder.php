<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->username = 'admin';
        $user->password = bcrypt('admin');
        $user->credentials = 1;
        $user->save();
    }
}
