<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homepageService extends Model
{
    use HasFactory;



    protected $primaryKey='service_id';
    
    public function creatorInfo(){
        return $this->belongsTo('App\Models\user','service_creator','id');
    }

    public function editorInfo(){
        return $this->belongsTo('App\Models\user','service_editor','id');
    }



}
