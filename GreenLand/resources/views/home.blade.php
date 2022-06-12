@extends('layouts.app')

@section('content')

<section class="vh-100" style="background-color: #f4f5f7;">
<div class="container py-5 h-100">
    
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
            <div class="card mb-3" style="border-radius: .5rem;">
                <div class=" offset-5 mt-3 text-dark" style="font-size: 30px">{{ __('User Profile') }}</div>
                <div class="row g-0">
                    <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .9rem; border-bottom-left-radius: .9rem;">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5>Marie Horwitz</h5>
              <p>Web Designer</p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>Information</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-4 mx-3 mb-3">
                      <h6>First name</h6>
                      <input type="text" name="" id="" class="form-control form-control-lg rounded" value="" style="border-radius:5px !important ">
                    </div>
                    <div class="col-4 mb-3">
                      <h6>Last Name</h6>
                      <input type="text" name="" id="" class="form-control form-control-lg rounded" value="" style="border-radius:5px !important ">
                    </div>
                  </div>
                  <div class="row pt-1">
                    <div class="col-4 mx-3 mb-3">
                      <h6>Email</h6>
                      <input type="email" name="" id="" class="form-control form-control-lg rounded" value="" style="border-radius:5px !important ">
                    </div>
                    <div class="col-4 mb-3">
                      <h6>password</h6>
                      <input type="password" name="" id="" class="form-control form-control-lg rounded" value="" style="border-radius:5px !important ">
                    </div>
                  </div>
                  <div class="row pt-1">
                    <div class="col-4 mx-3 mb-3">
                      <h6>phone</h6>
                      <input type="number" name="" id="" class="form-control form-control-lg " value="" style="border-radius:5px !important ">
                    </div>
                    <div class="col-4 mb-3">
                      <h6>password</h6>
                      <input type="password" name="" id="" class="form-control form-control-lg rounded" value="" style="border-radius:5px !important ">
                    </div>
                  </div>
                  <h6>Services</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Recent</h6>
                      <p class="text-muted">Lorem ipsum</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Most Viewed</h6>
                      <p class="text-muted">Dolor sit amet</p>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
               

                <div class=" mt-3 text-dark px-3" style="font-size: 30px">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection
