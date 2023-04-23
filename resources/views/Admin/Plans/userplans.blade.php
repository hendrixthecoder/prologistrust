@extends('Layouts.master')

@section('title')
    {{ __($page_title) }} | Prologis
@endsection

@section('content')

<div class="page-body">

    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>{{  __($page_title) }}</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Investment</li>
              <li class="breadcrumb-item">Plans</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row">
        <!-- Zero Configuration  Starts-->
        <div class="col-sm-12 col-md-12 col-12 col-xl-12">
          <div class="card">
            <div class="card-header">
                <div class="row">
                      <div class="col-sm-7 col-md-7 col-xl-10 col-7">
                          <h5>{{ __($page_title) }}</h5> 
                      </div>
                        <div class="col-sm-5 col-md-5 col-xl-2 col-5">
                            <a href="#exampleModalCenter" class="btn btn-pill btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Add New</a>
                        </div>

                                @if(session()->has('errors'))
                          <div class="alert alert-danger dark alert-dismissible fade show" role="alert"><i data-feather="thumbs-down"></i>
                              <ul> 
                                  <li> {{ session()->get('errors') }} </li>
                              </ul>
                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                                
                          @endif
          
                                  @if(session()->has('success'))
                                  <div class="alert alert-success dark alert-dismissible fade show" role="alert"><i data-feather="thumbs-up"></i>
                                    <p> {{ session()->get('success') }} </p>
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </div>
                                  
                          </div>
                          @endif
                </div>
            </div>

            <div class="card-body">
              <div class="table-responsive text-center">
                <table class="table" id="basic-1">
                  <thead>
                    <tr>
                      <th> Trx ID </th>
                      <th>Name</th>
                      <th>Amount</th>
                      <th>Status</th>
                      <th>ROI</th>
                      <th>TTL </th>
                      <th>Days Left </th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @forelse($u_invests as $data)
                        <tr>
                            <td class="col"> {{ $data->trx_id }} </td>
                            <td class="col"> {{ $data->user->firstname }} {{ $data->user->lastname }} </td>
                            <td class="col">$ {{ $data->amount }}  </td>
                            <td class="col">
                              @if ($data->status == 'running')
                                <div class="badge badge-warning"><i class="fa fa-clock-o"></i> Runing</div>
                              @elseif ($data->status == 'completed')
                              <div class="badge badge-success"><i class="fa fa-check"></i> Completed</div>
                              @elseif ($data->status == 'pending')
                              <div class="badge badge-warning"><i class="fa fa-clock-o">Pending</i></div>
                              @else
                              <div class="badge badge-danger"><i class="fa fa-ban"></i> Canceled</div>
                              @endif
                               
                              </td>
                            <td class="col"> {{ $data->roi }} </td>
                            <td class="col">
                              @if ($data->status == 'running')
                                <div class="timeleft text-warining"></div>
                              @elseif ($data->status == 'completed')
                                <div class="badge badge-success"><i class="fa fa-check"></i> Completed</div>
                              @else
                                {{ $data->created_at }} 
                              @endif
                               
                              </td>
                            <td class="col"> {{ $data->time_left }} Days </td>
                            <td class="col">
                                    <a href="{{url('/admin/invest/view/'.$data->id)}}" title="view" class="btn btn-pill btn-primary"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                          
                      @empty
                          <td class="col" colspan="5"> {{ __($empty_message) }} </td>
                      @endforelse

                      
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Zero Configuration  Ends-->
      </div>
    
    <!-- Container-fluid Ends-->

</div>

@endsection
@section('scripts')
<script>
  $(document).ready(function () {
    var dt = new Date();
    var rmhr = 24 - dt.getHours();
    var rmmi = 60 - dt.getMinutes();
    var rmsc = 60 - dt.getSeconds();
    var timer2 = rmhr + ":" + rmmi + ":" + rmsc;
    var interval = setInterval(function() {


    var timer = timer2.split(':');
    //by parsing integer, I avoid all extra string processing
    var hour = parseInt (timer[0], 10)
    var minutes = parseInt(timer[1], 10);
    var seconds = parseInt(timer[2], 10);
    --seconds;
    minutes = (seconds < 0) ? --minutes : minutes;
    if (hour == 0 && minutes == 0 && seconds == 0) 
    {
        hour = 24
        minutes = 60
        // $('.timer').html('<h6 class="tx-inverse"> <i class="fa fa-stopwatch"> </i> Time Left: <Span class="text-secondary time_left"> 0 : 0 </span></h6>');
        
    }
    minutes = (minutes < 0) ? 59 : minutes;
    minutes = (minutes < 10) ? '0' + minutes : minutes;
    seconds = (seconds < 0) ? 59 : seconds;
    seconds = (seconds < 10) ? '0' + seconds : seconds;
    //minutes = (minutes < 10) ?  minutes : minutes;
    $('.timeleft').html(hour + ':' + minutes + ':' + seconds);
    timer2 =hour + ':' + minutes + ':' + seconds;
    }, 1000);
  });
</script>
  
@endsection