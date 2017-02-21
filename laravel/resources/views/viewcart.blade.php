<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome to CheapBooks</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/Login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          </button>
          <h1 class="navbar-brand">Welcome to CheapBooks-The best shopping retail services to buy your books</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">About</a></li>
          </ul>
        </div>
      </div>
    </nav>
    





  <div class="page-header">
  <?php echo '<h1>Shopping Cart of '.session('user_name'). '</h1>';?>
  </div>
  <div class="container">
  <div class="panel panel-default">
  <div class="panel-heading bg-grey">
  <h3 class="panel-title">Product Details</h3>
  </div>
  <table class="table table-bordered table-striped">
  <tbody>
  <tr>
  <th width=40%>ISBN</th>
  <th width=10%>Title</th>
  <th width=15%>Quantity</th>
  <th width=5%>Price</th>
  <th width=15%>Total</th>
  </tr>
  <?php
  if($retrieve)
  {
  	
  	$totalprice=0;
  	foreach($retrieve as $ret)
  	{
  ?>
  <tr>
  <td><?php echo $ret->ISBN;  ?></td>
  <td><?php echo $ret->Title;  ?></td>
  <td><?php echo $ret->number;  ?></td>
  <td><?php echo $ret->Price;  ?></td>
  <td><?php echo $ret->Price*$ret->number;  ?>
  </tr>
  <?php 
  $totalprice=$totalprice+($ret->Price*$ret->number);
}
?>

  <td colspan=3 align="right">Total</td>
  <td align="right">$<?php echo $totalprice ?></td>
  <td></td>
  </tr>
  <?php } ?>
 </tbody>
 </table> 
 </div>  
 <form method="post" action="destroy">
 {!! csrf_field() !!}
 <button type="submit" class="btn btn-success" class="author" name="buy">Proceed to Checkout</button>	
 </form>	
 <br>
  <form action="logout" method="post">
  {!! csrf_field() !!}
  <button type="submit" class="btn btn-danger"  name="logout">Not in a mood to shop? Click here to Logout</button>
  </form>
  <br>
  <form action="create" method="get">
   {!! csrf_field() !!}
 <button type="submit" class="btn btn-danger" >Go back to search results</button>
 </form>
 </div>
 
 
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="{{ asset('js/bootstrap.min.js')}}"></script>
  </body>
</html> 	
  