<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karya extends Model
{
    protected $table = 'karya';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['nim','judul','directory_karya',
                            'directory_trailer','directory_karya_edit',
                            'jenis','haki','do_haki','publish'];

}
