<script>
$(document).ready(function (){
    $('#posts').addClass('active');
});


$('#create_posts').submit(function(e){
    e.preventDefault();

    var data = $('#create_posts').serialize();
    var url = '{{route("posts.store")}}';
    $.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: url,
        data: data,
        success: function(data){
            if(data === true){
                Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Your posts has been saved',
                showConfirmButton: false,
                timer: 1500
                });
                window.location.reload();
            }else if(data === false){
                Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Failed to save posts',
                showConfirmButton: false,
                timer: 1500
                });
            }else{
                Swal.fire({
                position: 'center',
                icon: 'error',
                title: data.message.title,
                showConfirmButton: false,
                timer: 1500
                });
            }
            console.log(data)
            
        }, error: function(error){
            console.log(error);
        }
    });
});


</script>
