<!DOCTYPE html>
<html>

<head>
    	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<title>Inventory Management System</title>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
     	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     	<script type="text/javascript" src="./js/main.js"></script>
      <link rel="stylesheet" type="text/css" href="{{ asset('custom/main/style.css') }}">

      <link rel="stylesheet" type="text/css" href="{{asset('js/jquery-3.3.1.js') }}">
      <link rel="stylesheet" type="text/css" href="{{asset('js/jquery.dataTables.min.js') }}">


 </head>

<body>

	  <!                    Navbar                   >

        <nav class="navbar navbar-expand-lg navbar-dark bg-info">

            <a class="navbar-brand" href="/">Home</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">

                    <!Home & Logout in Navbar >
                      
                      <li class="nav-item active">
                        <a class="nav-link" href="logout"><i class="fa fa-user">&nbsp;</i>Logout</a>
                      </li>
                    <! Home & Logout completed >
                            
                </ul>

            </div>

        </nav>

    <!          navbar completed             >
    
<br/><br/>

   @yield('admin_and_New_order_panel')
   @yield('category_brand_product')
   @yield('add_category')
   @yield('add_brand')
   @yield('add_product')


   <!managment>
   <div class = "container">
      @yield('manage')
   </div>
   @yield('jquery');

</body>
</html>