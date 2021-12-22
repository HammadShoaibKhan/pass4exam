var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

$(document).ready(function() {


        $('#results-table').DataTable({
            "lengthChange": false
        });


  $(".correctAnswers").hide();
  $("#show-hide").click(function () {
        $(".correctAnswers").toggle();
        if ($(this).text() == "Show Answer") {
          console.log("first click");
          $(this).text("Hide Answer");
      } else {
          $(this).text("Show Answer");
          console.log("second click");
      };
});

  });


/** script to apply actions on next button click*/
$(document).on('click', '.next-question', function (e) {
    e.preventDefault();
    var marked_question = $('.marked-question').is(':checked');
    var element = $(this);
    var url = element.attr('data-route');
    var attempt_id = $('.exam_attempt_id').val();
    var answer = '';
    $('.selected-answer').each(function (i, el) {
        if ($(el).is(':checked')) {
            answer = $(el).val();
        }
    });
    var question_id = $('.current_question_id').val();
    /** check if answer is attempted then change color of
     * position counter blue/attempt-color otherwise color is peach and move position counter arrows to next position*/

    $('.question_no_wdg').each(function (i, el) {
        if ($(el).attr('data-question-id') == question_id) {

            if (marked_question) {
                $(el).css({'background' : '#FFB100', 'color' : '#fff'});
            } else {
                if (answer != '') {
                    $(el).css({'background' : '#67BB04', 'color' : '#fff'});
                } else {
                    $(el).css({'background' : '#D60404', 'color' : '#fff'});
                }
            }

            var elementParent = $(el).parent('.swiper-slide');
            elementParent.removeClass('item-arrow');
            elementParent.css('pointer-events', 'auto');
            var nextElement = elementParent.next('.swiper-slide');
            nextElement.addClass('item-arrow');
            if (!nextElement.next('.swiper-slide').length) {
                element.css('display', 'none');
                $('.end-exam').css('display', 'block');
            }
        }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $.ajax({
        url : url,
        type : 'POST',
        data : {
            question_id : question_id,
            answer : answer,
            attempt_id : attempt_id,
            marked_question : marked_question
        },
        beforeSend : function () {
            $('.loading').css('display', 'block');
        },
        success:function (response) {
            $('.bind-questions').html(response);
        }
    }).then( function() {
        $.ajax({
            type : 'POST',
            url : $('.review_all').attr('data-route'),
            data : {
                attempt_id : attempt_id
            },
            success:function (response) {
                $('.bind-swiper-items').html(response);
                $('.loading').css('display', 'none');
            }
        })
    });

    $('.previous-question').css('display', 'block');

})

/** script used to apply action on previous button click */
$(document).on('click', '.previous-question', function (e) {
    e.preventDefault();
    var element = $(this);
    var url = element.attr('data-route');
    var attempt_id = $('.exam_attempt_id').val();
    var question_id = $('.current_question_id').val();

    $('.question_no_wdg').each(function (i, el) {
        if ($(el).attr('data-question-id') == question_id) {
            var elementParent = $(el).parent('.swiper-slide');
            var previousElement = elementParent.prev('.swiper-slide');
            elementParent.removeClass('item-arrow');
            previousElement.addClass('item-arrow');
            /**check if previous element/question not exists then hide back button*/
            if (!previousElement.prev('.swiper-slide').length) {
                element.css('display', 'none');
            }


        }
    });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url : url,
        type : 'POST',
        data : {
            question_id : question_id,
            attempt_id : attempt_id
        },
        beforeSend : function () {
            $('.loading').css('display', 'block');
        },
        success:function (response) {
            $('.bind-questions').html(response);
            $('.loading').css('display', 'none');
        }
    });

    $('.next-question').css('display', 'block');
    $('.end-exam').css('display', 'none');
})

/** script is used to apply actions on counter widget click */
$(document).on('click', '.question_no_wdg', function (e) {
    e.preventDefault();
    var element = $(this);
    var url = element.attr('data-route');
    var attempt_id = $('.exam_attempt_id').val();
    var question_id = element.attr('data-question-id');

    $('.question_no_wdg').parent('.swiper-slide').removeClass('item-arrow');
    var parentElement = element.parent('.swiper-slide');
    parentElement.addClass('item-arrow');

    if (!parentElement.next('.swiper-slide').length) {
        $('.next-question').css('display', 'none');
        $('.previous-question').css('display', 'block');
        $('.end-exam').css('display', 'block');
    } else if (!parentElement.prev('.swiper-slide').length) {
        $('.previous-question').css('display', 'none');
        $('.next-question').css('display', 'block');
        $('.end-exam').css('display', 'none');
    } else {
        $('.end-exam').css('display', 'none');
        $('.next-question').css('display', 'block');
        $('.previous-question').css('display', 'block');
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url : url,
        type : 'POST',
        data : {
            question_id : question_id,
            attempt_id : attempt_id
        },
        beforeSend : function () {
            $('.loading').css('display', 'block');
        },
        success:function (response) {
            $('.bind-questions').html(response);
            $('.loading').css('display', 'none');
        }
    });

})

/** script to marked the question and question counter  widget */
$(document).on('click', '.marked-question', function () {
    var marked_checkbox = $(this).is(':checked');
    var question_id = $(this).attr('data-question-id');
    $('.question_no_wdg').each(function (i, el) {
        if ($(el).attr('data-question-id') == question_id) {
            if (marked_checkbox) {
                $(el).css({'background' : 'rgb(255, 177, 0)', 'color' : '#fff'});
            } else {
                $(el).css({'background' : '#fff', 'color' : '#000'});
            }
        }
    })
});

/** script to click specific question counter widget when user click through
 * review modal popoup
 */
$(document).on('click', '.review-counter', function(){
    var question_id = $(this).attr('data-question-id');
    $('.question_no_wdg').each(function (i, el) {
        if ($(el).attr('data-question-id') == question_id) {
            $(el).click();
        }
    })

    $('#reviewAllModal').modal('toggle');
})

/** script to end practice exam */
$(document).on('click', '.end-exam', function (e) {
    e.preventDefault();

    Swal.fire({
        title: 'End Exam',
        text: 'Are you sure you want to end the exam?',
        showCancelButton: true,
        cancelButtonText: 'No',
        confirmButtonText: 'Yes',
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            var marked_question = $('.marked-question').is(':checked');
            var element = $(this);
            var url = element.attr('data-route');
            var attempt_id = $('.exam_attempt_id').val();
            var answer = '';
            $('.selected-answer').each(function (i, el) {
                if ($(el).is(':checked')) {
                    answer = $(el).val();
                }
            });
            var question_id = $('.current_question_id').val();
            /** check if answer is attempted then change color of
             * position counter blue/attempt-color otherwise color is peach and move position counter arrows to next position*/

            $('.question_no_wdg').each(function (i, el) {
                if ($(el).attr('data-question-id') == question_id) {

                    if (marked_question) {
                        $(el).css({'background' : '#FFB100', 'color' : '#fff'});
                    } else {
                        if (answer != '') {
                            $(el).css({'background' : '#67BB04', 'color' : '#fff'});
                        } else {
                            $(el).css({'background' : '#D60404', 'color' : '#fff'});
                        }
                    }

                }
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                url : url,
                type : 'POST',
                data : {
                    question_id : question_id,
                    answer : answer,
                    attempt_id : attempt_id,
                    marked_question : marked_question,
                    spend_time: $('#spend_minutes').val()
                },
                beforeSend : function () {
                    $('.loading').css('display', 'block');
                },
                success:function (response) {
                    window.location = response;
                    $('.loading').css('display', 'none');
                }
            })
        }
      })
})

/** show answer view on modal when user click on results page view button */
$(document).on('click', '.show-ans-stats', function (e) {
    e.preventDefault();
    var element = $(this);
    var url = element.attr('data-route');
    var attempt_id = element.attr('data-attempt-id');
    var question_id = element.attr('data-question-id');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url : url,
        type : 'POST',
        data : {
            question_id : question_id,
            attempt_id : attempt_id
        },
        beforeSend : function () {
            $('.loading').css('display', 'block');
        },
        success:function (response) {
            console.log(response);
            $('.reviewbody').html(response);
            $('#answerStatsModal').modal('toggle');
            $('.loading').css('display', 'none');
        }
    });
});
