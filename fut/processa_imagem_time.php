<?php


$imagem =  $_POST['imagem'];
$imagem = 'https://scontent.fgru5-1.fna.fbcdn.net/v/t31.0-8/22459457_564585837240489_2126560550543645776_o.jpg?oh=3c919711e7abfedf1038c61d0579b564&oe=5A7A8148';
$object_id =  $_POST['object_id'];

$image = 'img_dir/time_'.$object_id.'.jpg';
file_put_contents($image, file_get_contents($imagem));