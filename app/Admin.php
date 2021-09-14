<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'jadwal';

    protected $fillable = ['','tanggal','hari','pelatih','info'];

}
