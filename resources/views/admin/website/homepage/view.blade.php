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
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/homepage')}}"><i class="fa fa-th"></i>All service</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <table class="table table-bordered table-striped custom_view_table">
                  <tr>
                    <td>service heading</td>
                    <td>:</td>
                    <td>{{$data->service_heading}}</td>
                  </tr>
                  <tr>
                    <td>Title</td>
                    <td>:</td>
                    <td>{{$data->service_caption}}</td>
                  </tr>
                  <tr>
                    <td>Title</td>
                    <td>:</td>
                    <td>{{$data->service_title}}</td>
                  </tr>
                  <tr>
                    <td>Subtitle</td>
                    <td>:</td>
                    <td>{{$data->service_subtitle}}</td>
                  </tr>
                  <tr>
                    <td>info</td>
                    <td>:</td>
                    <td>{{$data->service_info}}</td>
                  </tr>
                  <tr>
                    <td>button</td>
                    <td>:</td>
                    <td>{{$data->service_button}}</td>
                  </tr>
                  <tr>
                    <td>button</td>
                    <td>:</td>
                    <td>{{$data->button_url}}</td>
                  </tr>
                  <tr>
                    <td> service Image</td>
                    <td>:</td>
                    <td>
                      @if($data->service_image!='')
                        <img height="80" src="{{asset('uploads/'.$data->service_image)}}"/>
                      @else
                        <img height="80" src="{{asset('uploads/avatar.jpg')}}"/>
                      @endif
                    </td>
                  </tr>
                  <tr>
                    <td>Creator</td>
                    <td>:</td>
                    <td>{{$data->creatorInfo->name}}</td>
                  </tr>
                  <tr>
                    <td>Editor</td>
                    <td>:</td>
                    <td>
                      @if ($data->service_editor!='')
                        {{$data->editorInfo->name}}
                      @endif
                      
                    
                    </td>
                   
                  </tr>
                  <tr>
                    <td>Upload Time</td>
                    <td>:</td>
                    <td>{{$data->created_at->format('d-m-y | h:i:s A')}}</td>
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
