@extends('Layouts.user')

@section('title')
    Demo Trade History
@endsection

@section('content')
<div class="row layout-top-spacing" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Crypto currency</th>
                        <th>Symbol</th>
                        <th>Amount</th>
                        <th>In time</th>
                        <th>High/Low</th>
                        <th>Result</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                        <tr>
                            <td>{{$record->id}}</td>
                            <td>{{$record->currency}}</td>
                            <td>{{$record->symbol}}</td>
                            <td>{{$record->amount}}</td>
                            <td>{{$record->intime}}</td>
                            <td><span class="shadow-none badge badge-success">{{$record->highlow}}</span></td>
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
    
@endsection