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
      <form method="post" action="{{url('dashboard/website/ourbigproject/update')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header bg-secondary">
            <div class="row">
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>our project  </div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/ourbigproject')}}"><i class="fa fa-th"></i>All project </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> heading  <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="hidden" name="id"  value="{{$data->uniq_id}}">
                <input type="hidden" name="slug"  value="{{$data->slug}}">
                <input type="text" class="form-control form_control" id="" name="heading" value="{{$data->heading}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> title <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="title"  value="{{$data->title}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> sub title <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="subtitle" value="{{$data->subtitle}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> caption   <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="caption" value="{{$data->caption}}">
              </div>
            </div>

            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> info   <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="info" value="{{$data->caption}}">
              </div>
            </div>
           
      
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">   Button:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="button"  value="{{$data->button}}">
              </div>
            </div>
            {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">button  url<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="url" value="{{$data->button_url}}">
              </div>
            </div>
            {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">   image<span class="req_star">*</span>:</label>
              <div class="col-md-3">
                <input type="file" class="form-control form_control" id="" name="image"  >
              </div>
              <div class="col-md-4">
                @if($data->image!='')
                <img height="70" src="{{asset('uploads/'.$data->image)}}"/>
                @else
                  <img height="70" src="{{asset('uploads/avatar.jpg')}}"/>
                @endif
              </div>
            </div>
            {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">bgimage<span class="req_star">*</span>:</label>
              <div class="col-md-3">
                <input type="file" class="form-control form_control" id="" name="bgimage"  >
              </div>
              <div class="col-md-4">
                @if($data->bgimage!='')
                <img height="70" src="{{asset('uploads/'.$data->bgimage)}}"/>
                @else
                  <img height="70" src="{{asset('uploads/avatar.jpg')}}"/>
                @endif
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