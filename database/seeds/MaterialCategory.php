<?php

use Illuminate\Database\Seeder;

class MaterialCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i<=11; $i++)
        {
            DB::table('material_category')->insert([
                'material_id' => $i,
                'category_id' => 16
            ]);
        }
        for ($i = 12; $i<=20; $i++)
        {
            DB::table('material_category')->insert([
                'material_id' => $i,
                'category_id' => 17
            ]);
        }
        for ($i = 21; $i<=26; $i++)
        {
            DB::table('material_category')->insert([
                'material_id' => $i,
                'category_id' => 17
            ]);
            DB::table('material_category')->insert([
                'material_id' => $i,
                'category_id' => 16
            ]);
        }

        for ($i = 27; $i<=33; $i++)
        {
            DB::table('material_category')->insert([
                'material_id' => $i,
                'category_id' => 17
            ]);
        }
        for ($i = 34; $i<=43; $i++)
        {
            DB::table('material_category')->insert([
                'material_id' => $i,
                'category_id' => 16
            ]);
        }

        for ($i = 44; $i<=47; $i++)
        {
            DB::table('material_category')->insert([
                'material_id' => $i,
                'category_id' => 17
            ]);
        }
    }
}
