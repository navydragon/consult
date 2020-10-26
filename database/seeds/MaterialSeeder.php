<?php

use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert([
            'name' => 'Макаров Е.Н. Результаты документарного мониторинга (аудита) качества дорожных работ в субъектах РФ в 2019 году, основные проблемные вопросы.',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1cMuV2ou6cX2Dz0VCyTUkEI6zZzJlf_Vi/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //1
        
        DB::table('materials')->insert([
            'name' => ' Криушин П.А. Мониторинг (аудит) качества дорожных работ в субъектах РФ в 2020 году НП БКАД организация работ, порядок взаимодействия, выявленная проблематика по состоянию на май 2020.',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/163FrEE9RnATya1ZzbxP0c_T6NHF8dgiZ/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //2
        DB::table('materials')->insert([
            'name' => 'Макаров Е.Н. Особенности организации службы контроля качества регионального заказчика.',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1_U41EupfBF_ksCKPEdfhMoTGb5dKjB_Z/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //3

        DB::table('materials')->insert([
            'name' => 'Вопросы обеспечения качества работ в рамках НП БКАД',
            'type_id' => 2,
            'url' => 'https://drive.google.com/file/d/1dZ3ev-rXiND52GLGhQGwjda2wpPEHiTQ/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //4
        //28-29
        DB::table('materials')->insert([
            'name' => 'Кашевская Е.В. Вопросы практического использования Реестра новых и наилучших доступных технологий.',
            'type_id' => 1,
            'url' => '',
            'created_at' => date("Y-m-d H:i:s")
        ]); //5

        DB::table('materials')->insert([
            'name' => 'Стук С.Н. Особенности современных стандартов в области производства и укладки асфальтобетона. Особенности современной классификации битумных вяжущих. Необходимое лабораторное обеспечение.',
            'type_id' => 1,
            'url' => '',
            'created_at' => date("Y-m-d H:i:s")
        ]); //6

        DB::table('materials')->insert([
            'name' => 'Жданов К.А. Основные положения комплекса национальных стандартов на асфальтобетон, разработанных на основе ПНСТ 183-2019 и ПНСТ 184-2019',
            'type_id' => 1,
            'url' => '',
            'created_at' => date("Y-m-d H:i:s")
        ]); //7
        DB::table('materials')->insert([
            'name' => 'Кадыров Г.Ф. Требования национальных стандартов к проектированию и испытанию асфальтобетонных смесей в системе объемно-функционального проектирования.',
            'type_id' => 1,
            'url' => '',
            'created_at' => date("Y-m-d H:i:s")
        ]); //8
        DB::table('materials')->insert([
            'name' => 'Воробьева О.Г. Особенности практического применения стандартов, определяющих требования и методы испытаний применительно к асфальтобетонным смесям объемно-функционального метода.',
            'type_id' => 1,
            'url' => '',
            'created_at' => date("Y-m-d H:i:s")
        ]); //9
        DB::table('materials')->insert([
            'name' => 'Тихонов А.Ю. Практические аспекты приготовления, укладки и контроля качества асфальтобетонных смесей при применении объемно-функционального метода проектирования.',
            'type_id' => 1,
            'url' => '',
            'created_at' => date("Y-m-d H:i:s")
        ]); //10
        DB::table('materials')->insert([
            'name' => 'Вопросы внедрения и практического применения новых технологий, технологических решений и материалов. Требования к асфальтобетонным смесям по современным методологиям проектирования в Российской Федерации',
            'type_id' => 2,
            'url' => 'https://drive.google.com/file/d/1x68VzXsFCEDaW_1XRh8xEcyvPbMYIonJ/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //11
        
        //21-27
        DB::table('materials')->insert([
            'name' => 'Перфилов А.С. Системные проблемы, выявленные по результатам мониторинга хода контрактации объектов региональных программ дорожной деятельности (региональных проектов)',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1VMGYA5lHEZwGwUpuungbf0tnHlllxMxk/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //12
        DB::table('materials')->insert([
            'name' => 'Бокань В.А.,  Байлиева А.С. Нормативно-правовое регулирование в сфере заключения КЖЦ. Методическое обеспечение заключения контрактов на принципах жизненного цикла в 2020 год',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1S4K2CZEeyIvmYBdgvZgKOyjfKwZ0nFv7/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //13
        DB::table('materials')->insert([
            'name' => 'Новожилова И.В., Стрижевский Д.А. Создание системы повышения квалификации кадров дорожного хозяйства в 2020 году программы, темы и сроки',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1KlJz6aZkRl-9WaopLM-E8Q5EcEPaxgW0/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //14
        DB::table('materials')->insert([
            'name' => 'Вопросы обеспечения достижения результатов и показателей НП БКАД',
            'type_id' => 2,
            'url' => 'https://drive.google.com/file/d/19NmNR1xVRx1gAteWbwV6Guafse3CMVGC/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //15
        //22-26
        DB::table('materials')->insert([
            'name' => 'ТРАНСПОРТНОЕ ПЛАНИРОВАНИЕ В СУБЪЕКТАХ РОССИЙСКОЙ ФЕДЕРАЦИИ В РАМКАХ РЕАЛИЗАЦИИ НП «БКАД» (для разыгравших конкурсы)',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1vkQVD1WVanbmz4bIZZWdObPkaCOeIodT/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //16
        DB::table('materials')->insert([
            'name' => 'Ануфриев Н.С. Согласование аналитической записки по документам транспортного планирования в отношении территории субъекта РФ.',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1QnAIa-cqJ_EU8sJ7t8zpsVF8o72R1dDJ/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //17
        DB::table('materials')->insert([
            'name' => 'Пащенко В.С. Итоги отбора городских агломераций для участия в мероприятии по обновлению подвижного состава наземного общественного транспорта на условиях льготного лизинга.',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1YOUcJuql7wFZNrM4zEX-_uOKLB7OCZcx/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //18
        DB::table('materials')->insert([
            'name' => 'ТРАНСПОРТНОЕ ПЛАНИРОВАНИЕ В СУБЪЕКТАХ РОССИЙСКОЙ ФЕДЕРАЦИИ В РАМКАХ РЕАЛИЗАЦИИ НП «БКАД» (для не разыгравших конкурсы)',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1YidVhD4o8JA_jsIRLKNm4-srpW-qlHzt/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //19
        DB::table('materials')->insert([
            'name' => 'Особенности разработки и утверждения документов транспортного планирования городских агломераций и субъектов Российской Федерации',
            'type_id' => 2,
            'url' => 'https://drive.google.com/file/d/1jzQU0CQxZ10TlzCChtlWTJcu7JvcCgxo/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //20

        //28.07
        DB::table('materials')->insert([
            'name' => 'Воробьева О.Г. Особенности и практические аспекты проектирования составов асфальто-бетонных смесей объемно-функциональным методом.',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1hn1QmWp7y_5m25-udw2VZCIpk_i2RSxp/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //21
        DB::table('materials')->insert([
            'name' => 'Дамье Е.Л. Причины перехода на методы объемного проектирования асфальтобетона. Зарубежный опыт применения.',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1kMi9lnkATB54IJZsfESp8D5-rykBGKAy/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //22
        DB::table('materials')->insert([
            'name' => 'Стук С.Н. Оснащение испытательных лабораторий оборудованием для объемно-функционального проектирования.',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1U9ShBh8XP-IUStDgP_fUB08WrbAE3HRG/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //23
        DB::table('materials')->insert([
            'name' => 'Тихонов А.Ю. Практические аспекты производства, укладки, укатки и контроля качества асфальтобетонных смесей, запроектированных объемно-функциональным методом.',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1Bn4HczMF9xULGA9qFMrIU4RJhuA05J8s/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //24
        DB::table('materials')->insert([
            'name' => 'Хусид Д.Л. Практика перевода дорожной отрасли региона на работу по стандартам объемно-функционального проектирования.',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1Om8F-Mnhe1_exL_obA0bCFp9UUAqeX63/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //25
        DB::table('materials')->insert([
            'name' => 'Внедрение технологии устройства асфальтобетонных слоев с применением асфальтобетонных смесей, запроектированных объемно-функциональным методом',
            'type_id' => 2,
            'url' => 'https://drive.google.com/file/d/1TtU3qVkg5D4u_JN7qStAos017E5GZlWR/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //26
        
        //29.07
        DB::table('materials')->insert([
            'name' => 'Обзор изменений нормативно - правового регулирования КЖЦ в дорожной отрасли, рекомендации по их заключению, а также перспективы их развития.',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1ZbRJFh_u_QEWs2Ttd9lkfoy_D7TMRuTK/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //27
        DB::table('materials')->insert([
            'name' => 'ПРИНЦИПЫ ПРОЕКТИРОВАНИЯ ИТС',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1NptYmWW78h3fwqcfkiPiu0qo2dIYtT75/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //28
        DB::table('materials')->insert([
            'name' => 'Вопросы обеспечения информационной безопасности при проектировании ИТС',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1ApsjxRWJF17zKcMx2wTZnjyqVxEzh4tx/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //29
        DB::table('materials')->insert([
            'name' => 'ВЗАИМОСВЯЗЬ ТРАНСПОРТНОГО ПЛАНИРОВАНИЯ И ИТС',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1YAZvGehxbrI-wl6GI4bY3nZ0utQVMtVF/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //30
        DB::table('materials')->insert([
            'name' => 'РАЗРАБОТКА КОНЦЕПЦИИ СОЗДАНИЯ ИНТЕЛЛЕКТУАЛЬНОЙ ТРАНСПОРТНОЙ СИСТЕМЫ СУБЪЕКТА РОССИЙСКОЙ ФЕДЕРАЦИИ',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1s40qcs8wJBc3j9Wh9gHfHesJpHm332kT/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //31
        DB::table('materials')->insert([
            'name' => 'Поручение Минтранса 18.10.2018',
            'type_id' => 3,
            'url' => 'https://drive.google.com/file/d/1s40qcs8wJBc3j9Wh9gHfHesJpHm332kT/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //32
        DB::table('materials')->insert([
            'name' => 'Новое в нормативно-правовом регулировании заключения КЖЦ. Создание интеллектуальных транспортных систем, основные подходы и принципы',
            'type_id' => 2,
            'url' => 'https://drive.google.com/file/d/159RGfwL3EUKG39jjhWiivawSgyQ4nfT1/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //33
        
        //30.07
        DB::table('materials')->insert([
            'name' => 'Стук С.Н. Оснащение испытательных лабораторий общеотраслевого центра компетенции',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/12Z2adtKLDus6c3pyH46mTE9Nn5G7C2df/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]);//34
        DB::table('materials')->insert([
            'name' => 'Орлов Д.В. Битумные вяжущие материалы ООО «Газпромнефть-БМ»',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1ojJ1UCxSAiabnA5DJdNo1B7uabto4eBB/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //35
        DB::table('materials')->insert([
            'name' => 'Майданова Н.В. Опыт применения ПНСТ 183-2019 и ПНСТ 184-2019 на объектах дорожного строительства',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1efqvnF0ziEOBk65k83RrDirHzXaL79ue/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //36
        DB::table('materials')->insert([
            'name' => 'Искинидирова Б.С. Опыт применения ПНСТ 183-2019 и ПНСТ 184-2019 на объектах ФКУ «Поволжуправтодор»',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1Y9tgO76vyWoL5I_ccMoHmb82Q6xofYwN/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //37
        DB::table('materials')->insert([
            'name' => 'Жданов К.А. Основные положения комплекса национальных стандартов на асфальтобетон. ГОСТ Р 58406.1, ГОСТ Р 58406.2',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1J9zQMKXhQlZxHPMk2PFbf8lDc8tlJXbw/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //38
        DB::table('materials')->insert([
            'name' => 'Фильм Искиндирова Б.С.',
            'type_id' => 7,
            'url' => 'https://drive.google.com/file/d/1U1IfOMtafGTVEzHYhH8AyUkCB3Do0GOD/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //39
        DB::table('materials')->insert([
            'name' => 'Теория и практика применения национальных стандартов ГОСТ Р 58406.1, ГОСТ Р 58406.2',
            'type_id' => 2,
            'url' => 'https://drive.google.com/file/d/1bfN8mYH8wwUzYAm4sWvB1ogNxCt2cFRh/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //40

        //04.08
        DB::table('materials')->insert([
            'name' => 'Селиверстов В.А. Актуальные проблемы проектирования и строительства мостовых сооружений в условиях сложных транспортных пересечений',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1mXo7flkSueYhHp9C_QAbPXh4yjCP-bbi/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //41
        DB::table('materials')->insert([
            'name' => 'Бобков А.В. Охрана окружающей среды при проектировании и строительстве автомобильных дорог с учетом природоохранного законодательства',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1XIAzzwpvA8mqVz6tpkgH0SLZ5Wvpjbyj/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //42
        DB::table('materials')->insert([
            'name' => 'Актуальные проблемы проектирования и строительства мостовых сооружений и автомобильных дорог',
            'type_id' => 2,
            'url' => 'https://drive.google.com/file/d/1Fpfzguidh9bDJ1CKomCWWECgXy5NaAnx/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //43

        //02.09
        DB::table('materials')->insert([
            'name' => 'Рахимова И.А. Требования к автомобильных дорогах в зонах размещения АПВГК',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1jbss6i2HAI3aj3jTcrlFWOJ_M0Z4lAVa/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //44
        DB::table('materials')->insert([
            'name' => 'Вилков А.С. Мониторинг достижения результата ФП ОМРДХ по размещению АПВГК',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1U3qC8d734Ax74_1akk0RP2u9_Ls2K3e-/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //45
        DB::table('materials')->insert([
            'name' => 'Конорев А.С. Изменение нормативно-правовой базы по весогабаритному контролю',
            'type_id' => 1,
            'url' => 'https://drive.google.com/file/d/1uDtdrlbE228Tf5uRQh7Ny9WzhO-cq-l8/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //46
        DB::table('materials')->insert([
            'name' => 'Развитие систем АПВГК на дорогах регионального или межмуниципального, местного значения',
            'type_id' => 2,
            'url' => 'https://drive.google.com/file/d/1hoJdOxaZ2lJf649TPnDYq3jbRZuGfUd7/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //47
        DB::table('materials')->insert([
            'name' => 'Мнение ФАУ «РОСДОРНИИ» о перечне случаев заключения контрактов жизненного цикла',
            'type_id' => 8,
            'url' => 'https://drive.google.com/file/d/1e1kkAPDerM9EHSW25TXvWOMqcFZk4iYS/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); // 48
        DB::table('materials')->insert([
            'name' => 'Анализ основных положений Федерального закона от 20.07.2020 № 239-ФЗ ',
            'type_id' => 8,
            'url' => 'https://drive.google.com/file/d/1PY9eKcmqtucSe1bw_-nYZGYrvWgHdZJx/view?usp=sharing',
            'created_at' => date("Y-m-d H:i:s")
        ]); //49
        /*
        DB::table('materials')->insert([
            'name' => '',
            'type_id' => 1,
            'url' => '',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        
        DB::table('materials')->insert([
            'name' => 'ОХРАНА ОКРУЖАЮЩЕЙ СРЕДЫ ПРИ ПРОЕКТИРОВАНИИ И СТРОИТЕЛЬСТВЕ АВТОМОБИЛЬНЫХ ДОРОГ',
            'type_id' => 1,
            'url' => 'materials/Бобков А.В. Охрана окружающей среды про проектировании и строительстве автомобильных дорог  с учетом природоохранного законодательства.pdf',
            'created_at' => date("Y-m-d H:i:s")
        ]); //5
        */
    }
}
