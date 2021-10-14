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

                        if (response == 'relation-exists') {
                            Swal.fire(
                                'Action Revoke!',
                                'Vendor connected with certifications,<br> please delete certifications first.',
                                'warning'
                            )
                        } else {
                            $('#bind-vendors').html(response);

                            Swal.fire(
                                'Deleted!',
                                'Vendor has been deleted.',
                                'success'
                            )
                        }
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

                        if (response == 'relation-exists') {
                            Swal.fire(
                                'Action Revoke!',
                                'Some selected vendors are connected with certifications,<br> Please delete certifications first.',
                                'warning'
                            )
                        } else {
                            $('#bind-vendors').html(response);

                            Swal.fire(
                                'Deleted!',
                                'Vendors has been deleted.',
                                'success'
                            )
                        }
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
            html: "You want to active or disable vendors!<br><b>Note:</b> connected certifications and exams also affects.",
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

/**delete single certification script */
$(document).on('click', '.del-certification', function (e) {

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
                        certification_id : id
                    },
                    success:function (response) {

                        if (response == 'relation-exists') {
                            Swal.fire(
                                'Action Revoke!',
                                'Certification connected with exams,<br> please delete exams first.',
                                'warning'
                            )
                        } else {
                            $('#bind-certifications').html(response);

                            Swal.fire(
                                'Deleted!',
                                'Certification has been deleted.',
                                'success'
                            )
                        }
                    }
                });
            }
          })

    } else {
        Swal.fire({
            title: 'Not Selected!',
            text: 'Please select a Certification',
            icon: 'error',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
          })
    }
});

/**script to delete mutiple selected certifications */
$(document).on('click', '.delete-selected-certifications', function (e) {
    e.preventDefault();

    var certification_ids = [];
    var url = $(this).attr('data-route');

    /**fetch the ids of selected vendors */
    $('.checkboxes').each(function (i, el) {
        var checkbox = $(el);
        if (checkbox.is(':checked')) {
            certification_ids.push(checkbox.attr('data-id'));
        }
    });

    if (certification_ids.length > 0) {
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
                        certification_ids : certification_ids
                    },
                    success:function (response) {

                        if (response == 'relation-exists') {
                            Swal.fire(
                                'Action Revoke!',
                                'Some selected certifications are connected with exams,<br> please delete exams first.',
                                'warning'
                            )
                        } else {
                            $('#bind-certifications').html(response);

                            Swal.fire(
                                'Deleted!',
                                'Certifications has been deleted.',
                                'success'
                            )
                        }
                    }
                });
            }
          })
    } else {
        Swal.fire({
            title: 'Not Selected!',
            text: 'Please select atleast one Certification',
            icon: 'error',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
          })
    }
});

/**script to change selected certifications status */
$(document).on('click', '.change-certification-status', function (e) {
    e.preventDefault();

    var certification_ids = [];
    var url = $(this).attr('data-route');

    /**fetch selected certifications ids */
    $('.checkboxes').each(function (i, el) {
        var checkbox = $(el);
        if (checkbox.is(':checked')) {
            certification_ids.push(checkbox.attr('data-id'));
        }
    });

    if (certification_ids.length > 0) {
        Swal.fire({
            title: 'Choose?',
            html: "You want to active or disable certifications!<br><b>Note:</b> connected exams also affects.",
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
                    certification_ids : certification_ids
                }

            } else if (result.isDenied) {
                data = {
                    status : 0,
                    certification_ids : certification_ids
                }
            }

            $.ajax({
                type : 'POST',
                url : url,
                data : data,
                success:function (response) {

                    $('#bind-certifications').html(response);

                    Swal.fire(
                        'Changed!',
                        'Certifications status has been changed.',
                        'success',
                    )
                }
            });

          })
    } else {
        Swal.fire({
            title: 'Not Selected!',
            text: 'Please select atleast one Certification',
            icon: 'error',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
          })
    }
})

/**script to fetch vendor certifications and bind in dropdown */
$(document).on('change', '.select-vendor', function () {
    var vendor_id = $(this).val();
    var url = $(this).attr('data-route');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type : 'POST',
        url : url,
        data : {
            vendor_id : vendor_id
        },
        success:function (response) {
            var certifications = response;
            var html = '<option value="">Select Certification......</option>';
            if (certifications.length > 0) {
                $(certifications).each(function (i, certification) {
                    html +='<option value="' + certification.id + '">' + certification.title + '</option>';
                });
            }

            $('.certifications_dropdown').html(html);
        }
    })
});

/**script to delete mutiple selected exams */
$(document).on('click', '.delete-selected-exams', function (e) {
    e.preventDefault();

    var exam_ids = [];
    var url = $(this).attr('data-route');

    /**fetch the ids of selected exams */
    $('.checkboxes').each(function (i, el) {
        var checkbox = $(el);
        if (checkbox.is(':checked')) {
            exam_ids.push(checkbox.attr('data-id'));
        }
    });

    if (exam_ids.length > 0) {
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
                        exam_ids : exam_ids
                    },
                    success:function (response) {

                        $('#bind-exams').html(response);

                        Swal.fire(
                            'Deleted!',
                            'Exams has been deleted.',
                            'success'
                        )
                    }
                });
            }
          })
    } else {
        Swal.fire({
            title: 'Not Selected!',
            text: 'Please select atleast one Exam',
            icon: 'error',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
          })
    }
});

/**delete single exam script */
$(document).on('click', '.del-exam', function (e) {

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
                        exam_id : id
                    },
                    success:function (response) {

                        $('#bind-exams').html(response);

                        Swal.fire(
                            'Deleted!',
                            'Exam has been deleted.',
                            'success'
                        )
                    }
                });
            }
          })

    } else {
        Swal.fire({
            title: 'Not Selected!',
            text: 'Please select a Exam',
            icon: 'error',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
          })
    }
});

/**script to change selected exams status */
$(document).on('click', '.change-exam-status', function (e) {
    e.preventDefault();

    var exam_ids = [];
    var url = $(this).attr('data-route');

    /**fetch selected exams ids */
    $('.checkboxes').each(function (i, el) {
        var checkbox = $(el);
        if (checkbox.is(':checked')) {
            exam_ids.push(checkbox.attr('data-id'));
        }
    });

    if (exam_ids.length > 0) {
        Swal.fire({
            title: 'Choose?',
            text: "You want to active or disable exams!",
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
                    exam_ids : exam_ids
                }

            } else if (result.isDenied) {
                data = {
                    status : 0,
                    exam_ids : exam_ids
                }
            }

            $.ajax({
                type : 'POST',
                url : url,
                data : data,
                success:function (response) {

                    $('#bind-exams').html(response);

                    Swal.fire(
                        'Changed!',
                        'Exams status has been changed.',
                        'success',
                    )
                }
            });

          })
    } else {
        Swal.fire({
            title: 'Not Selected!',
            text: 'Please select atleast one Exam',
            icon: 'error',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
          })
    }
})

$(document).on('click', '.del-exam-file', function () {

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
            $(this).parent('td').siblings('.delete_file_form').submit();
        }
    });
});

/**script to change selected users status */
$(document).on('click', '.change-user-status', function (e) {
    e.preventDefault();

    var user_ids = [];
    var url = $(this).attr('data-route');

    /**fetch selected users ids */
    $('.checkboxes').each(function (i, el) {
        var checkbox = $(el);
        if (checkbox.is(':checked')) {
            user_ids.push(checkbox.attr('data-id'));
        }
    });

    if (user_ids.length > 0) {
        Swal.fire({
            title: 'Choose?',
            text: "You want to active or disable users!",
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
                    user_ids : user_ids
                }

            } else if (result.isDenied) {
                data = {
                    status : 0,
                    user_ids : user_ids
                }
            }

            $.ajax({
                type : 'POST',
                url : url,
                data : data,
                success:function (response) {

                    $('#bind-users').html(response);

                    Swal.fire(
                        'Changed!',
                        'Users status has been changed.',
                        'success',
                    )
                }
            });

        })
    } else {
        Swal.fire({
            title: 'Not Selected!',
            text: 'Please select atleast one User',
            icon: 'error',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
        })
    }
})

/**delete single user script */
$(document).on('click', '.del-user', function (e) {

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
                        user_id : id
                    },
                    success:function (response) {

                        $('#bind-users').html(response);

                        Swal.fire(
                            'Deleted!',
                            'User has been deleted.',
                            'success'
                        )
                    }
                });
            }
        })

    } else {
        Swal.fire({
            title: 'Not Selected!',
            text: 'Please select a User',
            icon: 'error',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
        })
    }
});

/**script to delete mutiple selected users */
$(document).on('click', '.delete-selected-users', function (e) {
    e.preventDefault();

    var user_ids = [];
    var url = $(this).attr('data-route');

    /**fetch the ids of selected users */
    $('.checkboxes').each(function (i, el) {
        var checkbox = $(el);
        if (checkbox.is(':checked')) {
            user_ids.push(checkbox.attr('data-id'));
        }
    });

    if (user_ids.length > 0) {
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
                        user_ids : user_ids
                    },
                    success:function (response) {

                        $('#bind-users').html(response);

                        Swal.fire(
                            'Deleted!',
                            'Users has been deleted.',
                            'success'
                        )
                    }
                });
            }
        })
    } else {
        Swal.fire({
            title: 'Not Selected!',
            text: 'Please select atleast one User',
            icon: 'error',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
        })
    }
});


/**script to change selected Order status */
$(document).on('click', '.change-order-status', function (e) {
    e.preventDefault();

    var order_ids = [];
    var url = $(this).attr('data-route');

    /**fetch selected orders ids */
    $('.checkboxes').each(function (i, el) {
        var checkbox = $(el);
        if (checkbox.is(':checked')) {
            order_ids.push(checkbox.attr('data-id'));
        }
    });

    if (order_ids.length > 0) {
        Swal.fire({
            title: 'Choose?',
            text: "You want to active or disable orders!",
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
                    order_ids : order_ids
                }

            } else if (result.isDenied) {
                data = {
                    status : 0,
                    order_ids : order_ids
                }
            }

            $.ajax({
                type : 'POST',
                url : url,
                data : data,
                success:function (response) {

                    $('#bind-orders').html(response);

                    Swal.fire(
                        'Changed!',
                        'orders status has been changed.',
                        'success',
                    )
                }
            });

        })
    } else {
        Swal.fire({
            title: 'Not Selected!',
            text: 'Please select atleast one order',
            icon: 'error',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
        })
    }
});