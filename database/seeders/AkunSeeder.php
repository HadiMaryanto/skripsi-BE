<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [            
            [
                'username' => 'admin',
                'name' => 'akun admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123')
            ]            
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
