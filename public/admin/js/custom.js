$(document).ready(function () {
    /**initialize datatable */
    $('#datatable').DataTable();

    /**initialize summernote text editor */
    $('#summernote').summernote({
        height: 300,
    });
})

/**delete single vendor script */
$(document).on('click', '.del-vendor', function (e) {
    
    var id = $(this).attr('data-id');
    var url = $(this).attr('data-route');

    if (id != '') {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            allowOutsideClick: false,
          }).then((result) => {
            if (result.isConfirmed) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
        
                $.ajax({
                    type : 'POST',
                    url : url,
                    data : {
                        vendor_id : id
                    },
                    success:function (response) {
                        
                        $('#bind-vendors').html(response);

                        Swal.fire(
                            'Deleted!',
                            'Vendor has been deleted.',
                            'success'
                        )
                    }
                });
            }
          })

    } else {
        Swal.fire({
            title: 'Not Selected!',
            text: 'Please select a Vendor',
            icon: 'error',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
          })
    }
});

/**script to select all checkboxes on selection of main checkbox */
$(document).on('change', '.select-all-checkbox', function () {

    if ($(this).is(':checked')) {
        $('.checkboxes').prop('checked', true);
    } else {
        $('.checkboxes').prop('checked', false);
    }
});

/**script to delete mutiple selected vendors */
$(document).on('click', '.delete-selected-vendors', function (e) {
    e.preventDefault();

    var vendor_ids = [];
    var url = $(this).attr('data-route');

    /**fetch the ids of selected vendors */
    $('.checkboxes').each(function (i, el) {
        var checkbox = $(el);
        if (checkbox.is(':checked')) {
            vendor_ids.push(checkbox.attr('data-id'));
        }
    });

    if (vendor_ids.length > 0) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            allowOutsideClick: false,
          }).then((result) => {
            if (result.isConfirmed) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
        
                $.ajax({
                    type : 'POST',
                    url : url,
                    data : {
                        vendor_ids : vendor_ids
                    },
                    success:function (response) {
                        
                        $('#bind-vendors').html(response);

                        Swal.fire(
                            'Deleted!',
                            'Vendors has been deleted.',
                            'success'
                        )
                    }
                });
            }
          })
    } else {
        Swal.fire({
            title: 'Not Selected!',
            text: 'Please select atleast one Vendor',
            icon: 'error',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
          })
    }
});

/**script to change selected vendors status */
$(document).on('click', '.change-vendor-status', function (e) {
    e.preventDefault();

    var vendor_ids = [];
    var url = $(this).attr('data-route');

    /**fetch selected vendors ids */
    $('.checkboxes').each(function (i, el) {
        var checkbox = $(el);
        if (checkbox.is(':checked')) {
            vendor_ids.push(checkbox.attr('data-id'));
        }
    });

    if (vendor_ids.length > 0) {
        Swal.fire({
            title: 'Choose?',
            text: "You want to active or disable vendors!",
            icon: 'question',
            showCancelButton: true,
            showDenyButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            denyButtonColor: '#f0ad4e',
            confirmButtonText: 'Active',
            denyButtonText: 'Disable',
            allowOutsideClick: false,
          }).then((result) => {
              var data;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            if (result.isConfirmed) {
                data = {
                    status : 1,
                    vendor_ids : vendor_ids
                }
               
            } else if (result.isDenied) {
                data = {
                    status : 0,
                    vendor_ids : vendor_ids
                }
            }

            $.ajax({
                type : 'POST',
                url : url,
                data : data,
                success:function (response) {
                    
                    $('#bind-vendors').html(response);

                    Swal.fire(
                        'Changed!',
                        'Vendors status has been changed.',
                        'success',
                    )
                }
            });

          })
    } else {
        Swal.fire({
            title: 'Not Selected!',
            text: 'Please select atleast one Vendor',
            icon: 'error',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
          })
    }
})