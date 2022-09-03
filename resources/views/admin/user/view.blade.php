@extends('layouts.admin')
@section('content')
@if(Session::has('success'))
  <script>
    swal({ title: "Success!", text: "Successfully update banner information!", icon: "success", timer:5000});
  </script>
@endif
<div class="row">
  <div class="col-xl-12">
      <div class="card">
          <div class="card-header bg-secondary">
            <div class="row">
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>View user Information</div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/user')}}"><i class="fa fa-th"></i>All user</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <table class="table table-bordered table-striped custom_view_table">
                  <tr>
                    <td>Title</td>
                    <td>:</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Subtitle</td>
                    <td>:</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Button</td>
                    <td>:</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>URL</td>
                    <td>:</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Image</td>
                    <td>:</td>
                    <td>
                      {{-- @if($data->ban_image!='')
                        <img height="50" src="{{asset('uploads/'.$data->ban_image)}}"/>
                      @else
                        <img height="50" src="{{asset('uploads/avatar.jpg')}}"/>
                      @endif --}}
                    </td>
                  </tr>
                  <tr>
                    <td>Creator</td>
                    <td>:</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Editor</td>
                    <td>:</td>
                    <td>
                    </td>
                  </tr>
                  <tr>
                    <td>Upload Time</td>
                    <td>:</td>
                    <td></td>
                  </tr>
                </table>
              </div>
              <div class="col-md-2"></div>
            </div>
          </div>
          <div class="card-footer bg-secondary">
            <div class="btn-group" role="group">
              <a class="btn btn-primary" href="#">Print</a>
              <a class="btn btn-dark" href="#">PDF</a>
              <a class="btn btn-primary" href="#">Excel</a>
            </div>
          </div>
      </div>
  </div>
</div>
@endsection
