<!doctype html>
<html lang="nl">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Own CSS -->
    <link href="style.css" rel="stylesheet" type="text/css">

    <!-- Required scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

<title>Home</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- <div id="main">
	<div id="sec">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="index.html">Inschrijven</a></li>
			<li><a href="index.html">Groepen</a></li>
			<li><a href="index.html">Over</a></li>
			<li><a href="index.html">Contact</a></li>
		</ul>
	    </div>
	</div>
-->
<!--
<div id="logo">
<img src="Images/logo.png" alt="logo" width="100" height="100">
</div>
-->
<nav class="navbar navbar-expand-lg navbar-light Nav-test">
  <a class="navbar-brand" style="color:rgba(255, 204, 0, 1);" href="index.html">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" style="color:rgba(255, 204, 0, 1);" href="#">Inschrijven</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:rgba(255, 204, 0, 1);" href="#">Groepen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:rgba(255, 204, 0, 1);" href="#">Over</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:rgba(255, 204, 0, 1);" href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<br><br><br><br>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Slider/slider1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Slider/slider2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Slider/slider3.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Slider/slider4.png" alt="Fourth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<style>
    .border {border: 1px solid #CCC;}
</style>

<div class="container">
  <h1>Hello World!</h1>
  <div class="row">
    <div class="col-sm-6" style="background-color:yellow;">
      <p>Lorem ipsum...</p>
    </div>
    <div class="col-sm-6" style="background-color:pink;">
      <p>Sed ut perspiciatis...</p>
    </div>
  </div>
</div><br><br>
<div id="form">
  <form name="contactform" method="post" action="send_form_email.php">
    <table width="450px">
      <tr>
       <td valign="top">
        <label for="Voornaam">Voornaam *</label>
       </td>
       <td valign="top">
        <input  type="text" name="Voornaam" maxlength="50" size="30">
       </td>
      </tr>
      <tr>
       <td valign="top">
        <label for="Achternaam">Achternaam *</label>
       </td>
       <td valign="top">
        <input  type="text" name="Achternaam" maxlength="50" size="30">
       </td>
      </tr>
      <tr>
       <td valign="top">
        <label for="email">Email *</label>
       </td>
       <td valign="top">
        <input  type="text" name="email" maxlength="80" size="30">
       </td>
      </tr>
      <tr>
       <td valign="top">
        <label for="Telefoonnummer">Telefoon nummer</label>
       </td>
       <td valign="top">
        <input  type="text" name="Telefoonnummer" maxlength="30" size="30">
       </td>
      </tr>
      <tr>
       <td valign="top">
        <label for="Extra">Extra informatie</label>
       </td>
       <td valign="top">
        <textarea  name="Extra" maxlength="1000" cols="25" rows="6"></textarea>
       </td>
      </tr>
      <tr>
       <td colspan="2" style="text-align:center">
        <input type="submit" value="Submit">
       </td>
      </tr>
    </table>
  </form>
</div>
<div class="footer">
  <p>content</p>
</div>
</body>
</html>
