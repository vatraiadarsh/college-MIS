<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $table='admission';
    const CREATED_AT='created_at';
    const UPDATED_AT='updated_at';


    // public function admission(){
    //     return $this->belongsTo('App\Admission','admission_id','id');
    // }


    public function admission(){
        return $this->belongsTo('App\Admission');
    }
    //making relationship with admission controller
}
