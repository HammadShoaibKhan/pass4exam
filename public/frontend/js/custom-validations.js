$('#userRegisterForm').validate({
    rules : {
        email : {
            required : true,
            email : true
        },
        name : {
            required : true
        }
    },
    messages : {
        email : {
            required : "Email is required",
            email : "Email is not valid"
        },
        name : {
            required : "Name is required"
        }
    }
});

$('#demos_form').validate({
    rules : {
        demo_vendor_id : {
            required : true
        },
        demo_exam_id : {
            required : true
        },
        demo_email : {
            required : true
        }
    }
});
