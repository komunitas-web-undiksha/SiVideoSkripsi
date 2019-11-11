<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
}
