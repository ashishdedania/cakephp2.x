 $(document).ready(function(){
    $("#loginfrm").validate({
    rules :{
        "data[User][email]" : {
            required : true
        },
        "data[User][password]" : {
            required : true
        }
    },
    messages :{
        "data[User][email]" : {
            required : 'Please enter Email'
        },
        "data[User][password]" : {
            required : 'Please enter Password'
        }
    },
    submitHandler: function () { // for demo
            var data = $("#loginfrm").serialize();
            var url = $("#loginfrm").attr("data-url"); 
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