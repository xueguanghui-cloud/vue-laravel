<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(20)->create();
        $user = User::first();
        $user->email = '24324@qq.com';
        $user->name = 'codexgh';
        $user->save();
    }
}
