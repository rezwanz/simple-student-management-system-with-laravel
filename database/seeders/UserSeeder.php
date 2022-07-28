<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $user = User::insert([
            'name'  => 'Admin',
            'email' => 'admin@admin.com',
            'password'  => bcrypt('12345678'),
            'access_label'  => 2
        ]);

        UserDetail::insert([
            'user_id'   => 1,
        ]);

    }
}
