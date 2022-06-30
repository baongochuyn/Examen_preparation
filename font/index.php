<?php 
	$action = "";
	if (isset($_GET["action"]))
		$action = $_GET["action"];
		switch($action){
			case "mainMenu":
				$content_for_layout = "./layout/mainMenu.php";
				break;
			case "productList":
				$content_for_layout = "./layout/productList.php";
				break;
			case "detailedProduct":
				$content_for_layout = "./layout/detailedProduct.php";
				break;
			case "paiement":
				$content_for_layout = "./layout/paiement.php";
				break;
            case "paiement":
				$content_for_layout = "./layout/paiement.php";
				break;
            case "cart":
                $content_for_layout = "./layout/cart.php";
                break;
			default:
				$content_for_layout = "./layout/mainMenu.php";
		}
	$layout = "mainlayout.php";
	include($layout);
	exit();
?>