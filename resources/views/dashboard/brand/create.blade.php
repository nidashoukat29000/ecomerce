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
                              <h4 class="card-title">Brand table</h4>
                          </div>
                          <div class="card-body">
                              <form class="form" id="add-brand" enctype="multipart/form-data">
                                @csrf
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
                                            <input type="text" id="title" class="form-control" placeholder="title" name="title" />
                                        </div>
                                    </div>
                                      

                                   {{--    <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="slug">slug</label>
                                            <input type="text" id="slug" class="form-control" name="slug" placeholder="slug" />
                                        </div>
                                      </div> --}}

                    
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
                                          <button type="reset" class="btn btn-primary me-1" onclick="addFormData(event,'post','{{$url}}','{{$url}}','add-brand')">Submit</button>
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