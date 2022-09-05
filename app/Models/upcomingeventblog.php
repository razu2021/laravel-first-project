<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upcomingeventblog extends Model
{
    use HasFactory;

    protected $primaryKey='uniq_id';
    public function creatorInfo(){
        return $this->belongsTo('App\Models\user','post_creator','id');
    }

    public function editorInfo(){
        return $this->belongsTo('App\Models\user','post_editor','id');
    }
}
