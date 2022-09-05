<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bannerslider extends Model
{
    use HasFactory;


    protected $primaryKey='slider_id';
    
    public function creatorInfo(){
        return $this->belongsTo('App\Models\user','slider_creator','id');
    }

    public function editorInfo(){
        return $this->belongsTo('App\Models\user','slider_editor','id');
    }




}
