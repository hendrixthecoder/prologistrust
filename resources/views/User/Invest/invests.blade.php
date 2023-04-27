@extends('Layouts.user')

@section('title')
  @lang('text.invPlans')
@endsection

@section('content')

<div class="row layout-top-spacing">
  <div class="col-xl-12">

      @if(session()->has('errors'))

            <div class="alert alert-arrow-left alert-icon-left alert-light-warning mb-4" role="alert" style="border-color: transparent;">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg  data-dismiss="alert"> ... </svg> </button>
              <i class="fas fa-warning"> </i>
              <strong>Warning!  {{ session()->get('errors') }} </strong>
            </div>

      @endif

      @if(session()->has('success'))

             <div class="alert alert-arrow-left alert-icon-left alert-light-success mb-4" role="alert" style="border-color: transparent; background-color:#ffffff;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg  data-dismiss="alert"> ... </svg></button>
                <i class="fas fa-activity"> </i>
                <strong>Success!  {{ session()->get('success') }} </strong>
            </div>

      @endif

    </div>

</div>

<div class="row layout-top-spacing">

  <div class="col-12 layout-spacing">
  <section class="pricing-section bg-7 mt-5">
    <div class="pricing pricing--norbu">
      @forelse ($plans as $data)
        <div class="pricing__item">
          <h3 class="pricing__title">{{ $data->name }}
            @if ($data->name == "1 STAR AGENT")
            <div class="text-center">
            <i class="fa fa-star text-warning" style="font-size: 18px;"></i>
            </div>
            @elseif ($data->name == "2 STAR AGENT")
            <div class="text-center">
            <i class="fa fa-star text-warning" style="font-size: 18px;"></i><i class="fa fa-star text-warning" style="font-size: 20px;"></i>
            </div>
            @elseif ($data->name == "3 STAR AGENT")
            <div class="text-center">
            <i class="fa fa-star text-warning" style="font-size: 18px;"></i><i class="fa fa-star text-warning" style="font-size: 20px;"></i><i class="fa fa-star text-warning" style="font-size: 22px;"></i>
            </div>
            @elseif ($data->name == "4 STAR AGENT")
            <div class="text-center">
            <i class="fa fa-star text-warning" style="font-size: 18px;"></i><i class="fa fa-star text-warning" style="font-size: 20px;"></i><i class="fa fa-star text-warning" style="font-size: 22px;"></i><i class="fa fa-star text-warning" style="font-size: 24px;"></i>
            </div>
            @endif

          </h3>

          <div style="font-size:24px;">${{ $data->min }} - ${{ $data->max }}</div>
          <ul class="pricing__feature-list text-center">
              <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> {{ $data->duration }} Investment</li>
              <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> {{ $data->roi }}% Daily Profit</li>
              <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Instant Activation</li>
          </ul>
          <div class="mb-4">
            <a href="{{ url('/user/invests/preview/'.$data->id) }}" class="pricing__action mx-auto mb-4 btn-sm">Buy Plan</a>
          </div>
        </div>
      @empty
        <div id="card_9" class="col-lg-12 layout-spacing">
          <div class="statbox widget box box-shadow">
              <div class="widget-header">
                  <div class="row">
                      <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                          <h4 class="text-center text-info">No Plans Available</h4>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      @endforelse

    </div>
  </section>
  </div>

</div>

@endsection

@section('script')
  <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <script>
    var getInputStatus = document.getElementById('radio-6');
    var getPricingContainer = document.getElementsByClassName('pricing-plans-container')[0];
    var getYearlySwitch = document.getElementsByClassName('billed-yearly-radio')[0];
    getInputStatus.addEventListener('change', function() {
        var isChecked = getInputStatus.checked;
        if (isChecked) {
            getPricingContainer.classList.add("billed-yearly");
            getYearlySwitch.classList.add("billed-yearly-switch");
        } else {
            getYearlySwitch.classList.remove("billed-yearly-switch");
            getPricingContainer.classList.remove("billed-yearly");
        }
    })
</script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
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
