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
                              <h4 class="card-title">Coupon table</h4>
                          </div>
                          <div class="card-body">
                              <form class="form" id="add-coupon" enctype="multipart/form-data">
                                @csrf
                                  <div class="row">
                                     
                                    <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="code">code</label>
                                            <input type="text" id="code" class="form-control" placeholder="code" name="code" />
                                        </div>
                                     </div>
                              
                                     <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="type"> type</label>
                                            <select class="form-select" id="type" name="type">
                                                <option value="fixed">Fixed</option>
                                                <option value="percent">Percent</option>
                                           
                                            </select>
                                        </div>
                                    </div>
                                      
                                    <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="value">value</label>
                                            <input type="number" id="value" class="form-control" placeholder="value" name="value" />
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
                                          <button type="reset" class="btn btn-primary me-1" onclick="addFormData(event,'post','{{$url}}','{{$url}}','add-coupon')">Submit</button>
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