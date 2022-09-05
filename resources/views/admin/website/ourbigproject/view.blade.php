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
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>our proudfull project   </div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/ourbigproject')}}"><i class="fa fa-th"></i>All project  </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <table class="table table-bordered table-striped custom_view_table">
                  <tr>
                    <td>heading :</td>
                    <td>:</td>
                    <td>{{$data->heading}}</td>
                  </tr>
                  <tr>
                    <td>Title :</td>
                    <td>:</td>
                    <td>{{$data->title}}</td>
                  </tr>
                  <tr>
                    <td>sub title  :</td>
                    <td>:</td>
                    <td>{{$data->subtitle}}</td>
                  </tr>

                  <tr>
                    <td>caption :</td>
                    <td>:</td>
                    <td>{{$data->caption}}</td>
                  </tr>

                  <tr>
                    <td>info :</td>
                    <td>:</td>
                    <td>{{$data->info}}</td>
                  </tr>

                  <tr>
                    <td>  button </td>
                    <td>:</td>
                    <td>{{$data->button}}</td>
                  </tr>

                  <tr>
                    <td>  button  url</td>
                    <td>:</td>
                    <td>{{$data->button_url}}</td>
                  </tr>

                  <tr>
                    <td> Image</td>
                    <td>:</td>
                    <td>
                      @if($data->image!='')
                        <img height="80" src="{{asset('uploads/'.$data->image)}}"/>
                      @else
                        <img height="80" src="{{asset('uploads/avatar.jpg')}}"/>
                      @endif
                    </td>
                  </tr>

                  <tr>
                    <td> other file </td>
                    <td>:</td>
                    <td>
                      @if($data->bgimage!='')
                        <img height="80" src="{{asset('uploads/'.$data->bgimage)}}"/>
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
                      @if ($data->post_editor!='')
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
