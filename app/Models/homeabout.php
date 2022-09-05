<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homeabout extends Model
{
    use HasFactory;


    protected $primaryKey='homeabout_id';
    
    public function creatorInfo(){
        return $this->belongsTo('App\Models\user','about_creator','id');
    }

    public function editorInfo(){
        return $this->belongsTo('App\Models\user','about_editor','id');
    }
}
