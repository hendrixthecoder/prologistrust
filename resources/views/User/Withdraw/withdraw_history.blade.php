@extends('Layouts.user')

@section('title')
  @lang('text.witDHist')
@endsection

@section('content')
<div class="row layout-top-spacing">
    <div class="col-12 layout-spacing">
        <p>@lang('text.totWtd') <strong><span class="text-info">{{$total}}</span></strong> USD</p>
    </div>
</div>

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
                        <th>@lang('text.transId')</th>
                        <th>@lang('text.method')</th>
                        <th>@lang('text.walAdd')</th>
                        <th>@lang('text.amount')</th>
                        <th>@lang('text.date')</th>
                        <th>@lang('text.status')</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($records->isEmpty())
                    <tr>
                      <td colspan="5" style="text-align: center;">
                        @lang('text.noData')
                      </td>
                    </tr>

                    @else  
                    @foreach ($records as $record)
                        <tr>
                            <td>{{$record->trx_id}}</td>
                            <td>{{$record->method}}</td>
                            <td>{{$record->wallet_address}}</td>
                            <td>{{$record->amount}} USD</td>
                            <td>{{$record->created_at}}</td>
                            <td>
                              @if ($record->status == "pending")
                              <div class="badge badge-warning">Pending</div>
                              @elseif ($record->status == "approved")
                              <div class="badge badge-success">Approved</div>
                              @elseif ($record->status == "rejected")
                              <div class="badge badge-danger">Rejected</div>
                              @endif
                            </td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection