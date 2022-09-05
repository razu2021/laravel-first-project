@extends('layouts.admin')
@section('content')
@if(Session::has('success_soft'))
  <script>
    swal({ title: "Success!", text: "information deleted successfuly", icon: "success", timer:5000});
  </script>
@endif
@if(Session::has('error_soft'))
  <script>
    swal({ title: "Opps!", text: " information delete failed!", icon: "warning", timer:5000});
  </script>
@endif
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header bg-secondary">
              <div class="row">
                <div class="col-md-8 card_header_title text-white"><i class="fa fa-gg-circle"></i>upcoming event  </div>
                <div class="col-md-4 text-end card_header_btn">
                  <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/upcomingeventblog/add')}}"><i class="fa fa-plus-circle"></i>add </a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped custom_table">
                <thead class="table-dark">
                  <tr>
                    <th>heading </th>
                    <th>title</th>
                    <th>sub title </th>
                    <th>caption </th>
                    <th>info </th>
                    <th> photo </th>
                    <th> other file </th>
                    <th>Manage</th>
                  </tr>
                </thead>
                <tbody> 
              @foreach ($all as $data)
                  <tr>
                    <td>{{Str::words($data->heading,5)}}</td>
                    <td>{{Str::words($data->title,5)}}</td>
                    <td>{{Str::words($data->subtitle,5)}}</td>
                    <td>{{Str::words($data->caption,5)}}</td>
                    <td>{{Str::words($data->info,5)}}</td>
                    <td>
                    @if($data->image!='')
                      <img height="70" src="{{asset('uploads/'.$data->image)}}"/>
                    @else
                       <img height="70" src="{{asset('uploads/avatar.jpg')}}"/>
                    @endif
                  </td> 

                    <td>
                    @if($data->bgimage!='')
                      <img height="70" src="{{asset('uploads/'.$data->bgimage)}}"/>
                    @else
                       <img height="70" src="{{asset('uploads/avatar.jpg')}}"/>
                    @endif
                  </td>   
                  
                  
                    <td>
                      <div class="btn-group" role="group">
                        <div class="btn-group" role="group">
                          <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Manage
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{url('dashboard/website/upcomingeventblog/view/'.$data->slug)}}">View</a></li>
                            <li><a class="dropdown-item" href="{{url('dashboard/website/upcomingeventblog/edit/'.$data->slug)}}">Edit</a></li>
                            <li><a class="dropdown-item" href="#" id="softdelete" data-bs-toggle="modal" data-bs-target="#softdelete-modal" data-id="{{$data->uniq_id}}">Delete</a></li>

                          </ul>
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
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

<!-- softdelete modal -->
<div id="softdelete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <form method="post" action="{{url('dashboard/website/upcomingeventblog/softdelete')}}">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Confirm Message</h4>
            </div>
            <div class="modal-body modal_body">
                Are you sure want to delete data?
                <input type="hidden" name="modal_id" id="modal_id"/>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Confirm</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
      </form>
  </div>
</div>

@endsection