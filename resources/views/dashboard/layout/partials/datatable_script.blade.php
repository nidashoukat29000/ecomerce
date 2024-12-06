
<script>
    var myTable = '';
    var isLargerThanMobileScreen = ($(window).width() > 480) ? true : false;
    var datatable_setting = {
        // responsive: isLargerThanMobileScreen,
        searching: false,
        paging: true,
        "scrollX": true,
        dom: '<"row"<"col-10"l><"col-2"B><"col-6"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        // order: [
        //     [2, 'desc']
        // ],
        displayLength: 10,
        autoWidth: false,
        lengthMenu: [
            [10, 25, 100, 500, 999, -1],
            [10, 25, 100, 500, 999, "@lang('All')"]
        ],
    };
    $('.sorting').removeClass('dtr-hidden')
</script>
<script>
    var datatable_buttons = [{
            extend: 'collection',
            className: 'btn btn-label-primary dropdown-toggle me-2',
            text: '<i class="ti ti-file-export me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
            buttons: [{
                    extend: 'print',
                    text: '<i class="ti ti-printer me-1" ></i>Print',
                    className: 'dropdown-item',

                    customize: function(win) {
                        //customize print view for dark
                        $(win.document.body)
                            .css('color', config.colors.headingColor)
                            .css('border-color', config.colors.borderColor)
                            .css('background-color', config.colors.bodyBg);
                        $(win.document.body)
                            .find('table')
                            .addClass('compact')
                            .css('color', 'inherit')
                            .css('border-color', 'inherit')
                            .css('background-color', 'inherit');
                    }
                },
                {
                    extend: 'csv',
                    text: '<i class="ti ti-file-text me-1" ></i>Csv',
                    className: 'dropdown-item',

                },
                {
                    extend: 'excel',
                    text: '<i class="ti ti-file-spreadsheet me-1"></i>Excel',
                    className: 'dropdown-item',

                },
                {
                    extend: 'pdf',
                    text: '<i class="ti ti-file-description me-1"></i>Pdf',
                    className: 'dropdown-item',

                },
                {
                    extend: 'copy',
                    text: '<i class="ti ti-copy me-1" ></i>Copy',
                    className: 'dropdown-item',

                }
            ]
        },
        // {
        //     text: '<i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Add New Record</span>',
        //     className: 'create-new btn btn-primary'
        // }
    ];
</script>
