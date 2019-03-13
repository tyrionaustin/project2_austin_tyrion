<style type="text/css">
@font-face {
    font-family: 'Infinite Stroke';
    src: url('../fonts/infinite_stroke.otf') format('opentype');
}

* {
  margin: 0;
  padding: 0;
  border: 0;
}

body {
  background: #3aa4d4;
}

header {
  background: #000000;
  position: fixed;
  left: 0;
  right: 0;
  padding: 20px 0;
  text-align: center;
  z-index: 100;
}

header nav ul li {
  display: inline;
}

header nav a {
  color: white;
  text-decoration: none;
  font-weight: bold;
  font-size: 24px;
  margin: 0 20px;
  border: 4px solid #3aa4d4;
  border-radius: 4px;
}
a {
  font-family: 'Infinite Stroke', cursive;
  padding: 5px 10px;
}

header nav a:hover {
  color: #3aa4d4;
}

div {
  overflow: hidden;
}

h1 {
  text-align:center;
  margin: 0 auto;
  padding: 20px 0px;
  font-family: 'Infinite Stroke', cursive;
  font-size: 36px;
  color: white;
}

p {
  max-width: 500px;
  font-family: 'Charter', serif;
  color: white;
  margin: 0 auto;
}

footer {
  background: #000000;
  padding: 20px 0;
  text-align: center;
  color: white;
}
</style>


<header>
  <nav>
    <ul>
      <li><a href="#home">home</a></li>
      <li><a href="#about">about us</a></li>
      <li><a href="#work">our work</a></li>
      <li><a href="#services">services</a></li>
      <li><a href="#booking">booking</a></li>
    </ul>
  </nav>
</header>

<div class="container">
<h1>Missing fields</h1>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>

</div>

<footer>
	<p>This page belongs to Tyrion</p>
</footer>
