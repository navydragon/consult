<?php

use Illuminate\Database\Seeder;

class MaterialTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('material_types')->insert([
            'name' => 'Презентация',
            'icon_url' => 'img/mt/preza.png'
        ]);
        DB::table('material_types')->insert([
            'name' => 'Запись вебинара',
            'icon_url' => 'img/mt/preza.png'
        ]);
        DB::table('material_types')->insert([
            'name' => 'Документ',
            'icon_url' => 'img/mt/document.png'
        ]);
        DB::table('material_types')->insert([
            'name' => 'Ссылка',
            'icon_url' => 'img/mt/silka.png'
        ]);
        DB::table('material_types')->insert([
            'name' => 'Текст',
            'icon_url' => 'img/mt/statiya.png'
        ]);
        DB::table('material_types')->insert([
            'name' => 'Ответы на вопросы',
            'icon_url' => 'img/mt/preza.png'
        ]);
        DB::table('material_types')->insert([
            'name' => 'Файл',
            'icon_url' => 'img/mt/document.png'
        ]);
    }
}
