// Comments include validation:
$(document).ready(function() {
    if (!$('#report-comment-modal').length) {
        alert("Comment system is missing its report modal.")
    }
});

// Handle collapse & expand comments
$('body').on('click', '.comment-toggle', function(e){
    e.preventDefault();
    var comment = $(this).closest('.comment-container');
    comment.find('.comment-body:first').slideToggle();
    comment.find('.media-body > .comment-ellipsis').toggle();
    comment.find('> .comment-toggle').toggle();
});


// Handle comment reply show
$('body').on('click', '.comment-reply-to', function(e){
    e.preventDefault();

    if (!isUserLoggedIn()) {$('#login-required-comment-modal').modal('show'); return} // Validate logged-in user

    var reply_placeholder = $(this).closest('.comment-container').find('.new-comment-box-container:first');

    //Is the reply placeholder already occupied?
    if (reply_placeholder.html().trim().length > 0)
        return;

    var reply_box_template = $($(this).closest('.comments-container').find('> .create-comment-base .new-comment-box').clone());
    reply_placeholder.append(reply_box_template);

    reply_box_template.find('textarea').val(''); // Reset the new text area

    // Set the reply-to attribute for the new comment box:
    var comment_id = getCommentIdByElement(reply_placeholder);
    reply_box_template.attr('data-parent_id', comment_id);
});


// Handle comment reply cancel button
$('body').on('click', '.comment-cancel-button', function(e){
    e.preventDefault();
    $(this).closest('.new-comment-box').remove();
});


// Submit/Reply button handler:
$('body').on('click', '.comment-submit-button', function(e){
    e.preventDefault();
    if (!isUserLoggedIn()) {$('#login-required-comment-modal').modal('show'); return} // Validate logged-in user
    
    var comment_content = $(this).closest('.new-comment-box').find('textarea').val();
    if(comment_content){
    $(this).addClass('disabled').attr('disabled','disabled').text('Submitting...');
    $('.awaiting-reply').removeClass('awaiting-reply');
    var new_comment_box = $(this).closest('.new-comment-box');
    var comment_replies_container = new_comment_box.closest('.comment-container').find('.comment-replies:first');
    if (!comment_replies_container.length)
        comment_replies_container = $(this).closest('.comments-container').find('.discussion-container');
    comment_replies_container.addClass('awaiting-reply')
    var data = getDataAttributes(new_comment_box[0]);
    
    data['comment_text']=comment_content;
    
        //Start server submitting here...
        $.ajax({
            url: BASE_URL+'comments/add_comment',
            data: data,
            method: 'POST',
            success: function(result, status) {
                // Generate the new reply body and add it:
                /// var new_reply = $(result);
                /// reply_destination = $('.awaiting-reply');
                /// new_reply.hide();
                /// reply_destination.prepend(new_reply);
                /// new_reply.fadeIn();
                // Discard the "new comment" box
                ///reply_destination.closest('.comment-container').find('.comment-cancel-button').click();
                location.reload();
            },
            error: function error(xhr,status,error) {
                // Show error to the user:
                bootbox.alert(xhr.responseText);
                // Return the submit button back to normal:
                $('.comment-submit-button[disabled=disabled]').attr('disabled','').removeClass('disabled').text('Submit');
            }
        });
    }
});

// ** BEGIN UPVOTE HANDLING

// Handle upvote on comment.
$('body').on('click', '.comment-upvote', function(e){
    e.preventDefault();
    if (!isUserLoggedIn()) {$('#login-required-comment-modal').modal('show'); return} // Validate logged-in user
    $(this).addClass('disabled').attr('disabled','disabled');
    var comment_id = getCommentIdByElement(this);

    $('.upvote-target').removeClass('upvote-target');
    $(this).closest('.comment-control').find('.upvote-count').addClass('upvote-target');
    var data = {'comment_id' : comment_id};
    $.ajax({
        url: BASE_URL+'comments/upvote_comment',
        data: data,
        method: 'POST',
        success: function (result, status) {
            var obj = JSON.parse(result);
            console.log(obj);
            if(obj.status == 'Success')
            {
               $('.upvote-target').text(parseInt($('.upvote-target').text())+1).addClass('font-weight-bold'); 
            }
            else
            {
                $('.upvote-target').closest('.comment-control').find('.comment-control-error').text(obj.msg);
            }
        },
        error: function error(xhr,status,error) {
            console.log(xhr);
        }
    });
});

// ** END UPVOTE HANDLING


//  ** BEGIN Report comment handling

// Report button handle:
$('body').on('click', '.comment-flag-report', function(e){
    e.preventDefault();
    if (!isUserLoggedIn()) {$('#login-required-comment-modal').modal('show'); return} // Validate logged-in user
    var comment_id = $(this).closest('.comment-container').attr('data-comment-id');
    var comment_username = $(this).closest('.comment-container').find('.comment-username:first').text();
    $("#report-comment-modal .comment-report-modal-username").text(comment_username);
    $("#report-comment-modal").attr('data-comment-id', comment_id);
    $("#report-comment-modal").modal('show');
});

// Modal confirm handler and callback setter
function reportCommentConfirm(callback){
  $("#modal-btn-yes").on("click", function(){
    callback(true);
    $("#report-comment-modal").modal('hide');
  });

  $("#report-comment-modal").on("click", function(){
    $("#report-comment-modal").modal('hide');
  });
};

// Set the callback on the confirm dialog
reportCommentConfirm(function(confirmed){
    if (confirmed) {
        var comment_id = $("#report-comment-modal").attr('data-comment-id');
        var data = {'comment_id': comment_id};
        var url = BASE_URL+'comments/report_comment';
        $.ajax({
            url: url,
            method: 'POST',
            data: data,
            success: function (result, status) {
                var obj = JSON.parse(result);
                console.log(obj);
                alert(obj.msg);
            },
            error: function error(xhr,status,error) {
                //alert(xhr.responseText);
            }
        });
    }
});

// ** END Report comments handling


// ==== Utility functions
function getDataAttributes ( node ) {
    var i,
        attributeNodes = node.attributes,
        length = attributeNodes.length,
        attrs = {};

    for ( i = 0; i < length; i++ )
        if (attributeNodes[i].name.startsWith('data-'))
            attrs[attributeNodes[i].name.replace('data-','')] = attributeNodes[i].value;
    return attrs;
}

function getCommentIdByElement(element) {
    return $(element).closest('.comment-container').attr('data-comment-id');
}

function getCSRFTokenValue() {
    return $('.csrf-value').val();
}

function isUserLoggedIn() {
    return parseInt($('.is-logged-in').val());
}

        // Approve:
        $("body").on("click", ".approve-comment-button", function (e) {
            e.preventDefault();
            var comment_id = $(this).closest(".media").attr("data-comment-id");
            moderate_comment(comment_id, "approve");
            if ($(this).closest(".comment-moderation-row").length)
                $(this).closest(".comment-moderation-row").slideUp().remove();
            else {
                $(this).closest(".media").find(".approve-comment-button").slideUp();
                $(this).closest(".media").find(".comment-head-notification").text("");
            }
        });

        // Delete:
        $("body").on("click", ".delete-comment-button", function (e) {
            e.preventDefault();
            var comment_id = $(this).closest(".media").attr("data-comment-id");
            moderate_comment(comment_id, "delete");
            if ($(this).closest(".comment-moderation-row").length)
                $(this).closest(".comment-moderation-row").slideUp().remove();
            else
                $(this).closest(".media").slideUp().remove();
        });

        // Edit open:
        $("body").on("click", ".edit-comment-button", function (e) {
            e.preventDefault();
            var comment_content_div = $(this).closest(".media").find(".comment_text").first();
            var comment_original_text = comment_content_div.text();

            var edit_comment_content = $("#edit-comment-template").html();

            comment_content_div.text("");
            comment_content_div.html(edit_comment_content);

            comment_content_div.find(".original-comment").text(comment_original_text);
            textarea = comment_content_div.find("textarea")
            textarea.text(comment_original_text);
            autoresize(textarea);
        });

        // Edit cancel:
        $("body").on("click", ".comment-edit-cancel", function (e) {
            e.preventDefault();
            var comment_content_div = $(this).closest(".media").find(".comment_text").first();
            var original_comment_content = comment_content_div.find(".original-comment").text();
            comment_content_div.html(original_comment_content);
        });

        // Edit save:
        $("body").on("click", ".comment-edit-save", function (e) {
            e.preventDefault();
            var comment_id = $(this).closest(".media").attr("data-comment-id");
            var comment_content_div = $(this).closest(".media").find(".comment_text").first();
            var new_comment_content = comment_content_div.find("textarea").val();

            moderate_comment(comment_id, "edit", new_comment_content);
            comment_content_div.html(new_comment_content);
        });

        function moderate_comment(comment_id, action, extra) {
            if (extra === undefined) {
                extra = 1;
            }
            var ajax_data = {
                'comment_id': comment_id,
            };
            ajax_data[action] = extra;

            $.ajax({
                url: "/ajax/moderate/",
                method: 'GET',
                data: ajax_data,
                error: function (xhr, status, error) {
                    alert(status.toString() + "," + error.toString() + ":" + xhr.responseText);
                }
            });
        }

        // Auto resize textarea to fit contents:
        function autoresize(textarea) {
            textarea = $(textarea)
            textarea.css('height','0px');     //Reset height, so that it not only grows but also shrinks
            textarea.css('height',(textarea[0].scrollHeight + 10) + 'px');    //Set new height
        }

        $('textarea.comment-edit').keyup(function () {
            autoresize(this);
        });