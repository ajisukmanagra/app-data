<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class sekeltaris extends Model
{
    protected $table = 'sekeltaris';
    protected $fillable = ['user_id','nama','kelas','token','password'];
}
