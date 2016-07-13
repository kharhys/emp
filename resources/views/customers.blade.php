<!DOCTYPE html>
<html>
  <head>
    <title>Customers</title>
    <link href="fab.css" rel="stylesheet" type="text/css">
    <link href="bubbles.css" rel="stylesheet" type="text/css">
    <link href="customers.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css" rel="stylesheet" type="text/css">
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

            <div class="container">
              <header class="page-header">
                <h1> Manage Customers  </h1>
              </header>

              <div class="fab-modal-backdrop">
                <div class="fab-modal-shadow-surogate"></div>
                <div class="fab-modal-container inactive" id="dialog">
                  <div class="fab-modal-inner">
                    <button class="inactive dialog__btn"><i class="material-icons fab inactive">add</i></button>
                    <div class="fab-modal-modal-content">
                      <div class="bar">
                        <button class="active dialog__btn"><i class="material-icons fab active">cancel</i></button>
                        <h2 class="mdl-card__title-text">Create new customer</h2>
                      </div>
                      <div class="content">
                        <div class="form-container" >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="main">
                <div class="demo-btns">
                  <div class="info">
                    <div class="buttons">
                      <ul class="list hidden">
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

          </article>
        </div>
      </main>
    </div>
  </body>
</html>
