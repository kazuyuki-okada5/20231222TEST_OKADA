<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CaategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'type' => '商品のお届けについて',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'type' => '商品の交換について',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'type' => '商品トラブル',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'type' => 'ショップへのお問い合わせ',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'type' => 'その他',
        ];
        DB::table('categories')->insert($param);
    }
}
