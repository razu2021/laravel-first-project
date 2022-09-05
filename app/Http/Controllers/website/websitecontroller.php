<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;

use App\Models\homepageService;
use App\Models\news;
use App\Models\ourallteam;
use App\Models\ourteambanner;
use App\Models\gellaryimage;
use App\Models\gellarybanner;






use Illuminate\Http\Request;
class websitecontroller extends Controller
{
    public function __construct()
    {
      
    }

    public function index(){
        

        $common=homepageService::where('service_status',1)->limit(1)->get();
        $service = homepageService::where('service_status',1)->limit(4,0)->get();

        $news_heading=news::where('news_status',1)->limit(1)->get();
        $news = news::where('news_status',1)->orderBy('news_id','ASC')->limit(4,0)->get();

      return view('website.index',compact('service','common','news','news_heading'));
    }

    
    public function about(){
      echo "hello about";
    }

    public function service(){
        echo "hello servie";
    }
    
    public function ourteam(){
        $ourteambanner=ourteambanner::where('slider_status',1)->limit(1)->get();
        $teamheading=ourallteam::where('status',1)->limit(1)->get();
        $ourteam = ourallteam::where('status',1)->get();
        return view('website.layouts.pages.team',compact('teamheading','ourteam','ourteambanner'));
    }

    public function stydyAbroad(){
        echo "hello study abroad ";
    }

    public function immigration(){
        echo "hello immigration";
    }

    public function gellary(){
    
    $gellaryimage=gellaryimage::where('post_status',1)->get();
    $ourgellarybanner=ourteambanner::where('slider_status',1)->limit(1)->get();
       return view('website.layouts.pages.gellary',compact('ourgellarybanner','gellaryimage'));
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
