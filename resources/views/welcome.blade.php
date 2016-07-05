<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css" rel="stylesheet" type="text/css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <style>
        .modal-open .fab-modal-shadow-surogate, .fab-modal-container.active, .fab-modal-inner, .fab-modal-modal-content {
          width: 400px;
          height: 500px;
          min-width: 300px;
          min-height: 300px;
          max-width: 100vw;
          max-height: 100vh;
          }

          body {
          background-color: #D0D0D0;
          width: 90vw;
          margin: 0 auto;
          }

          .fab-modal-backdrop {
          -webkit-transition: background 1s cubic-bezier(0.4, 0, 0.2, 1);
          transition: background 1s cubic-bezier(0.4, 0, 0.2, 1);
          }

          .fab-modal-backdrop {
          box-shadow: none;
          }

          modal-open .fab-modal-backdrop {
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.25);
          position: fixed;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          -webkit-transition: background 1s cubic-bezier(0.4, 0, 0.2, 1) 0.5s;
          transition: background 1s cubic-bezier(0.4, 0, 0.2, 1) 0.5s;
          }
          .modal-open .fab-modal-shadow-surogate {
          box-shadow: 0 10px 20px rgba(0, 0, 0, 0.25), 0 16px 16px rgba(0, 0, 0, 0.30);
          position: fixed;
          top: -10%;
          right: 50%;
          -webkit-transform: translate(50%, 50%);
                transform: translate(50%, 50%);
          -webkit-transition: box-shadow 1s cubic-bezier(0.4, 0, 0.2, 1) 1s;
          transition: box-shadow 1s cubic-bezier(0.4, 0, 0.2, 1) 1s;
          }

          .fab-modal-container {
          will-change: position, height, width;
          position: fixed;
          padding: 0;
          overflow: hidden;
          line-height: normal;
          top: 5em;
          right: 2em;

          }
          .fab-modal-container.inactive {
          position: absolute;
          color: white;
          box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
          border-radius: 50%;
          font-size: 24px;
          min-height: 56px;
          height: 56px;
          min-width: 56px;
          width: 56px;
          -webkit-transition: all 1s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 1s cubic-bezier(0.4, 0, 0.2, 1) 1s, border-radius 1ms linear 1s;
          transition: all 1s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 1s cubic-bezier(0.4, 0, 0.2, 1) 1s, border-radius 1ms linear 1s;
          }
          .fab-modal-container.inactive .fab-modal-inner {
          background: #ff4081;
          -webkit-clip-path: circle(28px at calc(100% - 28px) calc(100% - 28px));
                clip-path: circle(28px at calc(100% - 28px) calc(100% - 28px));
          -webkit-transition: background 0.33333s cubic-bezier(0.4, 0, 0.2, 1), -webkit-clip-path 0.33333s cubic-bezier(0.4, 0, 0.2, 1);
          transition: background 0.33333s cubic-bezier(0.4, 0, 0.2, 1), -webkit-clip-path 0.33333s cubic-bezier(0.4, 0, 0.2, 1);
          transition: clip-path 0.33333s cubic-bezier(0.4, 0, 0.2, 1), background 0.33333s cubic-bezier(0.4, 0, 0.2, 1);
          transition: clip-path 0.33333s cubic-bezier(0.4, 0, 0.2, 1), background 0.33333s cubic-bezier(0.4, 0, 0.2, 1), -webkit-clip-path 0.33333s cubic-bezier(0.4, 0, 0.2, 1);
          }
          .fab-modal-container.inactive .fab-modal-inner .inactive {
          opacity: 1;
          -webkit-transition: opacity 1s linear 0.5s;
          transition: opacity 1s linear 0.5s;
          }
          .fab-modal-container.inactive .fab-modal-modal-content {
          opacity: 0;
          -webkit-transition: opacity 0.33333s cubic-bezier(0.4, 0, 0.2, 1);
          transition: opacity 0.33333s cubic-bezier(0.4, 0, 0.2, 1);
          }
          .fab-modal-container.active {
          border-radius: 0;
          top: -10%;
          right: 50%;
          -webkit-transform: translate(50%, 50%);
                transform: translate(50%, 50%);
          -webkit-transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.5s, box-shadow 0.5s cubic-bezier(0.4, 0, 0.2, 1), right 0.33333s cubic-bezier(0.4, 0, 0.2, 1) 0.5s, border-radius 1ms linear 0.5s;
          transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.5s, box-shadow 0.5s cubic-bezier(0.4, 0, 0.2, 1), right 0.33333s cubic-bezier(0.4, 0, 0.2, 1) 0.5s, border-radius 1ms linear 0.5s;
          }
          .fab-modal-container.active .fab-modal-inner {
          background: white;
          -webkit-clip-path: circle(100% at 40% 40%);
                clip-path: circle(100% at 40% 40%);
          }
          .fab-modal-container.active .fab-modal-inner .inactive {
          opacity: 0;
          -webkit-transition: opacity 0.1s linear 0.5s;
          transition: opacity 0.1s linear 0.5s;
          }
          .fab-modal-container.active .content {
          overflow-y: auto;
          }
          .fab-modal-container button {
          border-radius: 50%;
          color: white;
          background: transparent;
          border: none;
          outline: none;
          padding: 0;
          position: absolute;
          height: 32px;
          width: 32px;
          cursor: pointer;
          }
          .fab-modal-container button.inactive {
          bottom: 0;
          right: 0;
          width: 56px;
          height: 56px;
          z-index: 15;
          cursor: pointer;
          }
          .fab-modal-container button.active {
          top: 16px;
          right: 16px;
          }

          .fab-modal-inner {
          overflow: hidden;
          will-change: clip-path, background;
          position: absolute;
          bottom: 0px;
          right: 0px;
          -webkit-transition: background 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.5s, -webkit-clip-path 1s cubic-bezier(0.4, 0, 0.2, 1) 0.5s;
          transition: background 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.5s, -webkit-clip-path 1s cubic-bezier(0.4, 0, 0.2, 1) 0.5s;
          transition: clip-path 1s cubic-bezier(0.4, 0, 0.2, 1) 0.5s, background 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.5s;
          transition: clip-path 1s cubic-bezier(0.4, 0, 0.2, 1) 0.5s, background 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.5s, -webkit-clip-path 1s cubic-bezier(0.4, 0, 0.2, 1) 0.5s;
          }

          button .material-icons {
          vertical-align: middle;
          position: absolute;
          top: 50%;
          left: 50%;
          -webkit-transform: translate(-12px, -12px);
          transform: translate(-12px, -12px);
          line-height: 24px;
          width: 24px;
          }

          .bar {
          box-sizing: border-box;
          background: #3F51B5;
          color: white;
          width: 100%;
          padding: 16px;
          -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
                flex-shrink: 0;
          -webkit-box-flex: 0;
          -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
                flex-grow: 0;
          }

          .fab-modal-modal-content {
          will-change: opacity, position;
          z-index: 10;
          opacity: 1;
          color: #616161;
          font-family: 'Roboto', 'Helvetica', sans-serif;
          font-size: 18px;
          padding: 0;
          box-sizing: border-box;
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-orient: vertical;
          -webkit-box-direction: normal;
          -webkit-flex-direction: column;
            -ms-flex-direction: column;
                flex-direction: column;
          -webkit-transition: opacity 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.5s;
          transition: opacity 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.5s;
          }

          .content {
          -webkit-box-flex: 1;
          -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
                flex-grow: 1;
          -webkit-flex-shrink: 1;
            -ms-flex-negative: 1;
                flex-shrink: 1;
          overflow-x: hidden;
          overflow-y: hidden;
          padding: 16px;
          }

          button.inactive {
          -webkit-transform: rotate(270deg);
                transform: rotate(270deg);
          }


          header {
          padding: 2rem 3rem 2rem 3rem;
          position: relative;

          background-color: #2196F3;
          box-shadow: 0 1px 6px rgba(0, 0, 0, 0.4);
          }

          header h1 {
          color: #FFFFFF;
          font-weight: normal;
          }

          .container {
          position: relative;
          margin: 0;
          padding: 0;
          background: #fff;
          }

          .main {
          padding: 2em;
          }
        </style>
    </head>
    <body>
      <div class="container">
        <header>
          <h1>
            Manage Customers
          </h1>
        </header>
        <div class="fab-modal-backdrop">
          <div class="fab-modal-shadow-surogate"></div>
          <div class="fab-modal-container inactive" id="dialog">
            <div class="fab-modal-inner">
              <button class="inactive"><i class="material-icons fab inactive">launch</i></button>
              <div class="fab-modal-modal-content">
                <div class="bar">
                  <button class="active"><i class="material-icons fab active">cancel</i></button>
                  <h2 class="mdl-card__title-text">Modal</h2>
                </div>
                <div class="content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semperporta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. </p>

                  <p>Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce acturpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. </p>

                  <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="main">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>

          <p>Ut orci risus, accumsan porttitor, cursus quis, aliquet eget, justo. Sed pretium blandit orci. Ut eu diam at pede suscipit sodales. Aenean lectus elit, fermentum non, convallis id, sagittis at, neque. Nullam mauris orci, aliquet et, iaculis et, viverra vitae, ligula. Nulla ut felis in purus aliquam imperdiet. Maecenas aliquet mollis lectus. Vivamus consectetuer risus et tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.
          Sed nisi. Nulla quis sem at nibh elementum imperdiet. </p>

          <p>Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. </p>

          <p>Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. </p>

          <p>Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. </p>

          <p>Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus. Sed aliquet risus a tortor. Integer id quam. Morbi mi. </p>
        </div>
      </div>
    </body>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#dialog button").click(function() {
          if (!$("#dialog").hasClass("active")) {
            $("#dialog").addClass("active");
            $("#dialog").removeClass("inactive");
            $("body").addClass("modal-open");
          } else {
            $("#dialog").removeClass("active");
            $("#dialog").addClass("inactive");
            $("body").removeClass("modal-open");
          }
        })
      })
    </script>
</html>
