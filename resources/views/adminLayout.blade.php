<!DOCTYPE html>
<html>



@include('partials._head')

<body>
    <style>
    .sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
    </style>
    <!-- The sidebar -->
<div class="sidebar col-md-4">
    @if (auth()->user()->hasPermission('read-users'))
          <a href="/admin/users"><i class="fa fa-th"></i><span >Users</span></a>
      @endif
      @if (auth()->user()->hasPermission('read-products'))
          <a href="/admin/products"><i class="fa fa-th"></i><span>Products</span></a>
      @endif
      @if (auth()->user()->hasPermission('read-slider'))
          <a href="/admin/sliders"><i class="fa fa-th"></i><span>Sliders</span></a>
      @endif


  </div>
    @include('partials._headerAdmin')
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


</script>
 <script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>

</html>
