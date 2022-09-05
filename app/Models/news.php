<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;


    protected $primaryKey='news_id';
    
    public function creatorInfo(){
        return $this->belongsTo('App\Models\user','news_creator','id');
    }

    public function editorInfo(){
        return $this->belongsTo('App\Models\user','news_editor','id');
    }

}
