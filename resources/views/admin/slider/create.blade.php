@extends('admin.layouts.master')
@section('content')
    <section class="section">
      <div class="section-header">
        <h1>Slider</h1>
      </div>

      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Create Slider</h4>
              </div>
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="">Type</label>
                    <input type="text" name="type" class="form-control">   
                  </div>
                  <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control">   
                  </div>
                  <div class="form-group">
                    <label for="">Starting price</label>
                    <input type="text" name="price" class="form-control">   
                  </div>
                  <div class="form-group">
                    <label for="">Button Url</label>
                    <input type="text" name="url" class="form-control">   
                  </div>
                  <div class="form-group">
                    <label for="">Serial</label>
                    <input type="text" name="serial" class="form-control">   
                  </div>
                  <div class="form-group">
                    <label for="">Status</label>
                    <select  class="form-control">
                      <option selected="" disabled required>Choose One</option>
                      <option>Active</option>
                      <option>Inactive</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Banner</label>
                    <input type="file" name="image" class="form-control">   
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Create</button>
                </form>
              </div>
        
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection