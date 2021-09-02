/**script to validate add vendor form */
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
            required : "Name is required",
            remote : "Vendor name already exists"
        }
    }
})

/**script to validate edit vendor form */
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

/**script to validate admin login form */
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

/**script to validate add certification form */
$('#add-certification-form').validate({
    rules : {
        title : {
            required : true,
            remote : {
                url : $('#cert-name-exist').val(),
                type : "POST",
                data : {
                    _token : $('meta[name="csrf-token"]').attr('content'),
                    title : function () {
                        return $("#title").val();
                    }
                }
            }
        },
        vender_id : {
            required : true
        }
    },
    messages : {
        title : {
            required : "Name is required",
            remote : "Certification name already exists"
        },
        vender_id : {
            required : "Vendor is required"
        }
    }
})

/**script to validate edit certification form */
$('#edit-certification-form').validate({
    rules : {
        title : {
            required : true
        },
        vender_id : {
            required : true
        }
    },
    messages : {
        title : {
            required : "Name is required"
        },
        vender_id : {
            required : "Vendor is required"
        }
    }
})