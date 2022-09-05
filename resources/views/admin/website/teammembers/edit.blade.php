@extends('layouts.admin')
@section('content')
@if(Session::has('success'))
  <script>
    swal({ title: "Success!", text: "Successfully upload  information!", icon: "success", timer:5000});
  </script>
@endif
@if(Session::has('error'))
  <script>
    swal({ title: "Opps!", text: " information upload failed!", icon: "warning", timer:5000});
  </script>
@endif
<div class="row">
  <div class="col-xl-12">
      <form method="post" action="{{url('dashboard/website/teammembers/update')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header bg-secondary">
            <div class="row">
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>about info   upload </div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/teammembers')}}"><i class="fa fa-th"></i>All  team    information </a>
              </div>
            </div>
          </div>
        <div class="card-body">
          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label">  heading  <span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" name="id" value="{{$data->uniq_id}}">
              <input type="text" name="slug" value="{{$data->slug}}">
              <input type="text" class="form-control form_control" id="" name="heading" value="{{$data->heading}}">
            </div>
          </div>
          {{-- // about end  --}}
          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label">  name   <span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="name" value="{{$data->name}}">
            </div>
          </div>
          {{-- // about end  --}}
          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label"> designation  <span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="designation" value="{{$data->designation}}">
            </div>
          </div>
          {{-- // about end  --}}
          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label"> caption <span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="caption" value="{{$data->caption}}">
            </div>
          </div>
          {{-- // about end  --}}

          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label"> information <span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="info" value="{{$data->info}}">
            </div>
          </div>
          {{-- // about end  --}}
          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label"> facebook icon  <span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="facebookicon" value="{{$data->facebook}}">
            </div>
          </div>
          {{-- // about end  --}}
          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label">facebook   url<span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="faceurl" value="{{$data->facebook_url}}">
            </div>
          </div>
          {{-- end  --}}

          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label"> tiwtter icon  <span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="twittericon" value="{{$data->twitter}}">
            </div>
          </div>
          {{-- // about end  --}}
          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label">twitter   url<span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="twitterurl" value="{{$data->twitter_url}}" >
            </div>
          </div>
          {{-- end  --}}

          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label"> linkedin icon  <span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="linkedinicon" value="{{$data->linkedin}}">
            </div>
          </div>
          {{-- // about end  --}}
          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label">linkedin   url<span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="linkedinurl" value="{{$data->linkedin_url}}">
            </div>
          </div>
          {{-- end  --}}

          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label"> instagram icon  <span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="instagramicon" value="{{$data->instagram}}">
            </div>
          </div>
          {{-- // about end  --}}
          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label">instagram   url<span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="instagramurl"value="{{$data->instagram_url}}" >
            </div>
          </div>
          {{-- end  --}}

          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label"> image<span class="req_star">*</span>:</label>
            <div class="col-md-3">
              <input type="file" class="form-control form_control" id="" name="image" >
            </div>
            <div class="col-md-4">
              @if($data->image!='')
              <img height="80" src="{{asset('uploads/'.$data->image)}}"/>
            @else
              <img height="80" src="{{asset('uploads/avatar.jpg')}}"/>
            @endif
            </div>
          </div>
          {{-- end  --}}

          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label"> image<span class="req_star">*</span>:</label>
            <div class="col-md-3">
              <input type="file" class="form-control form_control" id="" name="bgimage" >
            </div>
            <div class="col-md-4">
              @if($data->image!='')
              <img height="80" src="{{asset('uploads/'.$data->bgimage)}}"/>
            @else
              <img height="80" src="{{asset('uploads/avatar.jpg')}}"/>
            @endif
            </div>
          </div>
          {{-- end  --}}
          {{-- end  --}}
        </div>





          </div>
          <div class="card-footer bg-secondary text-center">
            <button class="btn btn-md btn-dark">upload </button>
          </div>
      </div>
      </form>
  </div>
</div>

@endsection