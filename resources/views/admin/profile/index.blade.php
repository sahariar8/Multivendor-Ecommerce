@extends('admin.layouts.master')
    @section('content')
      <!-- Main Content -->
        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>
          <div class="section-body"></div>

            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-7 mx-auto">
                <div class="card">
                  <form  action="{{ route('admin.profile.update') }}" method="post" class="needs-validation" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                      <h4>Update Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">                               
                          <div class="form-group col-md-6 col-12">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{  Auth::user()->name }}" required="">
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="{{  Auth::user()->email }}"  required="">
                          </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 col-12">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image" >
                                <img src="{{ asset(auth()->user()->image)  }}" alt="image" width="100" height="100" class="mt-2">
                              </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Update</button>
                    </div>
                  </form>
                </div>

                <div class="card">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif
                    <form  action="{{ route('admin.password.update') }}" method="post" class="needs-validation">
                      @csrf
                      <div class="card-header">
                        <h4>Update Password</h4>
                      </div>
                      <div class="card-body">
                          <div class="row">                               
                            <div class="form-group col-md-12 col-12">
                              <label>Current Password</label>
                              <input type="password" class="form-control" name="current_password" required>
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-12 col-12">
                                <label>New Password</label>
                                <input type="password" class="form-control" name="password" required="">
                              </div>
                          </div>
                           <div class="row">
                            <div class="form-group col-md-12 col-12">
                                <label>Caonfirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" required="">
                              </div>
                          </div>
                          
                      </div>
                      <div class="card-footer text-right">
                        <button class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
          </div>
        </section>
    @endsection