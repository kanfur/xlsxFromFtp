<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        $categories = array(["id"=>1,"name" => "Eğitim - Gelişim","type" =>1],
            ["id"=>2,"name" => "İşveren Markası","type" =>1],
            ["id"=>3,"name" => "Teknoloji","type" =>1],
            ["id"=>4,"name" => "Ücret ve Yan Haklar","type" =>1],
            ["id"=>5,"name" => "İşe Alım","type" =>1],
            ["id"=>6,"name" => "Yetenek Yönetimi","type" =>1],
            ["id"=>7,"name" => "Etkinlik ve İletişim","type" =>1],
            ["id"=>8,"name" => "Mekan","type" =>1],
            ["id"=>9,"name" => "Organizasyon, Kültür ve Süreç","type" =>1],
            ["id"=>10,"name" => "Ölçme - Değerlendirme","type" =>1],
            ["id"=>11,"name" => "Ortak Hizmetler","type" =>1],
            ["id"=>12,"name" => "Çalışan Hizmetleri","type" =>1]);
        DB::table('categories')->insert($categories);
    }
}
