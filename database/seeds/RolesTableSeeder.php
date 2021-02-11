<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => '在庫発注管理者'
            ],
            [
                'id' => 2,
                'name' => '在庫発注社員'
            ],
            [
                'id' => 3,
                'name' => '在庫受注社'
            ]
        ]);
    }
}
