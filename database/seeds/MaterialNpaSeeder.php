<?php

use Illuminate\Database\Seeder;

class MaterialNpaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('material_npa')->insert([
            'material_id' => 48,
            'npa_id' => 15
        ]);
        DB::table('material_npa')->insert([
            'material_id' => 49,
            'npa_id' => 5
        ]);
    }
}
