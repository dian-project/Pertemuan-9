<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::updateOrCreate(
            ['email' => 'admin@dianproject.com'],
            [
                'name' => 'Administrator Dian Project',
                'password' => 'DianAdmin123!',
            ]
        );
    }
}
