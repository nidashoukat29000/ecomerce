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
                              <h4 class="card-title">Category table</h4>
                          </div>
                          <div class="card-body">
                              <form class="form" id="edit-category" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                  <div class="row">
                                 
                             
                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="title">title</label>
                                            <input type="text" id="title" class="form-control" 
                                            value="{{$category->title}}"
                                            placeholder="title" name="title" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="summary">summary</label>
                                            <input type="text" id="summary" class="form-control" placeholder="summary" 
                                              value="{{$category->summary}}"
                                            name="summary" />
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
                                            <label class="form-label" for="is_parent">is_parent</label>
                                            <input type="checkbox" 
                                              value="{{$category->is_parent}}"
                                            name="is_parent" value="1">
                                        </div>
                                      </div> 

                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="parent_id">Status parent_id</label>
                                            <select class="form-select" id="parent_id" name="parent_id"
                                            
                                            >
                                                <option value="">Please Select Parent Category</option>
                                              @foreach ($parent_categories as $parent_category)
                                                  <option value="{{$parent_category->id}}"
                                                @selected($parent_category->id==$category->parent_category_id)
                                                    >
                                                    {{$parent_category->title}}
                                                  </option>
                                              @endforeach
                                              
                                            </select>
                                        </div>
                                    </div>

                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="status">Status Select</label>
                                            <select class="form-select" id="status" name="status"
                                            value='{{$category->status}}'
                                            >
                                                <option>active</option>
                                                <option>inactive</option>
                                           
                                            </select>
                                        </div>
                                    </div>

                                    

                                      <div class="col-12">
                                          <button type="reset" class="btn btn-primary me-1" onclick="addFormData(event,'post','{{$url.'/'.$category->id}}','{{$url}}','edit-category')">Submit</button>
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