<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\homepageService;
use Illuminate\Http\Request;

class websitecontroller extends Controller
{
    public function __construct()
    {
      
    }

    public function index(){
        

        $common=homepageService::where('service_status',1)->limit(1)->get();
        $service = homepageService::where('service_status',1)->limit(4,0)->get();
      return view('website.index',compact('service','common'));
    }

    
    public function about(){
      echo "hello about";
    }

    public function service(){
        echo "hello servie";
    }
    
    public function ourteam(){
        echo "hello our team";
    }

    public function stydyAbroad(){
        echo "hello study abroad ";
    }

    public function immigration(){
        echo "hello immigration";
    }

    public function gellary(){
        echo "hello hellary ";
    }

    public function blog(){
        echo "hello blog";
    }

    public function contact(){
        echo "hello contact ";
    }

    public function legal(){
        echo "hello legal ";
    }

    //subpage function is here 

    public function freeConsutation(){
        echo "hello free consultaion ";
    }

    public function agent(){
        echo "hello agent ";
    }
    

    public function career(){
        echo "hello career";
    }

    
    public function internship(){
        echo "hello internship ";
    }


    public function privecy(){
        echo "hello privecy ";
    }

    public function condition(){
        echo "hello condition ";
    }
    
    public function faq(){
        echo "hello faq";
    }

    
    
    public function singlepage(){
        echo "hello single page ";
    }


    


}
