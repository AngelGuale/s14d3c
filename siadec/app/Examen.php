<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model{
    protected $table = 'Examen';
    public $timestamps = false;

    public function User(){
       	return $this->hasOne('App\User', 'id', 'user_id');
    }
}