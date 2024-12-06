@extends('dashboard.layout.master')

@section('content')
<div class="app-content content ">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
      </div>
      <div class="content-body">
          <h3>shipping datatable</h3>
       
          <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-1">
                
            <a href="{{url('admin/shippings/create')}}">
                <button type="button" class="btn btn-primary" >
                    Add a shippings
                </button>
            </a>
         
          
          </div>

          <!-- Permission Table -->
          <div class="card">
            
              <div class="card-datatable table-responsive">
               
                
                  <table id="shippingTable" class="datatables-permissions table">
                      <thead  class="table-light">
                          <tr>
                              <th>actions</th>
                              <th>type</th>
                              <th>Price</th>
                             {{--  <th>Join Date</th> --}}
                          
                              <th>Status</th>                       
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
      myTable = $('#shippingTable').DataTable({
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
                  data: 'type'
              },
              {
                  data: 'price'
              },
            
              {
                  data: 'status'
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