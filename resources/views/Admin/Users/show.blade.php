@extends('Layouts.master')

@section('title')
    User Profile | Prologis
@endsection

@section('content')
<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-sm-6 col-lg-8">
              @if (session()->has('success'))
              <div class="alert alert-primary dark alert-dismissible fade show outline" role="alert"><strong>{{ session()->get('success') }}</strong>
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif

              @if (session()->has('errors'))
                <div class="alert alert-secondary dark alert-dismissible fade show outline" role="alert"><strong>{{ session()->get('errors') }}</strong>
                  <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
          </div>
          <div class="col-sm-6 col-lg-4">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">User</li>
              <li class="breadcrumb-item active"> Edit Profile</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

      <div class="edit-profile">
        <div class="row">
          <div class="col-xl-4">
            <div class="card">
              <div class="card-header text-center">

                <h4 class="card-title mb-0">User Profile</h4>
                <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
              </div>
              <form>
              <div class="card-body">
                <div class="text-center">
                  <div class="row mb-0">
                    <div class="profile-title">
                      <div class="media"><img class="img-70 rounded-circle" alt="" src="{{asset('/storage/images/'.$user->image)}}">
                        <div class="media-body">
                          <h5 class="mb-1">{{$user->firstname}} {{$user->lastname}}</h5>
                          <p>{{$user->username}}</p>
                          @if ($user->status === 'blocked')
                            <p>This User is Blocked</p>
                          @else

                          @endif
                        </div>
                      </div>

                      <p>Joined <strong><span class="text-primary">{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</span></strong></p>
                      <div class="figure text-start d-block">
                      Demo Balance: <span class="text-primary">{{$user->dbalance}}</span> USD<br>
                      Real Balance: <span class="text-primary">{{$user->rbalance}}</span> USD<br>
                      Profit Balance: <span class="text-primary">{{$user->profit}}</span> USD<br>
                      Ref Bonus Balance: <span class="text-primary">{{$user->bonus}}</span> USD<br>
                      Reffered by: <span class="text-light"> @php
                          $refname = DB::table('users')->where('referrer_id', $user->referrer_id)->get();
                          foreach($refname as $rname)
                          {
                              echo $rname->username .", ";
                          }
                      @endphp </span>
                      </div>

                    </div>
                  </div>

              </div>
            </div>
              <div class="card-footer text-end">
                <a href="#md-delete" class="btn btn-secondary btn-block"  data-bs-toggle="modal" data-bs-target="#md-delete" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete user">Delete</a>
              </div>
            </form>
            </div>
          </div>
          <div class="col-xl-8">
            <form class="card" method="post" action="">
              @csrf
              <div class="card-header">
                <h4 class="card-title mb-0">Edit Profile</h4>

              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6 col-md-6">
                    <div class="mb-3">
                      <label class="form-label">First Name</label>
                      <input class="form-control" type="text" value="{{$user->firstname}}">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Last Name</label>
                      <input class="form-control" type="text" value="{{$user->lastname}}">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-5">
                    <div class="mb-3">
                      <label class="form-label">Email address</label>
                      <input class="form-control" value="{{$user->email}}" readonly>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                    <div class="mb-3">
                      <label class="form-label">Phone number</label>
                      <input class="form-control" type="text" value="{{$user->phone}}">
                    </div>
                  </div>
                   <div class="col-sm-6 col-md-3">
                    <div class="mb-3">
                      <label class="form-label">Password: </label>
                      <input class="form-control" type="text" value="{{$user->upassword}}">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Country</label>
                      <select class="form-control btn-square">
                        <option>--Select--</option>
                        @foreach ($countries as $country)
                            @if ($country == $user->country)
                              <option selected>{{$country}}</option>
                            @else
                              <option>{{$country}}</option>
                            @endif
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </form>
              <div class="card-footer">
                <div class="btn-group">
                  @if ($user->status === 'blocked')
                  <a href="" class="btn btn-success btn-pill" title="unblock User" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm"><i class="fa fa-key"></i></a>
                    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body"> unblock {{$user->username}}</div>
                          <div class="modal-footer">
                            <a class="btn btn-success" href="{{url('/admin/unblockuser/'.$user->id)}}"> Yes</a>
                            <button class="btn btn-info" type="button" data-bs-dismiss="modal"> No</button>
                          </div>
                        </div>
                      </div>
                    </div>

                  @else
                    <a class="btn btn-danger btn-pill" title="block" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm"><i class="fa fa-ban"></i></a>
                    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body"> Block {{$user->username}}</div>
                          <div class="modal-footer">
                            <a class="btn btn-success" href="{{url('/admin/blockuser/'.$user->id)}}"> Yes</a>
                            <button class="btn btn-info" type="button" data-bs-dismiss="modal"> No</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif

                &nbsp;
                <a class="btn btn-secondary btn-pill" title="credi/debit" data-bs-toggle="modal" data-bs-target="#creditModalCenter"><i class="fa fa-dollar"></i></a>

                <!-- credit/debit modal -->
                    <div class="modal fade" id="creditModalCenter" tabindex="-1" role="dialog" aria-labelledby="creditModalCenter" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h6 class="modal-title">Credi/Debit</h6>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <form class="theme-form" method="GET" action="{{url('/admin/creditdebituser/'.$user->id)}}" >
                            @csrf
                            <div class="mb-3">
                              <label class="col-form-label pt-0" for="trx_type">Type</label>
                              <select class="form-control" name="trx_type" id="trx_id" aria-readonly="readonly">
                                <option value="1">Credit</option>
                                <option value="0">Debit</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <label class="col-form-label pt-0" for="trx_column">Select Column</label>
                              <select class="form-control" name="trx_column" id="trx_column" aria-readonly="readonly">
                                <option value="1">Real Account</option>
                                <option value="0">Demo Account</option>
                                <option value="3">Profit Account</option>
                                <option value="4">Referrer Bonus Account</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <label class="col-form-label pt-0" for="trx_amount">Amount</label>
                              <input class="form-control" id="trx_amount" type="number" name="trx_amount" placeholder="amount">
                            </div>
                            <div class="mb-3">
                              <label class="col-form-label pt-0" for="trx_amount">Description</label>
                              <textarea class="form-control" id="trx_detail"  name="trx_detail" rows="2"></textarea>
                            </div>

                            <div class="modal-footer">
                              <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                              <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </form>
                          </div>

                        </div>
                      </div>
                    </div>
                    <!-- end credit/debit modal -->

                @if (is_null($user->email_verified_at))
                &nbsp;
                  <a class="btn btn-info btn-pill" title="verify user" data-bs-toggle="modal" data-bs-target=".bd-verify-modal-sm"><i class="fa fa-check"></i></a>
                  <div class="modal fade bd-verify-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body"> Verify {{$user->username}}?</div>
                          <div class="modal-footer">
                            <a class="btn btn-success" href="{{url('/admin/verifyuser/'.$user->id)}}"> Yes</a>
                            <button class="btn btn-info" type="button" data-bs-dismiss="modal"> No</button>
                          </div>
                        </div>
                      </div>
                    </div>
                @else

                @endif

                &nbsp;
                <button class="btn btn-primary btn-pill" title="Email User" data-bs-toggle="modal" data-bs-target="#emailModalCenter"><i class="fa fa-envelope"></i></button>

                <!-- email modal -->
                <div class="modal fade" id="emailModalCenter" tabindex="-1" role="dialog" aria-labelledby="emailModalCenter" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h6 class="modal-title">Email {{$user->username}}</h6>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <form class="theme-form" method="GET" action="{{url('/admin/emailuser/'.$user->id)}}" >
                            @csrf
                            <div class="mb-3">
                              <label class="col-form-label pt-0" for="subject">Subject</label>
                              <input class="form-control" id="subject" type="text" name="subject" placeholder="subject">
                            </div>
                            <div class="mb-3">
                              <label class="col-form-label pt-0" for="message">Message</label>
                              <textarea class="form-control" id="message"  name="message" rows="3"></textarea>
                            </div>

                            <div class="modal-footer">
                              <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                              <button class="btn btn-primary" type="submit">Send</button>
                            </div>
                        </form>
                          </div>

                        </div>
                      </div>
                    </div>
                    <!-- end email modal -->
                </div>
                <div class="text-end">
                <button class="btn btn-primary" type="submit">Update Profile</button>
              </div>
              </div>
            </form>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5> Transaction log </h5>
              </div>
              <div class="card-body">
                <div class="table-responsive text-center">
                  <table class="display" id="basic-2">
                    <thead>
                      <tr>
                        <th>Trx id</th>
                        <th>Amount</th>
                        <th>Balance</th>
                        <th>Detail</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{$transaction->trx_id}}</td>
                                <td>{{$transaction->amount}}</td>
                                <td>{{$transaction->balance}}</td>
                                <td>{{$transaction->detail}}</td>
                                <td>{{$transaction->created_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->




        <!-- Delete Modal -->
        <div class="modal fade" id="md-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Delete <span class="text-warning"> {{ $user->firstname }} {{ $user->lastname }}  </span> </h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="form theme-form" enctype="multipart/form-data" action="{{url('/admin/user/delete/'.$user->id)}}" method="POST">
                  @csrf
                  <div class="card-body">
                  <div class="text-center">
                    <h6> Are You Sure You Want to Delete <span class="text-warning"> {{$user->username}} </span> From your Users?</h6>
                  </div>
                  </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">No</button>
                  <button class="btn btn-primary" type="submit">Yes</button>
                </div>
              </form>

              </div>

            </div>
          </div>
        </div>


  </div>

@endsection

@section('scripts')

@endsection
