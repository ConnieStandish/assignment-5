<!--- Font Awesome --->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
}

body {
  background-image: url('images/pawprint-small.png');
}

.error {
  background: white;
  max-width: 1817px;
  margin: 0 auto;
  padding-bottom: 6px;
}

main {
    background: white;
    max-width: 1817px;
    margin: 0 auto;
    height: 677px;
}

main.error {
    padding: 1px;
}

.container {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
    margin-bottom: 45px;
    margin-top: 46px;
}

.container h1 {
  font-size: 45px;
  font-family: sans-serif;
  color: #9009e4;
  padding-top: 15px;
}

.container h2 {
  font-family: sans-serif;
  color: #a56de2;
  font-size: 36px;
}

.container::first-line  {
  line-height: 70px;
}

.container h1:before {
  font-family: "Font Awesome 5 Free";
  content: "\f1b0 ";
  font-size: 38px;
}

.container h1:after {
  font-family: "Font Awesome 5 Free";
  content: "\f1b0";
  font-size: 38px;
}

.container a {
    text-decoration: none;
}
</style>

<body>
  <header class="error">
      <div class="container">
        <a href="index.html"><h1>Pet Palace Rescue Center</h1></a>
        <h2>Contact Us</h2>
      </div>
  </header>

<main class="error">
  <div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>
</main>
</body>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
