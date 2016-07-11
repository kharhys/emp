<!DOCTYPE html>
<html>
  <head>
    <title>Customer Management Portal</title>
    <link href="landing.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  </head>
  <?php print_r($response); ?>
  <body>
    <div class="wrapper">
    	<div class="container">
    		<h1>Welcome</h1>

    		<form class="form">
    			<input type="text" placeholder="Username">
    			<input type="password" placeholder="Password">
    			<button type="submit" id="login-button">Login</button>
    		</form>
    	</div>

    	<ul class="bg-bubbles">
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    	</ul>
    </div>
  </body>

  <script type="text/javascript">
    $("#login-button").click(function(event){
      event.preventDefault();
      $('form').fadeOut(500);
      $('.wrapper').addClass('form-success');
    });
  </script>
</html>
