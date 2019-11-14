<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    static function getNimFromId($id)
    {
        return self::select('nim')->where('user_id','=',$id)->first()->nim;
    }
}
