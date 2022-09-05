<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gellaryimage extends Model
{
    use HasFactory;


    protected $primaryKey='image_id';
    
    public function creatorInfo(){
        return $this->belongsTo('App\Models\user','post_creator','id');
    }

    public function editorInfo(){
        return $this->belongsTo('App\Models\user','post_editor','id');
    }
}
