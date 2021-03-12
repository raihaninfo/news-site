<?php
$hostname = "http://localhost/news-site";
// first host name, secent database username, thard dataqbase password, last database name
$conn = mysqli_connect("localhost", "root", "mysql", "news") or die("Connetion failed : " . mysqli_connect_error());
