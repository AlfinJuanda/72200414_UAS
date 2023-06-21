<?php

use Illuminate\Database\Seeder;

class Tbl72200414Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl72200414')->insert([
            [
                'article_title' => 'ALFIN ARTIKEL',
                'article_date' => '2023-06-01',
                'article_text' => 'SEORANG GAMERS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_title' => 'IWAN NASKLENG',
                'article_date' => '2023-06-02',
                'article_text' => 'SEORANG WARIA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_title' => 'WAYAN BALI KULKUL',
                'article_date' => '2023-06-03',
                'article_text' => 'ANAK BAIK BAIK',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
