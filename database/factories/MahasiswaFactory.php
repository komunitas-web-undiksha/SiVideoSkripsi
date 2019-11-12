<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mahasiswa;
use Faker\Generator as Faker;

$factory->define(Mahasiswa::class, function (Faker $faker) {
    static $number = 1;
    return [
            'nim' => '171505'.strval(rand(0,9999)),
            'nama' => $faker->name,
            'user_id' => $number++,
            'prodi' => 1,
            'jenis_kelamin'=>'Laki-laki'
    ];
});
