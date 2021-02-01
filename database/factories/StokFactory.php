<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Stok;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Stok::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement($array = array(
            'パピコ', 'ピノ', 'ブラックサンダー', 'じゃがりこ', 'ポテチ',
            'オーザック', 'マイクポップコーン', '歌舞伎揚', 'コーラ', 'コーヒー'
        )),
        'quantity' => $faker->numberBetween($min = 1, $max = 50),
        'price' => $faker->numberBetween($min = 100, $max = 300),
        'role' => $faker->randomElement($array = array(
            '発注確認', '発注状態', '発注済み', '発注受け取り済み'
        )),
    ];
});