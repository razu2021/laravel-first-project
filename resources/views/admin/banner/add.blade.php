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
      <form method="post" action="{{url('dashboard/banner/insert')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header bg-secondary">
            <div class="row">
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>Banner upload </div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/banner')}}"><i class="fa fa-th"></i>All banner  information </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> Title<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="title" >
              </div>
            </div>
           {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">sub title:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="subtitle" >
              </div>
            </div>
            {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">Button:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="button" >
              </div>
            </div>
            {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">url<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="url" >
              </div>
            </div>
            {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">image<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="file" class="form-control form_control" id="" name="image" >
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