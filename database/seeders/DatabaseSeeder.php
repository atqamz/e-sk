<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::create([
            'nama' => 'admin',
            'email' => 'admin@pens.ac.id',
            'role' => 'admin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ]);
        \App\Models\User::factory(10)->create();
        \App\Models\Surat::factory(1)->create();
        \App\Models\Konten::factory(2)->create();
        \App\Models\Subkonten::factory(10)->create();
    }
}
