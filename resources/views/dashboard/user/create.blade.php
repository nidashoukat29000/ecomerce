@extends('dashboard.layout.master')
@section("content")
<div class="app-content content ">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
     
      <div class="content-body">
         
          <!-- Basic multiple Column Form section start -->
          <section id="multiple-column-form">
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">user table</h4>
                          </div>
                          <div class="card-body">
                              <form class="form" id="add-user" enctype="multipart/form-data">
                                @csrf
                                  <div class="row">
                                  {{--   <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicSelect">saleman</label>
                                            <select class="form-select" id="basicSelect" name="saleman_id">
                                                <option value="">select saleman</option>
                                                @foreach ($salemans as $saleman)
                                                    <option value="{{$saleman->id}}">
                                                        {{$saleman->name}}
                                                    </option>
                                                @endforeach       
                                            </select>
                                        </div>
                                      </div> --}}
                               {{--      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicSelect">area</label>
                                            <select class="form-select" id="basicSelect" name="area_id">
                                                <option value="">select area</option>
                                                @foreach ($areas as $area)
                                                    <option value="{{$area->id}}">
                                                        {{$area->name}}
                                                    </option>
                                                @endforeach       
                                            </select>
                                        </div>
                                      </div> --}}
                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="name">name</label>
                                            <input type="text" id="name" class="form-control" placeholder="name" name="name" />
                                        </div>
                                    </div>
                                      

                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="email">email</label>
                                            <input type="text" id="email" class="form-control" name="email" placeholder="email" />
                                        </div>
                                      </div>

                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="password">password</label>
                                            <input type="text" id="password" class="form-control" name="password" placeholder="password" />
                                        </div>
                                      </div>

                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="password_confirmation"> Confirm password</label>
                                            <input type="password" id="password_confirmation" class="form-control" placeholder="password_confirmation" name="password_confirmation" />
                                        </div>
                                    </div>


                                      <div class="col-md-6 col-12">
                                          <div class="mb-1">
                                              <label class="form-label" for="doc">Doc</label>
                                              <input type="file" id="doc" class="form-control" name="doc" placeholder="doc" />
                                          </div>
                                      </div>

                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="status">Select role</label>
                                            <select class="form-select" id="role" name="role">
                                                <option>user</option>
                                                <option>admin</option>
                                           
                                            </select>
                                        </div>
                                    </div>

                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="status">Status Select</label>
                                            <select class="form-select" id="status" name="status">
                                                <option>active</option>
                                                <option>inactive</option>
                                           
                                            </select>
                                        </div>
                                    </div>

                                    

                                      <div class="col-12">
                                          <button type="reset" class="btn btn-primary me-1" onclick="addFormData(event,'post','{{$url}}','{{$url}}','add-user')">Submit</button>
                                          <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- Basic Floating Label Form section end -->

      </div>
  </div>
</div>
@endsection