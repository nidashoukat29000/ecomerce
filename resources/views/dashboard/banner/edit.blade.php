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
                              <h4 class="card-title">Banner table</h4>
                          </div>
                          <div class="card-body">
                              <form class="form" id="edit-banner" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                  <div class="row">
                                 
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
                                            <label class="form-label" for="title">title</label>
                                            <input type="text" id="title" class="form-control" placeholder="title" 
                                            value="{{$banner->title}}"
                                            name="title" />
                                        </div>
                                    </div>
                                      

                                    {{--   <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="slug">slug</label>
                                            <input type="text" id="slug" class="form-control" 
                                              value="{{$banner->slug}}"
                                            name="slug" placeholder="slug" />
                                        </div>
                                      </div> --}}

                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="description">description</label>
                                            <input type="text" id="description" class="form-control" name="description" 
                                              value="{{$banner->description}}"
                                            placeholder="description" />
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
                                            <label class="form-label" for="status">Status Select</label>
                                            <select class="form-select" id="status" name="status"    value="{{$banner->status}}">
                                                <option>active</option>
                                                <option>inactive</option>
                                           
                                            </select>
                                        </div>
                                    </div>

                                    

                                      <div class="col-12">
                                          <button type="reset" class="btn btn-primary me-1" onclick="addFormData(event,'post','{{$url.'/'.$banner->id}}','{{$url}}','edit-banner')">Submit</button>
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