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
                              <h4 class="card-title">shipping table</h4>
                          </div>
                          <div class="card-body">
                              <form class="form" id="edit-shipping" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                  <div class="row">
                                 
                             
                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="type">type</label>
                                            <input type="text" id="type" 
                                            value="{{$shipping->type}}"
                                            class="form-control" placeholder="type" name="type" />
                                        </div>
                                    </div>
                                      
                                    <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="price">price</label>
                                            <input type="number" id="price" 
                                             value="{{$shipping->price}}"
                                            class="form-control" placeholder="price" name="price" />
                                        </div>
                                      </div>

                    
                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="status">Status Select</label>
                                            <select class="form-select" id="status" name="status"
                                              value="{{$shipping->status}}"
                                            >
                                                <option>active</option>
                                                <option>inactive</option>
                                           
                                            </select>
                                        </div>
                                    </div>

                                    

                                      <div class="col-12">
                                          <button type="reset" class="btn btn-primary me-1" onclick="addFormData(event,'post','{{$url.'/'.$shipping->id}}','{{$url}}','edit-shipping')">Submit</button>
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