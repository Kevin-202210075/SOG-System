<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\DataAdmin;
use App\Models\DataBarang;
use App\Models\DataCustomer;
use App\Models\DataSupplier;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')

        ]);

        User::factory(10)->create();

        DataCustomer::factory(10)->create();
        DataSupplier::factory(10)->create();
        DataBarang::factory(10)->create();
    }
}
