<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Mahasiswa::class, 500)->create()->each(function ($user) {
            $user->posts()->save(factory(App\Mahasiswa::class)->make());
        });

    }
}
