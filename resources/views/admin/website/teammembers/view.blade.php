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
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>view team members </div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/teammembers')}}"><i class="fa fa-th"></i>team members all   info</a>
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
                    <td>name :</td>
                    <td>:</td>
                    <td>{{$data->name}}</td>
                  </tr>
                  <tr>
                    <td>Designation   :</td>
                    <td>:</td>
                    <td>{{$data->designation}}</td>
                  </tr>

                  <tr>
                    <td>caption :</td>
                    <td>:</td>
                    <td>{{$data->caption}}</td>
                  </tr>

                  <tr>
                    <td>  info  </td>
                    <td>:</td>
                    <td>{{$data->info }}</td>
                  </tr>

                  <tr>
                    <td> facebook icon</td>
                    <td>:</td>
                    <td>{{$data->facebook}}</td>
                  </tr>

                  <tr>
                    <td> facebook url</td>
                    <td>:</td>
                    <td>{{$data->facebook_url}}</td>
                  </tr>


                  <tr>
                    <td> twitter icon</td>
                    <td>:</td>
                    <td>{{$data->twitter}}</td>
                  </tr>

                  <tr>
                    <td> twitter url</td>
                    <td>:</td>
                    <td>{{$data->twitter_url}}</td>
                  </tr>

                  <tr>
                    <td> linkedin icon</td>
                    <td>:</td>
                    <td>{{$data->linkedin}}</td>
                  </tr>

                  <tr>
                    <td> linkedin  url</td>
                    <td>:</td>
                    <td>{{$data->linkedin_url}}</td>
                  </tr>

                  <tr>
                    <td> instagram icon</td>
                    <td>:</td>
                    <td>{{$data->instagram}}</td>
                  </tr>

                  <tr>
                    <td> instagram  url</td>
                    <td>:</td>
                    <td>{{$data->instagram_url}}</td>
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
