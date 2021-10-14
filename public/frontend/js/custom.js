/** show/hide start exam timer option */
$(document).on('click', '#withouttimer', function () {
    console.log('helo');
    if ($(this).is(':checked')) {
        $('.shoehidediconexams').css('display', 'none');
    } else {
        $('.shoehidediconexams').css('display', 'block');
    }
});