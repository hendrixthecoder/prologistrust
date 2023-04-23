@extends('Layouts.user')

@section('title')
    {{ __($page_title) }}
@endsection

@section('content')

<div class="row layout-top-spacing" id="cancel-row">

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">



        @if (session()->has('success'))
          <div class="alert alert-primary mb-4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
            <strong>{{ session()->get('success') }}</strong>
          </div>
          @endif

          @if (session()->has('errors'))
          <div class="alert alert-danger mb-4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
            <strong>{{ session()->get('errors') }}</strong>
          </div>
          @endif




        <div class="widget-content widget-content-area br-6">
            <table id="zero-config" class="table dt-table-hover text-center" style="width:100%">
                <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Plan Name</th>
                        <th>Amount</th>
                        <th>ROI</th>
                        <th>Duration</th>
                        <th>Status</th>
                        <th>Next ROI</th>
                        <th>Time Left</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($invests as $data)
                         <tr>
                            <td><span class="text-info" style="text-transform: uppercase;"> {{$data->trx_id}}</span></td>

                            <td class="col"> {{ $data->plan->name }} </td>

                            <td class="col">$ {{ $data->amount}} </td>

                            <td class="col"> {{ $data->roi}}% </td>

                            <td class="col"> 4 Months </td>


                            <td>
                            @if ($data->status == 'running')
                            <span class="badge badge-primary">Running</span>
                            @elseif ($data->status == 'completed')
                            <span class="badge badge-success">Completed</span>
                            @elseif ($data->status == 'pending')
                            <span class="badge badge-warning">Pending</span>
                            @else
                            <span class="badge badge-danger">Canceled</span>
                            @endif
                            </td>

                            <td>
                            @if ($data->status == 'running')
                            <span class="timeleft"></span>
                            @elseif ($data->status == 'completed')
                            <span class="badge badge-success">Completed</span>
                            @elseif ($data->status == 'pending')
                            <span class="badge badge-warning">Pending</span>
                            @else
                            <span class="badge badge-danger">Canceled</span>
                            @endif

                            </td>


                            <td>
                            @if ($data->status == 'running')
                            {{$data->time_left}} Days
                            @elseif ($data->status == 'completed')
                            <span class="badge badge-success">Completed</span>
                            @elseif ($data->status == 'pending')
                            <span class="badge badge-warning">Pending</span>
                            @else
                            <span class="badge badge-danger">Canceled</span>
                            @endif
                            </td>
                        </tr>

                    @empty
                        <td class="col" colspan="7"> You have not Purchased any Plans </td>
                    @endforelse

                </tbody>
            </table>
        </div>

    </div>
</div>


@endsection
@section('script')
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
    timer2 = hour + ':' + minutes + ':' + seconds;
    }, 1000);
  });
</script>
<script type="text/javascript">

    $(document).ready(function () {

        setTimeout(nextNotice, 15000);
        function nextNotice()
        {
            var numRand = Math.floor(Math.random() * 1010);
            var items = ['0.9', '10.5', '15', '1.9', '2', '5'];
            var doRand = items[Math.floor(Math.random() * items.length)];
            $.notify("  ID00"+numRand+" Just Earned $"+doRand, {align:"left", verticalAlign:"bottom", animation:true, animationType:"scale", blur: 0.2, icon:"map-marker-alt", color: "#009688", delay:5000});
            setTimeout(nextNotice, 15000);
        }
    });

      </script>
@endsection
