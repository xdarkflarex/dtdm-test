<?php
	$dbname = "internet";
    $servername = "/cloudsql/dtdm-1904-226805:asia-southeast1:dtdm-1904";
    $link = mysqli_connect(null, "root","",$dbname,0,$servername);
	//$connect = mysqli_connect('localhost','root','','maudulieu');
    mysqli_set_charset($link, 'utf8');
        if (!$link){
                die("connection failed:".mysqli_connect_error());
            }
	// $link = mysql_connect("localhost","root","") or die("khong the ket noi");
	// mysql_select_db("internet",$link);
?>