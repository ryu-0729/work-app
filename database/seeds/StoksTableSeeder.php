<?php

use Illuminate\Database\Seeder;

class StoksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 在庫のダミーデータを100件作成
        factory(App\Stok::class, 100)->create();
    }
}
