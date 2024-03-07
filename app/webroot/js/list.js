$(document).ready(function(){
    var table = new DataTable('#example', {
        processing: true,
        serverSide: true,
        ajax: {
            "url": $("#ajaxurl").val(),
            "type": "POST"
        },
        searching: false,
        ordering: false,    
    });


    // Bind a function to the draw.dt event
    $('#example').on('draw.dt', function() {       
        $('.ajax-button').on('click', function() {
            // Get the data-id attribute value
            var dataId = $(this).data('id');
            

            if (confirm('Are you sure, you want to delete this? ')) {
                // Perform an AJAX call
                $.ajax({
                    url: $("#deleteurl").val(), // Replace with your actual API endpoint
                    type: 'POST',
                    data: { id: dataId },
                    success:function(response) {
                        if(response.success == 1) {
                        // login success
                            window.location.href = response.url;
                        } else {
                            alert(response.message);
                        // login fails
                        }
                    },
                    error: function(error) {
                        // Handle the error
                        console.error('Error:', error);
                    }
                });
            }
        });      
    });
});