<?php
/**
 *  ImagePro.php
 *  @author David L. Heskett
 *  @date Created: 09/10/2016
 *  @copyright Copyright (c) 2016 David L. Heskett
 *
 *  @todo
 *
 
@abstract
Added features for a basic image with methods such as random fill and color an image.

 */

include_once('ImageBasic.php');


class ImagePro extends ImageBasic
{
	const MAX_DOTS  = 10000;  // number of dots to randomize
	
	/**
	 *   constructor - 
	 */
	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 *   destructor - 
	 */
	public function __destruct()
	{
		parent::__destruct();
	}
	
	/**
	 *   stubx - 
	 */
	public function stubx()
	{
	}
	
	/**
	 *   doit - 
	 */
	public function doit($width = 344, $height = 295)
	{
		$this->setWidth($width);
		$this->setHeight($height);
		
		$this->initImage();
		$this->genImage();
		
		$this->show();
	}

	/**
	 *   rndImg - 
	 */
	public function rndImg($width = 344, $height = 295)
	{
		$this->setWidth($width);
		$this->setHeight($height);
		
		$this->initImage();
		$this->genImage();

		imagepng($this->image);
	}

	/**
	 *   getAnImage - 
	 */
	public function getAnImage($w = 150, $h = 150)
	{
		ob_start();
		$this->rndImg($w,$h);

		// Capture the output
		$imagedata = ob_get_contents();
	
		// Clear the output buffer
		ob_end_clean();

		$str = '<img src="data:image/png;base64,' . base64_encode($imagedata) . '" alt="image 1" width="'.$w.'" height="'.$h.'"/>';
		
		return $str;
	}
	
	/**
	 *   genImage - 
	 */
	public function genImage()
	{
		$color = ImageColorAllocate($this->image, 254, 254, 254);
		ImageFill($this->image, 0, 0, $color);
		
		$xLast = rand() % $this->width;
		$yLast = rand() % $this->height;

		$blackcolor = ImageColorAllocate($this->image, 0, 0, 0);
		$greencolor = ImageColorAllocate($this->image, 0, 255, 0);
		$redcolor   = ImageColorAllocate($this->image, 255, 0, 0);
		$bluecolor  = ImageColorAllocate($this->image, 0, 0, 255);
				
		$this->rndcolorDots();
		$this->rndcolorDots();
		$this->rndcolorDots();
		$this->rndcolorDots();
		$this->rndcolorDots();
	}

	/**
	 *   genImage2 - 
	 */
	public function genImage2()
	{
		$color = ImageColorAllocate($this->image, 254, 254, 254);
		ImageFill($this->image, 0, 0, $color);
		
		$xLast = rand() % $this->width;
		$yLast = rand() % $this->height;
		
		$blackcolor = ImageColorAllocate($this->image, 0, 0, 0);
		$greencolor = ImageColorAllocate($this->image, 0, 255, 0);
		$redcolor   = ImageColorAllocate($this->image, 255, 0, 0);
		$bluecolor  = ImageColorAllocate($this->image, 0, 0, 255);
		
		//$this->colorDots($blackcolor);
		//$this->colorDots($greencolor);
		//$this->colorDots($redcolor);
		//$this->colorDots($bluecolor);
	}

	/**
	 *   colorDots - 
	 */
	public function colorDots($color)
	{
		for($i = 0; $i < self::MAX_DOTS; $i++)
		{
			$rollx = rand(1, $this->width);
			$rolly = rand(1, $this->height);
		
			// random dot location
			$x = $rollx ;
			$y = $rolly;
		
			ImageSetPixel($this->image, $x, $y, $color);
		}
	}
	
	/**
	 *   rndcolorDots - 
	 */
	public function rndcolorDots()
	{
		$color = ImageColorAllocate($this->image, rand(0, 255), rand(0, 255), rand(0, 255));

		for($i = 0; $i < self::MAX_DOTS; $i++)
		{

			$rollx = rand(1, $this->width);
			$rolly = rand(1, $this->height);
		
			// random dot location
			$x = $rollx ;
			$y = $rolly;
		
			ImageSetPixel($this->image, $x, $y, $color);
		}
	}
	
	/**
	 *   __toString - 
	 */
	public function __toString()
	{
		$str = '';

		//$str .= '<br>';
		$str .= 'ImagePro testing';

		return $str;
	}
	
	
}  // end class

// ****************************************
// ****************************************
// ****************************************
// ****************************************

?>
