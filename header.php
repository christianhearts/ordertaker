<?php include('conn.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>The Breadman</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="assets/w3.css"></script>
</head>
<style>
body {font-family: "Open Sans", sans-serif;background-color:#faf8f6}
h1,h2,h3,h4,h5,h6 {
    font-family: "Dosis";}
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}
body, html {height: 100%}
.bgimg {
    background-image: url(assets/farmbg1.jpg);
	background-color: background-color('white');
    min-height: 100%;
    background-position: center;
    background-size: cover;}
img.center {
    display: block;
    margin: 0 auto;
}
.w3-theme-l5 {color:#000 !important; background-color:#faf8f6 !important}
.w3-theme-l4 {color:#000 !important; background-color:#efe8e1 !important}
.w3-theme-l3 {color:#000 !important; background-color:#dfd2c3 !important}
.w3-theme-l2 {color:#000 !important; background-color:#cfbba5 !important}
.w3-theme-l1 {color:#000 !important; background-color:#c0a487 !important}
.w3-theme-d1 {color:#fff !important; background-color:#a58057 !important}
.w3-theme-d2 {color:#fff !important; background-color:#93714d !important}
.w3-theme-d3 {color:#fff !important; background-color:#816344 !important}
.w3-theme-d4 {color:#fff !important; background-color:#6e553a !important}
.w3-theme-d5 {color:#fff !important; background-color:#5c4730 !important}

.w3-theme-light {color:#000 !important; background-color:#faf8f6 !important}
.w3-theme-dark {color:#fff !important; background-color:#5c4730 !important}
.w3-theme-action {color:#fff !important; background-color:#5c4730 !important}

.w3-theme {color:#fff !important; background-color:#b18f6a !important}
.w3-text-theme {color:#b18f6a !important}
.w3-border-theme {border-color:#b18f6a !important}

.w3-hover-theme:hover {color:#fff !important; background-color:#b18f6a !important}
.w3-hover-text-theme {color:#b18f6a !important}
.w3-hover-border-theme:hover {border-color:#b18f6a !important}
label > input{ /* HIDE RADIO */
  visibility: hidden; /* Makes input not-clickable */
  position: absolute; /* Remove input from document flow */
}
label > input + img{ /* IMAGE STYLES */
  cursor:pointer;
  border:6px solid transparent;
}
label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
  border:6px solid #000;
}
</style>
