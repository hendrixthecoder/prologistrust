@extends('Layouts.master')
@section('title')
    Email All | Prologis
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
                <li class="breadcrumb-item">Email</li>
                <li class="breadcrumb-item active"> All Users</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

        <div class="edit-profile">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5> Email All Users </h5>
                </div>
                <div class="card-body">
                    <form class="theme-form" method="GET" action="{{url('admin/comitemailuser/')}}" >
                        @csrf
                        <div class="mb-3">
                            <label class="col-form-label pt-0" for="subject">Email will be sent to</label>
                            <input class="form-control" id="" aria-multiline="true" type="text" name="email" value="@foreach ($users as $data){{$data->email}}; @endforeach " readonly>
                          </div>
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
      </div>
      <!-- Container-fluid Ends-->


    </div>

  @endsection
