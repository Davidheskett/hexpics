<?php
/**
 *  show.php
 *  @author David L. Heskett
 *  @date Created: 09/10/2016
 *  @copyright Copyright (c) 2016 David L. Heskett
 *
 *  @todo
 *
 
@abstract
A test module for image generation.

 */

include_once('HexPicView.php');

$title ='hexpic';

$x = new HexPicView();
$html = '';

//$w = 200;
//$h = 100;
$w = rand(100, 300);
$h = rand(100, 300);


$html .= $x->showTop($title);
$html .= $x->showMiddle($w, $h);
$html .= $x->showBottom();

echo $html;

?>
