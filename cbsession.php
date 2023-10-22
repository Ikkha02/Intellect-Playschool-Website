<?php

if(!session_id())
{
	session_start();

}

if(isset($_SESSION['accID']) != session_id())
{
	header('Location: parentlogin.php');

}

?>