@extends('Layouts.user')

@section('title')
  {{__($page_title)}}
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
            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Method</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($deposit as $log)
                         <tr>
                            <td><span class="text-info" style="text-transform: uppercase;"> {{$log->trx_id}}</span></td>
                            <td>{{$log->method}}</td>
                            <td>{{$log->amount}} USD </td>


                            @if ($log->status == 'pending')
                                <td><span class="badge badge-primary">{{$log->status}}</span> </td>
                            @elseif ($log->status == 'rejected')
                                <td><span class="badge badge-danger">{{$log->status}}</span> </td>
                            @else ($log->status == 'approved')
                                <td><span class="badge badge-success">{{$log->status}}</span> </td>
                            @endif

                            <td>{{$log->created_at}}</td>
                        </tr>
                    @empty
                        <td class="col" colspan="5"> No Deposit History </td>
                    @endforelse

                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
@section('script')
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
