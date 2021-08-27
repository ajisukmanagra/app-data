<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class agendamodel extends Model
{
    protected $table = 'agenda';
    protected $fillable = ['nama_siswa','keterangan','mapel','waktu','nama_guru'];
}
