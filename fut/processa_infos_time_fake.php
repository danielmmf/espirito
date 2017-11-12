<?php

$dados = $_POST['object_id'];
//$dados = 564585837240489;
$uid = $_POST['user_id'];
//$uid = 560284237670649;

$image = 'img_dir/time_'.$dados.'.jpg';

$retorno = array();
ini_set('display_errors', 1);
	error_reporting(E_ALL);

	include 'vendor/autoload.php';
	header("Content-type:application/json");

	//$image = 'gfp@abc123-stats.jpg'; // the image to crop
	$dest_image = 'img_dir/avatar_'.$uid.'.jpg'; // make sure the directory is writeable

	$img = imagecreatetruecolor('200','200');
	$org_img = imagecreatefromjpeg($image);
	$ims = getimagesize($image);
	//imagecopy($img,$org_img, 0, 0, 315, 380, 100, 500);
	imagecopy($img,$org_img, 0, 0, 1460, 150, 200, 200);
	imagejpeg($img,$dest_image,100);
	imagedestroy($img);




	$dest_image = 'img_dir/brasao_'.$uid.'.jpg'; // make sure the directory is writeable

	$img = imagecreatetruecolor('60','70');
	$org_img = imagecreatefromjpeg($image);
	$ims = getimagesize($image);
	//imagecopy($img,$org_img, 0, 0, 315, 380, 100, 500);
	imagecopy($img,$org_img, 0, 0, 152, 78, 60, 70);
	imagejpeg($img,$dest_image,100);
	imagedestroy($img);
	//echo '<img src="'.$image.'" width="400px">';
	//echo '<img src="'.$dest_image.'" >';


	$dest_image = 'img_dir/dados_time_'.$uid.'.jpg'; // make sure the directory is writeable

	$img = imagecreatetruecolor('80','380');
	$org_img = imagecreatefromjpeg($image);
	$ims = getimagesize($image);
	//imagecopy($img,$org_img, 0, 0, 315, 380, 100, 500);
	imagecopy($img,$org_img, 0, 0, 440, 530, 80, 380);
	imagejpeg($img,$dest_image,100);
	imagedestroy($img);

	//echo '<img src="'.$dest_image.'" >';


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
	$stats = array('stats' => $stats  );
	$retorno[]=array('stats' => $stats  );
	//echo json_encode($stats);



	$dest_image = 'img_dir/gerente_time_'.$uid.'.jpg'; // make sure the directory is writeable

	$img = imagecreatetruecolor('160','30');
	$org_img = imagecreatefromjpeg($image);
	$ims = getimagesize($image);
	//imagecopy($img,$org_img, 0, 0, 315, 380, 100, 500);
	imagecopy($img,$org_img, 0, 0, 542, 232, 160, 30);
	imagejpeg($img,$dest_image,100);
	imagedestroy($img);


	$ocr = new TesseractOCR($dest_image);
	//$ocr->whitelist( range(A, Z),range(a, z));
	//$ocr->psm( 6 );
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

	$stats = array('gerente' => $stats );
	$retorno[]=array('gerente' => $stats  );


	$dest_image = 'img_dir/nome_time_'.$uid.'.jpg'; // make sure the directory is writeable
	$img = imagecreatetruecolor('200','30');
	$org_img = imagecreatefromjpeg($image);
	$ims = getimagesize($image);
	//imagecopy($img,$org_img, 0, 0, 315, 380, 100, 500);
	imagecopy($img,$org_img, 0, 0, 200, 80, 200, 30);
	imagejpeg($img,$dest_image,100);
	imagedestroy($img);

	//echo '<img src="'.$dest_image.'" >';
	$ocr = new TesseractOCR($dest_image);
	//$ocr->whitelist( range(A, Z),range(a, z));
	//$ocr->psm( 6 );
    $result = $ocr->run();
   // var_dump($result);
	//echo $result;
	$str_result = $result;
	$stats =  explode("\\n", $str_result);
	$strlen = strlen( $stats[0] );
	$dados = "";
	for( $i = 0; $i <= $strlen; $i++ ) {
	    $char = substr( $stats[0], $i, 1 );
	    if(ord($char)==10){
	    	$dados .= " ";
	    }else{
	    	$dados .= $char;
	    }
	}

	$stats = array('nome' => $stats );
	$retorno[]=array('nome' => $stats  );
	echo json_encode($retorno);
