<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ユーザーのダミーデータを50件作成
        $users = factory(App\User::class, 50)
            ->create();
    }
}
