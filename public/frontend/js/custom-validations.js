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