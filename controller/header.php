<?php
	if(isset($_SESSION["user"], $_SESSION['admin']))
	{
		if($_SESSION['admin'] == 0){
			require("view/header_in_user.phtml");
		}
		else if($_SESSION['admin'] == 1){
			require("view/header_in_admin.phtml");
		}
		else if($_SESSION['admin'] == 2){
			require("view/header_in_pro.phtml");
		}
	}
	else
	{
		require("view/header.phtml");
	}
?>