<?php

use Illuminate\Database\Seeder;

class NpaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('npas')->insert([
            'name' => 'Гражданский кодекс Российской Федерации',
            'type' => 'Кодекс Российской Федерации',
            'url' => 'http://ivo.garant.ru/#/document/10164072',
            'description' => 'Гражданский кодекс Российской Федерации (ГК РФ) — федеральный закон Российской Федерации, регулирующий гражданско-правовые отношения, имеющий приоритет перед другими федеральными законами и иными нормативными правовыми актами в сфере гражданского права. Указанный приоритет установлен в самом Гражданском кодексе. Нормы гражданского права, содержащиеся в других законах, должны соответствовать Гражданскому кодексу.',
        ]);
        DB::table('npas')->insert([
            'name' => 'Градостроительный кодекс Российской Федерации',
            'type' => 'Кодекс Российской Федерации',
            'url' => 'http://ivo.garant.ru/#/document/12138258',
            'description' => 'Градостроительный кодекс Российской Федерации — кодифицированный нормативный правовой акт, регулирующий градостроительные и отдельные связанные с ними отношения на территории Российской Федерации.',
        ]);
        DB::table('npas')->insert([
            'name' => 'Бюджетный кодекс Российской Федерации',
            'type' => 'Кодекс Российской Федерации',
            'url' => 'http://ivo.garant.ru/#/document/12112604',
            'description' => 'Бюджетный кодекс Российской Федерации — кодифицированный нормативно-правовой акт, устанавливающий общие принципы бюджетного законодательства Российской Федерации, организации и функционирования бюджетной системы Российской Федерации, правовое положение субъектов бюджетных правоотношений, определяет основы бюджетного процесса и межбюджетных отношений в Российской Федерации, порядок исполнения судебных актов по обращению взыскания на средства бюджетов бюджетной системы Российской Федерации, основания и виды ответственности за нарушение бюджетного законодательства Российской Федерации.',
        ]);
        DB::table('npas')->insert([
            'name' => 'Земельный кодекс Российской Федерации',
            'type' => 'Кодекс Российской Федерации',
            'url' => 'http://ivo.garant.ru/#/document/12124624',
            'description' => 'Земельный кодекс Российской Федерации (ЗК РФ) — кодифицированный нормативно-правовой акт, являющийся основным источником земельного права в России. Согласно пункту 1 статьи 2 Земельного кодекса, земельное законодательство в соответствии с Конституцией Российской Федерации находится в совместном ведении Российской Федерации и субъектов Российской Федерации. Земельное законодательство состоит из Земельного кодекса, федеральных законов и принимаемых в соответствии с ними законов субъектов Российской Федерации.',
        ]);
        DB::table('npas')->insert([
            'name' => 'Федеральный закон от 8 ноября 2007 г. № 257-ФЗ «Об автомобильных дорогах и о дорожной деятельности в Российской Федерации и о внесении изменений в отдельные законодательные акты Российской Федерации»',
            'type' => 'Федеральный закон',
            'url' => 'http://ivo.garant.ru/#/document/12157004',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Федеральный закон от 27.12.2002 № 184-ФЗ «О техническом регулировании»',
            'type' => 'Федеральный закон',
            'url' => 'http://ivo.garant.ru/#/document/12129354',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Федеральный закон от 10.12.1995 № 196-ФЗ «О безопасности дорожного движения»',
            'type' => 'Федеральный закон',
            'url' => 'http://ivo.garant.ru/#/document/10105643',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => ' Федеральный закон от 17.07.2009 № 145-ФЗ «О государственной компании «Российские автомобильные дороги» и о внесении изменений в отдельные законодательные акты Российской Федерации»',
            'type' => 'Федеральный закон',
            'url' => 'http://ivo.garant.ru/#/document/12168315',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => ' Федеральный закон от 05.04.2013 г № 44-ФЗ «О контрактной системе в сфере закупок товаров, работ, услуг для обеспечения государственных и муниципальных нужд»',
            'type' => 'Федеральный закон',
            'url' => 'http://ivo.garant.ru/#/document/70353464',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Федеральный закон от 13.07.2015 N 221-ФЗ «Об особенностях регулирования отдельных правоотношений, возникающих в связи со строительством, с реконструкцией объектов транспортной инфраструктуры федерального и регионального значения, предназначенных для обеспечения транспортного сообщения между Таманским и Керченским полуостровами, и объектов инженерной инфраструктуры федерального и регионального значения на Таманском и Керченском полуостровах и о внесении изменений в отдельные законодательные акты Российской Федерации»',
            'type' => 'Федеральный закон',
            'url' => 'http://ivo.garant.ru/#/document/71127974',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Федеральный закон от 31.07.2020 № 254-ФЗ «Об особенностях регулирования отдельных отношений в целях модернизации и расширения магистральной инфраструктуры и о внесении изменений в отдельные законодательные акты Российской Федерации»',
            'type' => 'Федеральный закон',
            'url' => 'http://ivo.garant.ru/#/document/74450806',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => ' Федеральный закон от 18.07.2011 № 223-ФЗ «О закупках товаров, работ, услуг отдельными видами юридических лиц»',
            'type' => 'Федеральный закон',
            'url' => 'http://ivo.garant.ru/#/document/12188083/',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => ' Постановление Правительства РФ от 16.02.2008 № 87 «О составе разделов проектной документации и требованиях к их содержанию»',
            'type' => 'Постановление правительства',
            'url' => 'http://ivo.garant.ru/#/document/12158997',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Постановление Правительства РФ от 30.07.2004 № 395 «Об утверждении Положения о Министерстве транспорта Российской Федерации»',
            'type' => 'Постановление правительства',
            'url' => 'http://ivo.garant.ru/#/document/187263',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => ' Постановление Правительства РФ от 28.11.2013 № 1087 «Об определении случаев заключения контракта жизненного цикла»',
            'type' => 'Постановление правительства',
            'url' => 'http://ivo.garant.ru/#/document/70522166',
            'description' => 'Постановление Правительства Российской Федерации от 28.11.2013 № 1087 «Об определении случаев заключения контракта жизненного цикла» (далее -Постановление) - подзаконный акт, принятый в соответствии с подпунктом 8.2 части 1 статьи 3 и частью 16 статьи 34 Федерального закона «О контрактной системе в сфере закупок товаров, работ, услуг для обеспечения государственных и муниципальных нужд», которым устанавливаются случаи заключения контрактов жизненного цикла в различных отраслях.',
        ]);
        DB::table('npas')->insert([
            'name' => 'Постановление Правительства РФ от 28.11.2013 № 1085 «Об утверждении Правил оценки заявок, окончательных предложений участников закупки товаров, работ, услуг для обеспечения государственных и муниципальных нужд»',
            'type' => 'Постановление правительства',
            'url' => 'http://ivo.garant.ru/#/document/70520984',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Постановление Правительства РФ от 04.02.2015 № 99 «Об установлении дополнительных требований к участникам закупки отдельных видов товаров, работ, услуг, случаев отнесения товаров, работ, услуг к товарам, работам, услугам, которые по причине их технической и (или) технологической сложности, инновационного, высокотехнологичного или специализированного характера способны поставить, выполнить, оказать только поставщики (подрядчики, исполнители), имеющие необходимый уровень квалификации, а также документов, подтверждающих соответствие участников закупки указанным дополнительным требованиям»',
            'type' => 'Постановление правительства',
            'url' => 'http://ivo.garant.ru/#/document/70862346',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Постановление Правительства РФ от 14.11.2009 № 928 «Об утверждении Правил организации и проведения работ по ремонту и содержанию автомобильных дорог федерального значения»',
            'type' => 'Постановление правительства',
            'url' => 'http://ivo.garant.ru/#/document/196611',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Постановление Правительства РФ от 02.09.2009 № 717 «О нормах отвода земель для размещения автомобильных дорог и (или) объектов дорожного сервиса»',
            'type' => 'Постановление правительства',
            'url' => 'http://ivo.garant.ru/#/document/12169426',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Приказ Минтранса РФ от 05.02.2019 № 37 «Об утверждении типовых условий контрактов на выполнение работ по строительству (реконструкции), капитальному ремонту, ремонту автомобильных дорог, искусственных дорожных сооружений и информационной карты типовых условий контракта»',
            'type' => 'Приказ Минтранса РФ',
            'url' => 'http://ivo.garant.ru/#/document/72261772',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Приказ Минтранса РФ от 27.08.2009 № 150 «О порядке проведения оценки технического состояния автомобильных дорог»',
            'type' => 'Приказ Минтранса РФ',
            'url' => 'http://ivo.garant.ru/#/document/197328',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Приказ Минтранса РФ от 16.11.2012 № 402 «Об утверждении Классификации работ по капитальному ремонту, ремонту и содержанию автомобильных дорог»',
            'type' => 'Приказ Минтранса РФ',
            'url' => 'http://ivo.garant.ru/#/document/70318144',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Приказ Минтранса РФ от 13.01.2010 № 4 «Об установлении и использовании придорожных полос автомобильных дорог федерального значения» (в т.ч. «Порядок установления и использования придорожных полос автомобильных дорог федерального значения»)',
            'type' => 'Приказ Минтранса РФ',
            'url' => 'http://ivo.garant.ru/#/document/12175321',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Приказ Минтранса РФ от 13.01.2010 № 5 «Об установлении и использовании полос отвода автомобильных дорог федерального значения» (в т.ч. «Порядок установления и использования полос отвода автомобильных дорог федерального значения»)',
            'type' => 'Приказ Минтранса РФ',
            'url' => 'http://ivo.garant.ru/#/document/12175320',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Приказ Минтранса РФ от 24.10.2011 № 272 «О стоимости и объеме услуг, оказываемых по договору о присоединении объекта дорожного сервиса к автомобильной дороге общего пользования федерального значения»',
            'type' => 'Приказ Минтранса РФ',
            'url' => 'http://ivo.garant.ru/#/document/55172652',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Приказ Минтранса РФ от 05.05.2012 № 137 «Об утверждении Административного регламента Федерального дорожного агентства предоставления государственной услуги по предоставлению гражданам или юридическим лицам земельных участков в границах полосы отвода автомобильной дороги федерального значения для размещения объектов дорожного сервиса»',
            'type' => 'Приказ Минтранса РФ',
            'url' => 'http://ivo.garant.ru/#/document/70220356',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Приказ Минтранса РФ от 28.06.2012 № 186 «Об утверждении административного регламента Федерального дорожного агентства предоставления государственной услуги по выдаче разрешений на строительство, реконструкцию, а также на ввод в эксплуатацию автомобильных дорог общего пользования федерального значения либо их участков; частных автомобильных дорог, строительство, реко0струкцию которых планируется осуществлять на территории двух и более субъектов Российской Федерации; выдаче разрешений на строительство в случае прокладки или переустройства инженерных коммуникаций в границах полосы отвода автомобильной дороги общего пользования федерального значения; выдаче разрешений на строительство, реконструкцию, а также на ввод в эксплуатацию пересечений и примыканий к автомобильным дорогам общего пользования федерального значения; объектов дорожного сервиса, размещаемых в границах полосы отвода автомобильной дороги общего пользования федерального значения»',
            'type' => 'Приказ Минтранса РФ',
            'url' => 'http://ivo.garant.ru/#/document/74689146',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => ' Приказ Минтранса РФ от 06.07.2012 № 199 «Об утверждении Порядка подготовки документации по планировке территории, предназначенной для размещения автомобильных дорог общего пользования федерального значения»',
            'type' => 'Приказ Минтранса РФ',
            'url' => 'http://ivo.garant.ru/#/document/70222976',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Приказ Минтранса РФ от 25.10.2012 № 385 «Об утверждении форм примерных соглашений об установлении частных сервитутов в отношении земельных участков в границах полос отвода автомобильных дорог (за исключением частных автомобильных дорог) в целях строительства, реконструкции, а также капитального ремонта объектов дорожного сервиса и их эксплуатации, а также в целях установки и эксплуатации рекламных конструкций, и соглашений, предусматривающих размер платы за публичный сервитут в отношении земельных участков в границах полос отвода автомобильных дорог (за исключением частных автомобильных дорог) в целях прокладки, переноса, переустройства инженерных коммуникаций и их эксплуатации»',
            'type' => 'Приказ Минтранса РФ',
            'url' => 'http://ivo.garant.ru/#/document/70391208',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Приказ Минтруда РФ от 02.02.2017 № 129н «Об утверждении Правил по охране труда при производстве дорожных строительных и ремонтно-строительных работ»',
            'type' => 'Приказ Минтруда РФ',
            'url' => 'http://ivo.garant.ru/#/document/71669784',
            'description' => '',
        ]);
        DB::table('npas')->insert([
            'name' => 'Указ Президента Российской Федерации от 27.06.1998 № 727 «О придорожных полосах федеральных автомобильных дорог общего пользования»',
            'type' => 'Указ Президента РФ',
            'url' => 'http://ivo.garant.ru/#/document/12112091',
            'description' => '',
        ]);
    }
}
