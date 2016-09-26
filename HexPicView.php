<?php
/**
 * class HexPicView
 * @author David Heskett
 * @date Created 09/10/2016
 * @copyright Copyright (c) 2016 David L. Heskett
 *
 * @todo 
 
 
 @abstract
 Create tool to make hexagons out of a pic file and run image testing.
 
 */
 
include_once('ImagePro.php');
 
class HexPicView
{
	private $html;
	
	/**
 	 *
 	 */
 	 public function __construct()
	{
	}
	
	/**
 	 *
 	 */
	public function __destruct()
	{
	}
	

	//******************
	//

	/**
	 * showTop - 
	 */
	public function showTop($title = '')
	{
		$html = '';
		
		$html .= '<'.'!'.'DOCTYPE html'.'>';
		$html .= "\n";
		$html .= '<html>';
		$html .= "\n";
		$html .= '<html xmlns="http://www.w3.org/1999/xhtml" lang="en">';
		$html .= "\n";
		$html .= '<head>';
		$html .= "\n";
		$html .= '<title>'.$title.'</title>';
		$html .= "\n";
		$html .= '<meta http~equiv="content-type" content="text/html" charset="utf-8" />';
		$html .= "\n";
		
		//$html .= '<link rel="stylesheet" href="css/yourhtml.css"/>';
		$html .= "\n";
		//$html .= '<script src="js/jquery.js" type="text/javascript"></script>';
		$html .= "\n";
		//$html .= '<script src="js/yourjavascript.js" type="text/javascript"></script>';
		$html .= "\n";
		$html .= '</head>';
		$html .= "\n";
		$html .= '<body>';
		$html .= "\n";
		
		$this->html = $html;

		return $html;
	}

	/**
 	 * showMiddle - 
 	 */
	public function showMiddle($w = 150, $h = 150)
	{
		$html = ''; // your stuff here
		$html .= "\n";
		
		$img = new ImagePro();
		//echo $img;
		$html .= $img->getAnImage($w, $h);
		
		$this->html = $html;

		return $html;
	}

	/**
 	 * showBottom - 
 	 */
	public function showBottom()
	{
		$html = '</body>';
		$html .= "\n";
		$html .= '</html>';
		$html .= "\n";
		
		$this->html = $html;

		return $html;
	}

} // end class
//****************
//****************
//****************

?>