$('#add-vendor-form').validate({
    rules : {
        title : {
            required : true,
            remote : {
                url : "name-exists",
                type : "POST",
                data : {
                    _token : $('meta[name="csrf-token"]').attr('content'),
                    title : function () {
                        return $("#title").val();
                    }
                }
            }
        }
    },
    messages : {
        title : {
            required : "Name is required"
        }
    }
})

$('#edit-vendor-form').validate({
    rules : {
        title : {
            required : true,
        }
    },
    messages : {
        title : {
            required : "Name is required"
        }
    }
});

$('#admin-login-form').validate({
    rules : {
        email : {
            required : true,
            email : true
        },
        password : {
            required : true
        }
    },
    messages : {
        email : {
            required : "Email is required",
            email : "Email not valid"
        },
        password : {
            required : "Password is required"
        }
    },
    errorPlacement: function ($error, $element) {
        var name = $element.attr("name");
        $(".error_" + name).append($error);
    }
});