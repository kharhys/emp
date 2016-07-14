<!DOCTYPE html>
<html>
  <head>
    <title>Customers</title>
    <link rel="stylesheet" href="/fab.css" type="text/css" />
    <link rel="stylesheet" href="/bubbles.css" type="text/css" />
    <link rel="stylesheet" href="/customers.css" type="text/css" />
    <link rel="stylesheet" href="/formsteps.css" media="screen" title="no title" charset="utf-8" />
    <link rel="stylesheet" href="/customersview.css" media="screen" title="no title" charset="utf-8" />
    <link rel="stylesheet" href="/customersindex.css" media="screen" title="no title" charset="utf-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css" />
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,500,300,700' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.11/css/jquery.dataTables.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.11/js/jquery.dataTables.min.js"> </script>
    @yield('head')
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
    @yield('script')
  </body>
</html>
