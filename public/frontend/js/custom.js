/** show/hide start exam timer option */
$(document).on('click', '#withouttimer', function () {
    console.log('helo');
    if ($(this).is(':checked')) {
        $('.shoehidediconexams').css('display', 'none');
    } else {
        $('.shoehidediconexams').css('display', 'block');
    }
});

/**script to get exams by vendor_id */
$(document).on('change', '.demo_vendor_id', function () {

    var vendor_id = $(this).val();
    var url = $(this).attr('data-route');
    if (vendor_id != '') {
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
            success : function (response) {
                $('#demo_exam_id').append(response);
            }
        })
    }

})

/** script to prevent user to mutiple click on download demo button
 * download demo button disabled for 3 seconds */
$(document).on('click', '.download-demo-btn', function () {
    if ($('#demos_form').valid()) {
        var el = $(this);
        el.css('pointer-events', 'none');

        setTimeout(function () {
            el.css('pointer-events', 'auto');
        }, 3000)
    }

})
