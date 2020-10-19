<?php

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
        $this->call(NpaSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(MaterialTypeSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(MaterialCategory::class);
        
    }
}
