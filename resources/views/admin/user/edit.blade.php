@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-xl-12">
      <form method="post" action="">
        <div class="card">
          <div class="card-header bg-secondary">
            <div class="row">
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>update user informaion </div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/user/edit')}}"><i class="fa fa-th"></i>view  User information </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">Name<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="" value="">
              </div>
            </div>
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">Phone:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="" value="">
              </div>
            </div>
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">Email<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="" value="">
              </div>
            </div>
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">Password<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="" value="">
              </div>
            </div>
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">Confirm-Password<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="" value="">
              </div>
            </div>
          </div>
          <div class="card-footer bg-secondary text-center">
            <button class="btn btn-md btn-dark">update</button>
          </div>
      </div>
      </form>
  </div>
</div>

@endsection