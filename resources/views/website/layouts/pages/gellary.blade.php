
@extends('website/layouts/master')
@section('content')
<div id="" class="">
  <div>
    <div   class="">
      <section  class="overflow-hidden pt-0">
        <section class="mb-2 overflow-hidden">
        @foreach ($ourgellarybanner as $key=>$value)
          <div class="px-4 py-5 px-md-5 text-center bg-image ripple" style="background-image: url('{{asset('uploads/'.$value->slider_image)}}'); height: 400px; background-size: cover; background-position: 50% 50%;">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.35)">
              <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-lg-10">
                    <div class="text-white pb-5">
                      <h1 class="my-md-5 mb-4 px-5 display-3 fw-bold ls-tight text-white">
                          {{$value->slider_heading}}
                      </h1>
                      <a class="btn btn-primary btn-lg btn-rounded py-3 px-5 mb-2 mb-md-0 me-md-2" href="
                      {{url('/')}}" role="button"  >{{$value->slider_button}} </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </section>
      </section>
    </div>
  </div>
</div>
<!-- banner end here  -->


     <section>
         <div class="container gellarys">
          <div class="row  g-0">
          @foreach ($gellaryimage as $data)
            <div class="col-12 col-sm-12 col-md-6 col-lg-1 col-xl-3 col-xxl-3 mt-3">
              <div class="all-team-members">
                  <a href="{{asset('uploads/'.$data->image)}}"><img src="{{asset('uploads/'.$data->image)}}" alt="profile" class="img-fluid" target="_blank"></a>
              </div>
              </div>
          @endforeach
          </div>
         </div> 
     </section>
@endsection




 