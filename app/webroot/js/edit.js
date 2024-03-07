 $(document).ready(function(){
    $("#registerfrm").validate({
    rules :{
        "data[User][firstname]" : {
            required: true,
            lettersonly: true
        },
        "data[User][lastname]" : {
            required: true,
            lettersonly: true
        },
        "data[User][contact_number]" : {
            required: true,
            maxlength: 10,
            minlength: 10,
            numberNotStartWithZero: true
        },

        "data[User][email]" : {
            required : true,
            email: true
        },
        
        "data[User][address]" : {
            required: true,            
        },
    },
    messages :{
        "data[User][firstname]" : {
            required: 'Please enter First Name',
            lettersonly: 'Please enter alphabet only'
        },
        "data[User][lastname]" : {
            required: 'Please enter Last Name',
            lettersonly: 'Please enter alphabet only'
        },
        "data[User][contact_number]" : {
            required: 'Please enter Contact Number',
            maxlength: 'Length should be 10 digit',
            minlength: 'Length should be 10 digit',
            numberNotStartWithZero: 'Please enter max 10 digit not starting with 0'
        },        
        "data[User][email]" : {
            required : 'Please enter Email',
            email: 'Email is needed'
        },
      
    },
    submitHandler: function () { 
            var data = $("#registerfrm").serialize();
            var url = $("#registerfrm").attr("data-url"); 
            $.ajax({
            url:url,
            type:'post',
            data:data,
            dataType:'json',
            success:function(response) {
                if(response.success == 1) {
                // login success
                    window.location.href = response.url;
                } else {
                    $("#login-form-error").html(response.message);
                // login fails
                }
            }
            });
        }
    });
});