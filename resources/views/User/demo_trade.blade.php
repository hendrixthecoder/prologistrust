@extends('Layouts.user')

@section('title')
  Demo Trade
@endsection

@section('content')
<div class="row layout-top-spacing justify-content-center">
    <div class="col-sm-12 col-xl-10 layout-spacing d-flex justify-content-between align-items-center">
      <button class="btn btn-secondary btn-sm mb-2">Add Demo Balance</button>
      <p>Demo Balance: <span class="text-info"><strong>{{Auth::User()->dbalance}} USD</strong><span></p>
    </div>
</div>

<div class="row layout-top-spacing d-flex">
    <div class="col-sm-12 col-xl-10 offset-xl-1 layout-spacing d-flex flex-wrap">
        <!-- Cards -->
        @foreach ($coins as $coin)
        <div class="col-sm-8 col-md-6 col-xl-3 mb-3">
            <div class="card component-card_2">
              <center><img src="{{asset('storage/images/'.$coin->image)}}" class="card-img-top" alt="widget-card-2" style="width: 120px; height:120px;"></center>
              <div class="card-body text-center">
                  <h5 class="card-title">{{$coin->name}}</h5>
                  <p class="card-text"></p>
                  <a href="#" class="btn btn-rounded btn-primary">Trade Now</a>
              </div>
            </div>
        </div>
        @endforeach
      <!--Cards end here-->
    </div>
</div>
@endsection