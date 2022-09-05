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
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>View about Information</div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/homepageabout')}}"><i class="fa fa-th"></i>All about info</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <table class="table table-bordered table-striped custom_view_table">
                  <tr>
                    <td>Title :- 01 :</td>
                    <td>:</td>
                    <td>{{$data->title1}}</td>
                  </tr>
                  <tr>
                    <td>Title :- 02 :</td>
                    <td>:</td>
                    <td>{{$data->title2}}</td>
                  </tr>
                  <tr>
                    <td>Title :- 02 :</td>
                    <td>:</td>
                    <td>{{$data->title3}}</td>
                  </tr>

                  <tr>
                    <td>info :- 01 :</td>
                    <td>:</td>
                    <td>{{$data->info1}}</td>
                  </tr>

                  <tr>
                    <td>info :- 02 :</td>
                    <td>:</td>
                    <td>{{$data->info2}}</td>
                  </tr>

                  <tr>
                    <td>info :- 03 :</td>
                    <td>:</td>
                    <td>{{$data->info3}}</td>
                  </tr>

                  <tr>
                    <td>Designation :- 01 :</td>
                    <td>:</td>
                    <td>{{$data->designation1}}</td>
                  </tr>

                  <tr>
                    <td>Designation :- 02 :</td>
                    <td>:</td>
                    <td>{{$data->designation2}}</td>
                  </tr>

                  <tr>
                    <td>Designation :- 03 :</td>
                    <td>:</td>
                    <td>{{$data->designation3}}</td>
                  </tr>

                  <tr>
                    <td>name :- 01 :</td>
                    <td>:</td>
                    <td>{{$data->name1}}</td>
                  </tr>

                  <tr>
                    <td>name :- 02 :</td>
                    <td>:</td>
                    <td>{{$data->name2}}</td>
                  </tr>

                  <tr>
                    <td>name :- 03 :</td>
                    <td>:</td>
                    <td>{{$data->name3}}</td>
                  </tr>

                  <tr>
                    <td>about  button </td>
                    <td>:</td>
                    <td>{{$data->button}}</td>
                  </tr>

                  <tr>
                    <td>about  button  url</td>
                    <td>:</td>
                    <td>{{$data->button_url}}</td>
                  </tr>

                  <tr>
                    <td> about  Image</td>
                    <td>:</td>
                    <td>
                      @if($data->about_image!='')
                        <img height="80" src="{{asset('uploads/'.$data->about_image)}}"/>
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
                      @if ($data->about_editor!='')
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
