<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use session;

class usercontroller extends Controller{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $alluser=User::orderby('id','DESC')->get();
        return view('admin.user.all-user',compact('alluser'));
        
    }
    public function add(){
        return view('admin.user.add');
    }
    public function edit(){
        return view('admin.user.edit');
    }
    public function view(){
        return view('admin.user.view');
    }
    public function insert(){
        echo "this is insert form ";
    }
    public function update(){
        echo "this is update page";
    }
    public function softdelete(){
        echo "delet soft Delete";
    }
    public function restore(){
        echo "this is restore page ";
    }
    public function delete(){
        echo "this is delete page ";
    }
}
