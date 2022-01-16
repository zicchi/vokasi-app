<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
        Admin::factory()->create([
            'name' => 'Dev',
            'username' => 'dev',
            'password' => bcrypt('dev')
        ]);
        Admin::factory()->count(2)->create();
    }
}
