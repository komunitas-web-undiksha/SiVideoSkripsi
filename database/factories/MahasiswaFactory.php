<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mahasiswa;
use Faker\Generator as Faker;

$factory->define(Mahasiswa::class, function (Faker $faker) {

    return [
            'nim' => '171505'.$faker->in,
            'nama' => $faker->name,
            'prodi' => rand(1,2),
            'jenis_kelamin'=>'Laki-laki'
    ];
});
