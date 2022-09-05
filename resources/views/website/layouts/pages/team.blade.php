@extends('website/layouts/master')
@section('content')


<div >
    <div>
      <div  class="">
        <!---->
        <!---->
        <section  class="overflow-hidden pt-0">
          <section class=" overflow-hidden">
            <!-- Background image -->
            @foreach ($ourteambanner as $key=>$value )
              
            @endforeach
            <div class="px-4 py-5 px-md-5 text-center bg-image ripple" style="background-image: url('{{asset('uploads/'.$value->slider_image)}}'); height:500px; width:auto ;background-size::content; background-position: 50% 50%;">
              <div class="mask" style="background-color: rgba(0, 0, 0, 0.35)">
                <div class="container h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-10">
                      <div class="text-white pb-5">
                        <h1 class="my-md-5 mb-4 px-5 display-3 fw-bold ls-tight text-white">
                            {{$value->slider_heading}}
                        </h1>
                        <a class="btn btn-danger  btn-lg btn-rounded py-3 px-5 mb-2 mb-md-0 me-md-2" href="about more">{{$value->slider_button}}</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Background image -->
          </section>
        </section>
        <!---->
      </div>
    </div>
  </div>
<!-- banner end here  -->

<section class="section-padding">
    <div class="container">
        <div class="row">
          @foreach ($teamheading as $key=>$value)
        <div class="col-12">
            <div class="teams text-center col-lg-6 offset-lg-3 pt-5 pb-5">
                <h1 class="text-dark display-5" >{{$value->heading}} </h1>
                <p  class="text-dark text-center ">{{$value->caption}}</p>
            </div>
        </div>
        @endforeach
        @foreach ($ourteam as $data)
        <div class="col-12 col-sm-12 col-md-6 col-lg-1 col-xl-3 col-xxl-3 mt-3">
            <div class="all-team-members">
                <img src="{{asset('contents/website')}}/assets/image/4308-Razu.jpg" alt="profile" class="img-fluid">
                <div class="team-info">
                    <h1>{{$data->name}}</h1>
                    <h6>{{$data->designation}}</h6>
                    <p>{{$data->info}}</p>
                    <div class="teams-social ">
                        <ul>
                          <a href="{{$data->facebook_url}}">
                            <button type="button" class="btn btn-white btn-floating mx-1">
                              <i class="fab fa-facebook-f"></i>
                            </button>
                          </a>
                          <a href="{{$data->twitter_url}}">
                            <button type="button" class="btn btn-white btn-floating mx-1">
                              <i class="fab fa-twitter"></i>
                            </button>
                          </a>
                          <a href="{{$data->linkedin_url}}">
                            <button type="button" class="btn btn-white btn-floating mx-1">
                              <i class="fab fa-linkedin"></i>
                            </button>
                          </a>
                          <a href="{{$data->instagram_url}}">
                          <button type="button" class="btn btn-white btn-floating mx-1">
                            <i class="fab fa-instagram"></i>
                          </button>
                          </a>
                        </ul>
                    </div>
                    <button type="button" class="btn btn-white btn-outline-dark mt-4"><a class="text-dark text-uppercase " href="{{url('#')}}">about more</a></button>
                </div>
            </div>
            </div>
            @endforeach
    </div>
</section>
@endsection


