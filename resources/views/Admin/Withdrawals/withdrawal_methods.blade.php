@extends('Layouts.master')

@section('title')
    Withdrawal Methods | Prologis
@endsection

@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>Withdrawal Methods</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Withdrawal Methods</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
     
    <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
                <div class="col-sm-7 col-md-7 col-xl-10 col-7" id="alerter">
                    <h5>Methods</h5> 
                </div>
                <div class="col-sm-5 col-md-5 col-xl-2 col-5">
                <a href="{{url('admin/withdrawals/methods/new')}}" class="btn btn-pill btn-primary"> Add New</a> 
                </div>
        </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="display text-center" id="basic-2" style="font-family: Rubik;">
                <thead>
                  <tr>
                    <th>Method</th>
                    <th>Currency</th>
                    <th>Rate</th>
                    <th>Min amount</th>
                    <th>Max amount</th>
                    <th>Fixed charge</th>
                    <th>Percent charge</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @for ($i = 0; $i < count($methods); $i++)
                    <!--{{$method = $methods[$i]}}-->
                    <tr>
                      <td>{{$method->method_name}}</td>
                      <td>{{$method->currency}}</td>
                      <td>{{$method->rate}}</td>
                      <td>{{$method->min_amount}} USD</td>
                      <td>{{$method->max_amount}} USD</td>
                      <td>{{$method->fixed_charge}} USD</td>
                      <td>{{$method->percent_charge}}%</td>
                      @if (strtolower($method->status) == "active")
                      <td id="status"><span class="badge badge-success">{{$method->status}}</span></td>
                      @else
                      <td id="status"><span class="badge badge-danger">{{$method->status}}</span></td>
                      @endif
                      
                      <td>
                          <div class="btn-group">
                              <button onclick="window.location = '{{url('admin/withdrawals/methods/edit/'.$method->id)}}';" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                              <button onclick="toggleStatus(this)" class="btn btn-info text-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Change status" value="{{url('admin/withdrawals/methods/status/update/'.$method->id)}}"><i class="fa fa-cog"></i></button>
                              <button onclick="serve(this,this.dataset.id)" data-bs-toggle="modal" data-bs-target="#deletemodal" data-id="{{$i}}" data-method="{{$method->method_name}}" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" value="{{url('admin/withdrawals/methods/delete/'.$method->id)}}"><i class="fa fa-trash"></i></button>
                          </div>
                      </td>
                    </tr>
                  @endfor
                </tbody>
                
              </table>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Delete Modal -->
      <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"></h5>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" id="close"></button>
            </div>
            <div class="modal-body">
              <p>Are you sure ?</p>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">No</button>
              <button onclick="deleteMethod(this)" id="yes" class="btn btn-primary" data-bs-dismiss="modal" type="button">Yes</button>
            </div>
          </div>
        </div>
      </div>

@endsection

@section('scripts')
    <script>
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      function toggleStatus(button){
        button.disabled = true;
        document.getElementById('status').innerHTML = '<span class="badge badge-info">updating</span>';
        var url = button.value;
          $.ajax({
              type:'PUT',
              url: url,
              data:{name: 'statusupdate'},
              success:function(response){
                  if(response.message === "true"){
                      if(response.status === "inactive"){
                        document.getElementById('status').innerHTML = '<span class="badge badge-danger">'+response.status+'</span>';
                      }
                      else{
                        document.getElementById('status').innerHTML = '<span class="badge badge-success">'+response.status+'</span>';
                      }
                  }
                  button.disabled = false;
              }
          });
      }

      function serve(button,id){
        var method = button.dataset.method;
        document.querySelector('#yes').value = button.value;
        document.querySelector('#yes').setAttribute('data-id', id);
        document.querySelector('#deletemodal .modal-title').innerHTML = 'Delete method: ' + '<span class="text-danger">'+method+'</span>';
      }

      function deleteMethod(button){
        button.disabled = true;
        $.ajax({
              type:'POST',
              url: button.value,
              data:{name: 'delete method'},
              success:function(response){
                  document.querySelector('#alerter').innerHTML = '<div class="alert alert-primary dark alert-dismissible fade show outline" role="alert"><strong>'+response.message+'</strong><button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                  
                  document.querySelector('tbody').deleteRow(button.dataset.id);

                  button.disabled = false;
                  location.reload(); 
                  
              }
          });
      }
        
    </script>
@endsection