<?php
error_reporting(0);
session_start();

include ("class/data.php");


if($_POST)
	{
		$name =$_POST["user"];
		$pass =$_POST["pass"];


		$query  = $db->query("select * from user where username='$name' && pass='$pass'",PDO::FETCH_ASSOC);
		if ( $say = $query -> rowCount() ){

			if( $say > 0 ){
				session_start();
				$_SESSION['oturum']=1;
				// $_SESSION['ID']=$name;
				$_SESSION['name']=$name;
                $_SESSION["id"] = $row["id"];
          
				
                header("Location:ad/index.php");
				
			}else{
				header("Location:admin.php");
			}
		}else{
            header("Location:admin.php");

		}
	}
	










?>
