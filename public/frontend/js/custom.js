
/**script to Submit Testimonial */
$(document).on('click', '.submitcontactdata', function (e) {
    e.preventDefault();

    var url = $(this).attr('data-route');

    let fullName = $('#full_name').val();
    let email = $('#email').val();
    let subject = $('#subject').val();
    let message = $('#message').val();
    let type = $('#GenratedFormtype').val();

    let data = {name:fullName,email:email,subject:subject,message:message,type:type};
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type : 'POST',
        url : url,
        data : data,
        success:function (response) {
            $('#full_name').val('');
            $('#email').val('');
            $('#subject').val('');
            $('#message').val('');
            $('#GenratedFormtype').val('');
            if(response=='success'){
                $('.contactusForm').html("<h1>Delivered</h1> <p>Your Comment has been Submitted Successfully.....!!!</p>");
            }
            else{
                $('.contactusForm').html("<h1>ERROR.....!!!</h1> <p>Something went Wrong.......!!!</p>");
            }
        }
    });
});