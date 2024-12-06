@extends('dashboard.layout.master')

@section('content')
<div class="app-content content ">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
      </div>
      <div class="content-body">
          <h3>Product datatable</h3>
       
          <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-1">
                
            <a href="{{url('admin/products/create')}}">
                <button type="button" class="btn btn-primary" >
                    Add a product
                </button>
            </a>
         
          
          </div>

          <!-- Permission Table -->
          <div class="card">
            
              <div class="card-datatable table-responsive">
               
                
                  <table id="productTable" class="datatables-permissions table">
                      <thead  class="table-light">
                          <tr>
                              <th>actions</th>
                              <th>title</th>
                              <th>doc</th>
                              <th>stock</th>
                              <th>size</th>
                              <th>condition</th> 
                              <th>status</th>
                              <th>price</th>
                              <th>discount</th>
                              <th>is_featured</th>
                              <th>cat_id</th>
                              <th>brand_id</th>                       
                          </tr>
                      </thead>
                  </table>
              </div>
          </div>
          <!--/ Permission Table -->
       
         
     
        
      </div>
  </div>
</div>
@endsection

@section('js')
<script>
  $(function() {
      myTable = $('#productTable').DataTable({
          processing: true,
          serverSide: true,
          ajax: {
              url: "{{ $url }}",
              dataType: "json",
              type: "get",
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              data: function(d) {
                  d.table = 1
              },
          },
          columns: [
              {
                  data: 'actions'
              },
              {
                  data: 'title'
              },
             
              {
                  data: 'doc'
              },
              {
                  data: 'stock'
              },
              {
                  data: 'size'
              },
              {
                  data: 'condition'
              },
              {
                  data: 'status'
              },
              {
                  data: 'price'
              },
              {
                  data: 'discount'
              },
              {
                  data: 'is_featured'
              },
              {
                  data: 'cat_id'
              },
              {
                  data: 'brand_id'
              },
              
          ],
          buttons: datatable_buttons,
          ...datatable_setting

      });
      $('#filterApply').on('click', function() {
          myTable.ajax.reload();
      });
  });
</script>
@endsection