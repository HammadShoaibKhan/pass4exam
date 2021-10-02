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

/**script to validate add exam form */
$('#add-exam-form').validate({
    rules : {
        title : {
            required : true,
            remote : {
                url : $('#exam-name-exist').val(),
                type : "POST",
                data : {
                    _token : $('meta[name="csrf-token"]').attr('content'),
                    title : function () {
                        return $("#title").val();
                    }
                }
            }
        },
        vendor_id : {
            required : true
        },
        certification_id : {
            required : true
        },
        exam_code : {
            required : true,
            remote : {
                url : $('#exam-code-exist').val(),
                type : "POST",
                data : {
                    _token : $('meta[name="csrf-token"]').attr('content'),
                    exam_code : function () {
                        return $("#exam_code").val();
                    }
                }
            }
        }
    },
    messages : {
        title : {
            required : "Name is required",
            remote : "Exam name already exists"
        },
        vendor_id : {
            required : "Select a vendor"
        },
        certification_id : {
            required : "Select a certification"
        },
        exam_code : {
            required : "Exam code is required",
            remote : "Exam code already exists"
        }
    }
})

/**script to validate update exam form */
$('#edit-exam-form').validate({
    rules : {
        title : {
            required : true,
            // remote : {
            //     url : $('#exam-name-exist').val(),
            //     type : "POST",
            //     data : {
            //         _token : $('meta[name="csrf-token"]').attr('content'),
            //         title : function () {
            //             return $("#title").val();
            //         }
            //     }
            // }
        },
        vendor_id : {
            required : true
        },
        certification_id : {
            required : true
        },
        exam_code : {
            required : true,
            // remote : {
            //     url : $('#exam-code-exist').val(),
            //     type : "POST",
            //     data : {
            //         _token : $('meta[name="csrf-token"]').attr('content'),
            //         exam_code : function () {
            //             return $("#exam_code").val();
            //         }
            //     }
            // }
        }
    },
    messages : {
        title : {
            required : "Name is required",
            // remote : "Exam name already exists"
        },
        vendor_id : {
            required : "Select a vendor"
        },
        certification_id : {
            required : "Select a certification"
        },
        exam_code : {
            required : "Exam code is required",
            // remote : "Exam code already exists"
        }
    }
})

/**script to validate exam demo file */
$('#demo_file_form').validate({
    rules : {
        demo_file : {
            required : true,
            extension : 'PDF|pdf'
        }
    },
    messages : {
        demo_file : {
            required : 'Demo file is required',
            extension : "The demo file must be a file of type: pdf."
        }
    },
    errorPlacement: function ($error, $element) {
        var name = $element.attr("name");
        $(".error_" + name).append($error);
    }
});

/**script to validate exam pdf file */
$('#pdf_file_form').validate({
    rules : {
        pdf_file : {
            required : true,
            extension : 'PDF|pdf'
        }
    },
    messages : {
        pdf_file : {
            required : 'Pdf file is required',
            extension : "The pdf file must be a file of type: pdf."
        }
    },
    errorPlacement: function ($error, $element) {
        var name = $element.attr("name");
        $(".error_" + name).append($error);
    }
});

/**script to validate exam desktop file */
$('#desktop_file_form').validate({
    rules : {
        desktop_file : {
            required : true,
            extension : 'exe|EXE'
        }
    },
    messages : {
        desktop_file : {
            required : 'exe file is required',
            extension : "The desktop file must be a file of type: .exe"
        }
    },
    errorPlacement: function ($error, $element) {
        var name = $element.attr("name");
        $(".error_" + name).append($error);
    }
});

/** script to validate add question form*/
$('#add-question-form').validate({
    rules : {
        question : {
            required : true
        },
        messages : {
            question : {
                required : 'Please enter a question'
            }
        }
    }
});

/** script to validate answers form*/
$('#answers-form').validate({
    rules : {
        answer_1 : {
            required : true
        },
        answer_2 : {
            required : true
        },
        answer_3 : {
            required : true
        },
        answer_4 : {
            required : true
        }
    }
});

/** script to validate add user form*/
$('#add-user-form').validate({
    rules : {
        name : {
            required : true
        },
        email : {
            required : true,
            email : true
        },
        password : {
            required : true
        }
    },
    messages : {
        name : {
            required : 'Name is required'
        },
        email : {
            required : 'Email is required',
            email : 'Enter valid email address'
        },
        password : {
            required : 'Password is required'
        }
    }
});

/** script to validate edit user form*/
$('#edit-user-form').validate({
    rules : {
        name : {
            required : true
        }
    },
    messages : {
        name : {
            required : 'Name is required'
        }
    }
});
