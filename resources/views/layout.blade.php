<!DOCTYPE html>
<html>
<head>
@include('partials._head')
</head>
<body>


@include('partials._header')

@yield('content')



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

  <script>
    $("#search").keyup(function(){
        var text = $("#search").val();
        var token = $("#token").val();
        $.post('/search' , {text : text , _token : token}).done(function(data){
            $("#products").replaceWith(data);
        });
    });
    $("#add").click(function(){
        var data = $("#addUserForm").serialize();
        $.post("/admin/users" , data).done(function(data){
               $("#myModal").modal("hide");
               $("#users").replaceWith(data);
        });
    });

</script>
 <script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>

</html>
