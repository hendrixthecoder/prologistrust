@extends('Layouts.user')

@section('title')
    {{$page_title}}
@endsection

@section('content')
            <div class="row layout-spacing">
            <div class="col-lg-12 layout-top-spacing">
                <div class="widget-content searchable-container list">

                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8 filtered-list-search layout-spacing align-self-center">
                            <form class="form-inline my-2 my-lg-0">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    <input type="text" class="form-control product-search" id="input-search" placeholder="Search Contacts...">
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-2 text-sm-right text-center layout-spacing align-self-center">
                            <div class="d-flex justify-content-sm-end justify-content-center">
                                <div class="btn-group">
                                    <div class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list view-list active-view"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>
                                    </div>
                                    &nbsp;
                                    <div class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid view-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="searchable-items list">
                                            <div class="items items-header-section">
                                                <div class="item-content">
                                                    <div class="">
                                                        <div class="n-chk align-self-center text-center">
                                                            <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox" class="new-control-input" id="contact-check-all">
                                                            <span class="new-control-indicator"></span>
                                                            </label>
                                                        </div>
                                                        <h4>Name</h4>
                                                    </div>
                                                    <div class="user-email">
                                                        <h4>Email</h4>
                                                    </div>
                                                    <div class="user-location">
                                                        <h4 style="margin-left: 0;">Location</h4>
                                                    </div>
                                                    <div class="user-phone text-center">
                                                        <h4 style="margin-left: 3px;">Phone</h4>
                                                    </div>

                                                </div>
                                            </div>
                                            @forelse ($downlines as $data)
                                            <div class="items">
                                                <div class="item-content">
                                                    <div class="user-profile">
                                                        <div class="n-chk align-self-center text-center">
                                                            <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox" class="new-control-input contact-chkbox">
                                                            <span class="new-control-indicator"></span>
                                                            </label>
                                                        </div>
                                                        <img src="{{asset('storage/images/'.$data->image)}}" alt="avatar">
                                                        <div class="user-meta-info">
                                                            <p class="user-name" data-name="{{$data->firstname}} {{$data->lastname}}">{{$data->firstname}} {{$data->lastname}}</p>
                                                            <p class="user-work" data-occupation="{{$data->username}}">{{$data->username}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="user-email">
                                                        <p class="info-title">Email: </p>
                                                        <p class="usr-email-addr" data-email="{{$data->email}}">{{$data->email}}</p>
                                                    </div>
                                                    <div class="user-location">
                                                        <p class="info-title">Location: </p>
                                                        <p class="usr-location" data-location="{{$data->country}}">{{$data->country}}</p>
                                                    </div>
                                                    <div class="user-phone text-center">
                                                        <p class="info-title">Phone: </p>
                                                        <p class="usr-ph-no" data-phone="{{$data->phone}}">{{$data->phone}}</p>
                                                    </div>

                                                </div>
                                            </div>

                                            @empty
                                                <div class="text-center">
                                                    <p class="info-title">Sory you do not have any downlines yet</p>
                                                    <p class="usr-email-addr"> Refer users to earn commisions</p>

                                                </div>
                                            @endforelse
                                            <div class="text-center">
                                                    <br><br>
                                                    <p class="info-title"> Referrer Link: {{Auth::User()->referral_link}}</p>
                                            </div>


                    </div>

                </div>
            </div>
            </div>
@endsection

@section('script')
<!-- <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('user/assets/js/custom.js')}}"></script> -->
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
