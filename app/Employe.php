<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $table = 'employe';
    protected $primaryKey = 'employe_id';
    public $timestamps = false;
    protected $fillable = [
    'employe_id','employe_name','employe_address','employe_phone_number'
    ];
}
