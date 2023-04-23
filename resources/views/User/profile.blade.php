@extends('Layouts.user')

@section('title')
    User Profile
@endsection

@section('content')
<div class="row layout-spacing">
  <div class="col-xl-8 col-sm-12 layout-top-spacing">
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
  </div>
</div>


<div class="row layout-spacing">
  <div class="col-xl-5 col-md-6 col-sm-12 layout-top-spacing">

    <div class="user-profile layout-spacing">
        <div class="widget-content widget-content-area">
            <div class="d-flex justify-content-between p-3">
                <h3 class="">Profile</h3>
                <a href="#" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
            </div>
            <div class="text-center user-info">
                <img src="{{asset('/storage/images/'.Auth::user()->image)}}" class="img-fluid mx-auto d-block" width="120px" height="120px"  alt="avatar">
                <p class="">{{Auth::User()->firstname}} {{Auth::User()->lastname}}</p>
            </div>
            <div class="p-2 d-flex justify-content-center">
                <div>
                  <ul class="contacts-block list-unstyled">
                    <li class="contacts-block__item">
                        <p>Email: <span class="text-info">{{Auth::User()->email}}</span></p>
                    </li>
                    <li class="contacts-block__item">
                        <p>Referral Link: <span class="text-info">{{Auth::User()->referral_link}}</span></p>
                    </li>
                    @forelse ($referrer as $data)
                    <li class="contacts-block__item">
                        <p>Referrer: <span class="text-primary">{{ $data->username }}</span></p>
                    </li>
                    @empty
                    <li class="contacts-block__item">
                        <p>Referrer: <span class="">No Referral</span></p>
                    </li>
                    @endforelse
                    <li class="contacts-block__item">
                        <p>Referral count: <span class="text-primary">{{ count(Auth::user()->referrals)  ?? '0' }}</span></p>
                    </li>
                  </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="skills layout-spacing ">
      <div class="widget-content widget-content-area p-2">
          <h3 class="">Update photo</h3>
          <form action="{{url('/user/updateppic/'.Auth::User()->id)}}" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
                  {{ method_field('PUT') }}
            <div class="col-12 text-center">
                <div class="form-group row">

                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input class="form-control ppic" name="image" id="fileUpload"  type="file" required>
                  </div>
                </div>
                <div class="form-group row">

                  <div class="col-sm-12">
                    <input type="submit" value="Update" class="btn btn-primary">
                  </div>
                </div>
            </div>
          </form>
      </div>
    </div>

  </div>
  <div class="col-xl-7 col-md-6 col-sm-12 layout-top-spacing">
    <div class="bio layout-spacing">
      <div class="widget-content widget-content-area p-2">
          <h3 class="">Personal Info</h3>
          <div class="col-12">
            <form action="{{url('/user/updatepersonal/'.Auth::User()->id)}}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">First Name</label>
                <div class="col-sm-8">
                  <input class="form-control" name="firstname" type="text" placeholder="" value="{{Auth::User()->firstname}}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Last Name</label>
                <div class="col-sm-8">
                  <input class="form-control" name="lastname" type="text" placeholder="" value="{{Auth::User()->lastname}}">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Phone Number</label>
                <div class="col-sm-8">
                  <input class="form-control" name="phone" type="tel" placeholder="" value="{{Auth::User()->phone}}">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12 text-right">
                  <input type="submit" value="Update" class="btn btn-primary"/>
                </div>
              </div>
            </form>
          </div>
      </div>
    </div>
    <div class="bio layout-spacing">
      <div class="widget-content widget-content-area p-2">
          <h3 class="">Update password</h3>
            <div class="col-12">
              <form action="{{url('/user/updatepwrd/'.Auth::User()->id)}}" method="POST">
              {{ csrf_field() }}
                  {{ method_field('PUT') }}
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">New Password</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="password" type="password" placeholder="******">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Confirm Password</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="cpassword" type="password" placeholder="******">
                  </div>
                </div>
                <div class="form-group row">

                  <div class="col-sm-12 text-right">
                    <input type="submit" value="Update" class="btn btn-primary">
                  </div>
                </div>
              </form>
            </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
    <script>
      $("#fileUpload").on('change', function () {

      if (typeof (FileReader) != "undefined") {

          var image_holder = $("#image-holder");
          image_holder.empty();

          var reader = new FileReader();
          reader.onload = function (e) {
              $("<img />", {
                  "src": e.target.result,
                  "class": "thumb-image"
              }).appendTo(image_holder);

          }
          image_holder.show();
          reader.readAsDataURL($(this)[0].files[0]);
      } else {
          alert("This browser does not support FileReader.");
      }
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
