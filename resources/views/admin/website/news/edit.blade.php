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
      <form method="post" action="{{url('dashboard/website/news/update')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header bg-secondary">
            <div class="row">
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>news  upload </div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/news')}}"><i class="fa fa-th"></i>All news  information </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> news heading<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="hidden" name="id" value="{{$data->news_id}}">
                <input type="hidden" name="slug" value="{{$data->news_slug}}">
                <input type="text" class="form-control form_control" id="" name="heading" value="{{$data->news_heading}}">
              </div>
            </div>
           {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> news caption<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="caption" value="{{$data->news_caption}}">
              </div>
            </div>
           {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">news Title<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="title" value="{{$data->news_title}}">
              </div>
            </div>
           {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">news info:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="info" value="{{$data->news_info}}" >
              </div>
            </div>
            {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">news date :</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="date" value="{{$data->news_date}}" >
              </div>
            </div>
            {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> Button:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="button" value="{{$data->news_button}}" >
              </div>
            </div>
            {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">button url<span class="req_star">*</span>:</label>
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
                @if($data->news_image!='')
                <img height="100" src="{{asset('uploads/'.$data->news_image)}}"/>
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