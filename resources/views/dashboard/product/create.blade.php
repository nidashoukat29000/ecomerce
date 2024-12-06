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
                              <h4 class="card-title">Product table</h4>
                          </div>
                          <div class="card-body">
                              <form class="form" id="add-product" enctype="multipart/form-data">
                                @csrf
                                  <div class="row">
                          
                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="title">title</label>
                                            <input type="text" id="title" class="form-control" placeholder="title" name="title" />
                                        </div>
                                      </div>

                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="summary">summary</label>
                                            <input type="text" id="summary" class="form-control" placeholder="summary" name="summary" />
                                        </div>
                                      </div>

                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="description">description</label>
                                            <input type="text" id="description" class="form-control" placeholder="description" name="description" />
                                        </div>
                                      </div>

                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="is_featured">is_featured</label>
                                            <input type="checkbox" name="is_featured" value="1">
                                        </div>
                                      </div> 

                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="parent_id">cat_id</label>
                                            <select class="form-select" id="cat_id" name="cat_id">
                                                <option value="">Please Select Category</option>
                                              @foreach ($categories as $category)
                                                  <option value="{{$category->id}}">
                                                    {{$category->title}}
                                                  </option>
                                              @endforeach
                                              
                                            </select>
                                        </div>
                                      </div>

                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="child_cat_id">Sub category</label>
                                            <select class="form-select" id="child_cat_id" name="child_cat_id">
                                                {{-- <option value="">Please Select Sub Category</option> --}}
                                            {{--   @foreach ($categories as $category)
                                                  <option value="{{$category->id}}">
                                                    {{$category->title}}
                                                  </option>
                                              @endforeach --}}
                                              
                                            </select>
                                        </div>
                                      </div>

                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="price">price</label>
                                            <input type="number" id="price" class="form-control" placeholder="price" name="price" />
                                        </div>
                                      </div>

                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="discount">discount</label>
                                            <input type="number" id="discount" min='0' max="100" class="form-control" placeholder="discount" name="discount" />
                                        </div>
                                      </div>
                                      
                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label for="size">Size</label>
                                            <select name="size[]" class="form-control selectpicker"  multiple data-live-search="true">
                                                <option value="">--Select any size--</option>
                                                <option value="S">Small (S)</option>
                                                <option value="M">Medium (M)</option>
                                                <option value="L">Large (L)</option>
                                                <option value="XL">Extra Large (XL)</option>
                                            </select>
                                        </div>
                                      </div>
                                    
                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="brand_id">brand_id</label>
                                            <select class="form-select" id="brand_id" name="brand_id">
                                                <option value="">Please Select brand</option>
                                              @foreach ($brands as $brand)
                                                  <option value="{{$brand->id}}">
                                                    {{$brand->title}}
                                                  </option>
                                              @endforeach
                                              
                                            </select>
                                        </div>
                                      </div>

                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="condition">condition</label>
                                            <select class="form-select" id="condition" name="condition">
                                                <option value="">--Select Condition--</option>
                                                <option value="default">Default</option>
                                                <option value="new">New</option>
                                                <option value="hot">Hot</option>
                                           
                                            </select>
                                        </div>
                                      </div>

                                      <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="stock">stock</label>
                                            <input type="number" id="stock" min='0'  class="form-control" placeholder="stock" name="stock" />
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
                                            <select class="form-select" id="status" name="status">
                                                <option value="active">active</option>
                                                <option value="inactive">inactive</option>
                                           
                                            </select>
                                        </div>
                                      </div>

                                    

                                      <div class="col-12">
                                          <button type="reset" class="btn btn-primary me-1" onclick="addFormData(event,'post','{{$url}}','{{$url}}','add-product')">Submit</button>
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
@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script type="text/javascript">
       $('#cat_id').change(function() {
           var selectValue = $(this).val();
   
           console.log(selectValue);
            if (cat_id) {
                $.ajax({
                    type: "GET",
                    dataType: 'json',
              
                   url:"{{url('admin/products/childs')}}",
                   data:{ parent_id: selectValue },
                    success: function(res) {
                    console.log(res);
                        if (res) {
                            $('#child_cat_id').empty();
                            $('#child_cat_id').append('<option value="">select</option>');
                            $.each(res, function(key) {
                                $('#child_cat_id').append('<option value="' + res[key].id + '">' + res[
                                    key].title + '</option>');

                            });
                        } else {
                            $('#child_cat_id').empty();

                        }
                    }

                })
            } else {
                $('#child_cat_id').empty();
              

            }

        });
    </script>
@endsection