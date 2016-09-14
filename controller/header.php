<?php
	if(isset($_SESSION["id"]))
	{
		if(isset($_SESSION['producer'])){
			require("view/header_in_pro.phtml");
		}
		else if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
			require("view/header_in_admin.phtml");
		}
		else if(isset($_SESSION['admin']) && $_SESSION['admin'] == 0){
			require("view/header_in_user.phtml");
		}
	}
	else
	{
		require("view/header.phtml");
	}
?>