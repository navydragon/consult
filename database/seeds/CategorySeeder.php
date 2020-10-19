<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Планирование дорожных работ',
            'icon_url' => 'img/cat/1.png',
        ]);
        DB::table('categories')->insert([
            'name' => 'Ценообразование ',
            'icon_url' => 'img/cat/2.png',
        ]);
        DB::table('categories')->insert([
            'name' => 'Порядок составления документации для торгов.',
            'icon_url' => 'img/cat/3.png',
        ]);
        DB::table('categories')->insert([
            'name' => 'Порядок подготовки и составления договоров ',
            'icon_url' => 'img/cat/4.png',
        ]);
        DB::table('categories')->insert([
            'name' => 'Порядок документальной приемки и подписания форм КС-2, КС-3',
            'icon_url' => 'img/cat/5.png',
        ]);
        DB::table('categories')->insert([
            'name' => 'Взаимодействие с казначейством',
            'icon_url' => 'img/cat/6.png',
        ]);
        DB::table('categories')->insert([
            'name' => 'Ведение исполнительной документации',
            'icon_url' => 'img/cat/7.png',
        ]);
        DB::table('categories')->insert([
            'name' => 'Составление технического задания на проектирование',
            'icon_url' => 'img/cat/8.png',
        ]);
        DB::table('categories')->insert([
            'name' => 'Приемка объекта в эксплуатацию',
            'icon_url' => 'img/cat/9.png',
        ]);
        DB::table('categories')->insert([
            'name' => 'Оформление земельных участков',
            'icon_url' => 'img/cat/10.png',
        ]);
        DB::table('categories')->insert([
            'name' => 'Порядок приемки проектных работ, внесения изменений в проектную документацию ',
            'icon_url' => 'img/cat/11.png',
        ]);
        DB::table('categories')->insert([
            'name' => 'Порядок переустройства инженерных сетей. Заключение договоров о компенсации ',
            'icon_url' => 'img/cat/12.png',
        ]);
        DB::table('categories')->insert([
            'name' => 'Оформление и утверждение документации по планировке территории, кадастровые работы. Техническая паспортизация объектов.',
            'icon_url' => 'img/cat/13.png',
        ]);
        DB::table('categories')->insert([
            'name' => 'Оценка земельных участков и объектов недвижимости на них, подлежащих изъятию.',
            'icon_url' => 'img/cat/14.png',
        ]);
        DB::table('categories')->insert([
            'name' => 'Типовые нарушения, выявляемые контролирующими органами при проверках.',
            'icon_url' => 'img/cat/15.png',
        ]);
        DB::table('categories')->insert([
            'name' => 'Особенности содержания, ремонта, проектирования и т.д.',
            'icon_url' => 'img/cat/16.png',
        ]);
        DB::table('categories')->insert([
            'name' => 'Прочие виды деятельности',
            'icon_url' => 'img/cat/17.png',
        ]);
        
    }
}
