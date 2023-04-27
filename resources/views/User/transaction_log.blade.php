@extends('Layouts.user')

@section('title')
  @lang('text.transLog')
@endsection

@section('content')
<div class="row layout-top-spacing" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>@lang('text.date')</th>
                        <th>@lang('text.transId')</th>
                        <th>@lang('text.amount')</th>
                        <th>@lang('text.detail')</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($transactions->isEmpty())
                        <tr>
                            <td style="text-align: center;" colspan="4">
                                @lang('text.noData')
                            </td>
                        </tr>
                    @else    
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{$transaction->created_at}}</td>
                            <td>{{$transaction->trx_id}}</td>
                            <td>{{$transaction->amount}}</td>
                            <td>{{$transaction->detail}}</td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection