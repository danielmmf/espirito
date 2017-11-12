<?php


//print_r($_POST['imagem']);

//$url = 'https://scontent.xx.fbcdn.net/v/t1.0-9/s720x720/22519472_1525461874158743_2165643857003964227_n.jpg?oh=9f67d800e000e49be80dd4763232bfe8&oe=5A796901';
$url = 'https://scontent.xx.fbcdn.net/v/t1.0-9/s720x720/22519472_1525461874158743_2165643857003964227_n.jpg?oh=9f67d800e000e49be80dd4763232bfe8&oe=5A796901';
$url ="img_dir/large.jpg";
$image = 'img_dir/jogador.jpg';
file_put_contents($image, file_get_contents($url));
//echo '1,2,3,4';


ini_set('display_errors', 1);
	error_reporting(E_ALL);

	include 'vendor/autoload.php';

	//$image = 'gfp@abc123-stats.jpg'; // the image to crop
	$dest_image = 'img_dir/avatar.jpg'; // make sure the directory is writeable

	$img = imagecreatetruecolor('200','200');
	$org_img = imagecreatefromjpeg($image);
	$ims = getimagesize($image);
	//imagecopy($img,$org_img, 0, 0, 315, 380, 100, 500);
	imagecopy($img,$org_img, 0, 0, 1390, 130, 200, 200);
	imagejpeg($img,$dest_image,100);
	imagedestroy($img);
	//echo '<img src="'.$image.'" width="400px">';
	//echo '<img src="'.$dest_image.'" >';


	$dest_image = 'img_dir/character.jpg'; // make sure the directory is writeable

	$img = imagecreatetruecolor('120','380');
	$org_img = imagecreatefromjpeg($image);
	$ims = getimagesize($image);
	//imagecopy($img,$org_img, 0, 0, 315, 380, 100, 500);
	imagecopy($img,$org_img, 0, 0, 490, 530, 120, 380);
	imagejpeg($img,$dest_image,100);
	imagedestroy($img);

	//echo '<img src="'.$dest_image.'" >';

	header("Content-type:application/json");

	$ocr = new TesseractOCR($dest_image);
	$ocr->whitelist( range(0, 9),' -_@');
	$ocr->psm( 6 );
    $result = $ocr->run();
   // var_dump($result);
	//echo $result;
	$str_result = $result;
	$stats =  explode("\\n", $str_result);
	$strlen = strlen( $stats[0] );
	$dados = "";
	for( $i = 0; $i <= $strlen; $i++ ) {
	    $char = substr( $stats[0], $i, 1 );
	  //  var_dump($char);
	   // echo ord($char).PHP_EOL;
	    if(ord($char)==10){
	    	$dados .= " ";
	    }else{
	    	$dados .= $char;
	    }
	    // $char contains the current character, so do your processing here
	}


	$stats =  explode(" ", $dados);
	$stats = array('dados' => $stats  );
	echo json_encode($stats);
	//var_dump("{'dados':'".$stats[0]."'}");
//	echo "
//";
//$stats =  explode("\\n", $stats[0]);
//	print_r($stats[0])

    ?>

