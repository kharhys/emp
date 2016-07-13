<!DOCTYPE html>
<html>
  <head>
    <title>Customers</title>
    <link href="fab.css" rel="stylesheet" type="text/css">
    <link href="bubbles.css" rel="stylesheet" type="text/css">
    <link href="customers.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  </head>
  <body>
    <div class="page">
      <header class="main-header">
        <div class="wrapper">
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
      </header>
      <nav role='navigation'>
        <div class="wrap">
          <ul>
            <li><a class="active" href="#">Customers</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Account</a></li>
            <li><a href="#">Settings</a></li>
          </ul>
        </div>
      </nav>
      <main>
        <div class="wrap">
          <article>

            @yield('page')

          </article>
        </div>
      </main>
    </div>
  </body>
</html>
