@extends('layouts.admin')
@section('content')
@if(Session::has('success'))
  <script>
    swal({ title: "Success!", text: "Successfully upload banner information!", icon: "success", timer:5000});
  </script>
@endif
@if(Session::has('error'))
  <script>
    swal({ title: "Opps!", text: "Banner information upload failed!", icon: "warning", timer:5000});
  </script>
@endif
<div class="row">
  <div class="col-xl-12">
      <form method="post" action="{{url('dashboard/website/ourteambanner/update')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header bg-secondary">
            <div class="row">
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>banner  upload </div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/ourteambanner')}}"><i class="fa fa-th"></i>All banner  information </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">banner  Title<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="hidden" name="id" value="{{$data->slider_id}}">
                <input type="hidden" name="slug" value="{{$data->slider_slug}}">
                <input type="text" class="form-control form_control" id="" name="title" value="{{$data->slider_title}}">
              </div>
            </div>
           {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">banner  heading<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="heading" value="{{$data->slider_heading}}">
              </div>
            </div>
           {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> banner caption <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="caption" value="{{$data->slider_caption}}">
              </div>
            </div>
           {{-- end  --}}
            {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">Button:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="button" value="{{$data->slider_button}}" >
              </div>
            </div>
            {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">url<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="url" value="{{$data->button_url}}" >
              </div>
            </div>
            {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">image<span class="req_star">*</span>:</label>
              <div class="col-md-4">
                <input type="file" class="form-control form_control" id="" name="image" >
              </div>
              <div class="col-md-3">
                @if($data->slider_image!='')
                <img height="100" src="{{asset('uploads/'.$data->slider_image)}}"/>
                @else
                  <img height="100" src="{{asset('uploads/avatar.jpg')}}"/>
                @endif</td>
              </div>
            </div>
            {{-- end  --}}
          </div>
          <div class="card-footer bg-secondary text-center">
            <button class="btn btn-md btn-dark">upload </button>
          </div>
      </div>
      </form>
  </div>
</div>

@endsection