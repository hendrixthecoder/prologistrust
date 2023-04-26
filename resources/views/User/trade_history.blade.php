@extends('Layouts.user')

@section('title')
    @lang('text.liveTradeHistory')
@endsection

@section('content')
<div class="row layout-top-spacing" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>@lang('text.amount')</th>
                        <th>@lang('text.res')</th>
                        <th>@lang('text.status')</th>
                        <th>@lang('text.date')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                        <tr>
                            <td>{{$record->id}}</td>
                            <td>{{$record->amount}}</td>
                            <td><span class="shadow-none badge badge-success">{{$record->result}}</span></td>
                            <td><span class="shadow-none badge badge-success">{{$record->status}}</span></td>
                            <td>{{$record->date}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
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
