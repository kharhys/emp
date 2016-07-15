<head>
  <title>Laravel</title>

  <link href="style.css" rel="stylesheet" type="text/css">
  <link href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
  <link href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css" rel="stylesheet" type="text/css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <style>
  </style>
</head>
http://codepen.io/westonmm/pen/oXZJov
http://codepen.io/batressc/pen/mJYEvZ
http://codepen.io/creotip/pen/oXYewL?editors=1100

@import url("http://fonts.googleapis.com/css?family=Open+Sans:400,600,700");
*, *:before, *:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  height: 100%;
}

body {
  font: 14px/1 'Open Sans', sans-serif;
  color: #555;
  background: #eee;
}

.page_card p {
  margin: 0 0 20px;
  line-height: 1.5;
}

#customer_details {
  font-size: 0.8rem;
  padding: 5px 0;
}

.page_card_header {
  display: flex;
  justify-content: flex-end;
  margin-bottom: 2rem;
}

.page_card_header > div {
  flex: 1;
}

.page_card_header > div:first-child {
  flex: 20;
}

.page_card_header > div:last-child {
  color: #191919;
  text-align: right;
}

.page_card {
  width: 80%;
  padding: 1rem;
  margin: 1rem auto;
  background: #fff;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14), 0 2px 1px -1px rgba(0, 0, 0, 0.12);
}

.page_card section {
  display: none;
  padding: 20px 0 0;
  border-top: 1px solid #ddd;
}

.page_card input {
  display: none;
}

.page_card label {
  display: inline-block;
  margin: 0 0 -1px;
  padding: 15px 25px;
  font-weight: 600;
  text-align: center;
  color: #bbb;
  border: 1px solid transparent;
}

.page_card label:before {
  font-family: fontawesome;
  font-weight: normal;
  margin-right: 10px;
}

.page_card label[for*='1']:before {
  content: '\f1cb';
}

.page_card label[for*='2']:before {
  content: '\f17d';
}

.page_card label[for*='3']:before {
  content: '\f16b';
}

.page_card label[for*='4']:before {
  content: '\f1a9';
}

.page_card label:hover {
  color: #888;
  cursor: pointer;
}

.page_card input:checked + label {
  color: #555;
  border: 1px solid #ddd;
  border-top: 1px solid #00bcd4;
  border-bottom: 1px solid #fff;
}

.page_card #tab1:checked ~ #content1,
.page_card #tab2:checked ~ #content2,
.page_card #tab3:checked ~ #content3,
.page_card #tab4:checked ~ #content4 {
  display: block;
}

@media screen and (max-width: 650px) {
  .page_card label {
    font-size: 0;
  }

  .page_card label:before {
    margin: 0;
    font-size: 18px;
  }
}
@media screen and (max-width: 400px) {
  .page_card label {
    padding: 15px;
  }
}
.nav li a {
  color: #FFF;
  font-family: nunito;
  font-size: 21px;
  font-weight: 300;
}

.nav .kebab {
  cursor: pointer;
  position: relative;
  display: inline-block;
  box-sizing: border-box;
  padding: 0 16px;
  top: 12px;
}

.nav .kebab figure {
  width: 5px;
  height: 5px;
  border-radius: 4px;
  background: #00bcd4;
  margin: 4px 0;
}

.nav .middle {
  transition: all 0.25s cubic-bezier(0.72, 1.2, 0.71, 0.72);
  transform: scale(1);
  position: relative;
  box-shadow: 0 0.1px 0.1px 0 rgba(0, 0, 0, 0.16), 0 0.1px 0.3px 0 rgba(0, 0, 0, 0.12);
  -webkit-filter: blur(0.1px);
  filter: blur(0.1px);
}

.nav .middle.active {
  transform: scale(4.5);
  transition: all 0.25s cubic-bezier(0.32, 2.04, 0.85, 0.54);
  box-shadow: 0 0.1px 0.1px 0 rgba(0, 0, 0, 0.16), 0 0.1px 0.3px 0 rgba(0, 0, 0, 0.12);
}

.nav .cross {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(0);
  margin-top: -1px;
  font-family: "Nunito", sans-serif;
  color: #04D2BE;
  transition: all 0.2s cubic-bezier(0.72, 1.2, 0.71, 0.72);
  font-size: 22px;
  user-select: none;
}

.nav .cross.active {
  transform: translate(-50%, -50%) scale(1);
  transition: all 0.15s cubic-bezier(0.32, 2.04, 0.85, 0.54);
}

.nav a, li {
  color: #6b6b6b;
  text-decoration: none;
}

.nav {
  margin-left: 20%;
}

.nav > li {
  display: inline-block;
  padding: 12px 18px;
  cursor: pointer;
  border: 1px solid transparent;
}

.nav > li:hover {
  border: 1px solid #FFF;
  transition: all 350ms ease;
}

.nav .m-dropdown {
  background: #FFF;
  position: absolute;
  right: 0;
  top: 3em;
  transition: all 0.25s ease-out;
  transform: scale(0);
  transform-origin: 100% 0;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.16), 0 2px 8px 0 rgba(0, 0, 0, 0.12);
}

.nav .m-dropdown li {
  display: block;
  width: 100%;
}

.nav .m-dropdown li a {
  width: 100%;
  padding: 1em 18px;
  display: inline-block;
  white-space: pre;
  box-sizing: border-box;
  color: #07C5DE;
}

.nav .m-dropdown li a:hover {
  background: #ebebeb;
}

.nav .m-dropdown:hover ul {
  transform: scale(1);
}

.nav .m-dropdown.active {
  transform: scale(1);
  transition: all 0.25s cubic-bezier(0.5, 1.8, 0.9, 0.8);
}

@media screen and (max-width: 800px) {
  .nav .follow {
    margin: 400px auto 0;
  }
}
dl {
  padding-left: 10em !important;
}

dl:after {
  content: "";
  display: table;
  clear: both;
}

dt, dd {
  margin-bottom: 0.5em;
  float: left;
}

dt:last-of-type, dd:last-of-type {
  margin-bottom: 0;
}

dt {
  font-weight: bold;
  width: 9em;
  margin-left: -10em;
  clear: left;
}

dt:after {
  content: ":";
}

dd {
  margin-left: 0;
  clear: right;
}

dl {
  background: #ffeea9;
  padding: 0.5em;
}

dt {
  padding-left: 0.5em;
}


<div class="page_card">

  <div class="page_card_header">
    <div id="customer_details">
      <h1> Customer Name </h1>
      <h2> Phone Number </h2>
    </div>
    <div>
      <ul class="nav">
        <div class="kebab">
          <figure></figure>
          <figure class="middle"></figure>
          <p class="cross">x</p>
          <figure></figure>
          <ul class="m-dropdown">
            <li><a href="http://www.g.com">Art</a></li>
            <li><a href="http://www.g.com">Coding</a></li>
            <li><a href="http://www.g.com">Design</a></li>
            <li><a href="http://www.g.com">Web Development</a></li>
          </ul>
        </div>
      </ul>
    </div>
  </div>
  <main>

  <input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1">Personal Details</label>

  <input id="tab2" type="radio" name="tabs">
  <label for="tab2">Property Details</label>

  <input id="tab3" type="radio" name="tabs">
  <label for="tab3">Attached Documents</label>

  <section id="content1">
    <p>
      <dl>
  <dt>Name</dt>
  <dd>Sally Jones</dd>

  <dt>Occupation</dt>
  <dd>chef</dd>

  <dt>Address</dt>
  <dd>521 First Street, Chicago IL, USA</dd>

  <dt>This is really long</dt>
  <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</dd>

  <dt>Definition term</dt>
  <dd>Definition definition</dd>
</dl>
    </p>
  </section>

  <section id="content2">
    <p>
      Bacon ipsum dolor sit amet landjaeger sausage brisket, jerky drumstick fatback boudin ball tip turducken. Pork belly meatball t-bone bresaola tail filet mignon kevin turkey ribeye shank flank doner cow kielbasa shankle. Pig swine chicken hamburger, tenderloin turkey rump ball tip sirloin frankfurter meatloaf boudin brisket ham hock. Hamburger venison brisket tri-tip andouille pork belly ball tip short ribs biltong meatball chuck. Pork chop ribeye tail short ribs, beef hamburger meatball kielbasa rump corned beef porchetta landjaeger flank. Doner rump frankfurter meatball meatloaf, cow kevin pork pork loin venison fatback spare ribs salami beef ribs.
    </p>
    <p>
      Jerky jowl pork chop tongue, kielbasa shank venison. Capicola shank pig ribeye leberkas filet mignon brisket beef kevin tenderloin porchetta. Capicola fatback venison shank kielbasa, drumstick ribeye landjaeger beef kevin tail meatball pastrami prosciutto pancetta. Tail kevin spare ribs ground round ham ham hock brisket shoulder. Corned beef tri-tip leberkas flank sausage ham hock filet mignon beef ribs pancetta turkey.
    </p>
  </section>

  <section id="content3">
    <p>
      Bacon ipsum dolor sit amet beef venison beef ribs kielbasa. Sausage pig leberkas, t-bone sirloin shoulder bresaola. Frankfurter rump porchetta ham. Pork belly prosciutto brisket meatloaf short ribs.
    </p>
    <p>
      Brisket meatball turkey short loin boudin leberkas meatloaf chuck andouille pork loin pastrami spare ribs pancetta rump. Frankfurter corned beef beef tenderloin short loin meatloaf swine ground round venison.
    </p>
  </section>

  <section id="content4">
    <p>
      Bacon ipsum dolor sit amet landjaeger sausage brisket, jerky drumstick fatback boudin ball tip turducken. Pork belly meatball t-bone bresaola tail filet mignon kevin turkey ribeye shank flank doner cow kielbasa shankle. Pig swine chicken hamburger, tenderloin turkey rump ball tip sirloin frankfurter meatloaf boudin brisket ham hock. Hamburger venison brisket tri-tip andouille pork belly ball tip short ribs biltong meatball chuck. Pork chop ribeye tail short ribs, beef hamburger meatball kielbasa rump corned beef porchetta landjaeger flank. Doner rump frankfurter meatball meatloaf, cow kevin pork pork loin venison fatback spare ribs salami beef ribs.
    </p>
    <p>
      Jerky jowl pork chop tongue, kielbasa shank venison. Capicola shank pig ribeye leberkas filet mignon brisket beef kevin tenderloin porchetta. Capicola fatback venison shank kielbasa, drumstick ribeye landjaeger beef kevin tail meatball pastrami prosciutto pancetta. Tail kevin spare ribs ground round ham ham hock brisket shoulder. Corned beef tri-tip leberkas flank sausage ham hock filet mignon beef ribs pancetta turkey.
    </p>
  </section>

</main>
</div>
