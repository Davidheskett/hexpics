<?php
/**
 *  ImageBasic.php
 *  @author David L. Heskett
 *  @date Created: 09/10/2016
 *  @copyright Copyright (c) 2016 David L. Heskett
 *
 *  @todo
 *
 
@abstract
A fundamental basic image setup

 */

class ImageBasic
{
	protected $image;

	protected $width;
	protected $height;
	
	const MIN_WIDTH  = 100;  // a basic width
	const MIN_HEIGHT = 100;  // a basic height
	
	/**
	 *   constructor - 
	 */
	public function __construct()
	{
		$this->width     = self::MIN_WIDTH;
		$this->height    = self::MIN_HEIGHT;
		$this->image = null;
	}
	
	/**
	 *   destructor - 
	 */
	public function __destruct()
	{
		$this->width     = 0;
		$this->height    = 0;
		
		if (!$this->image) {
			imagedestroy($this->image);
		}
	}
	
	/**
	 *   stub - 
	 */
	public function stub()
	{
	}
	
	/**
	 *   show - 
	 */
	public function show()
	{
		header("Content-type: image/png");
		imagepng($this->image);
	}
	
	/**
	 *   setWidth - 
	 */
	public function setWidth($width)
	{
		$this->width = $width;
	}
	
	/**
	 *   setHeight - 
	 */
	public function setHeight($height)
	{
		$this->height = $height;
	}
	
	/**
	 *   initImage - 
	 */
	public function initImage()
	{
		$this->image  = imagecreate($this->width, $this->height);
	}
	
	/**
	 *   getImage - 
	 */
	public function getImage()
	{
		return $this->image;
	}
	
	/**
	 *   endline - 
	 */
	public function endline()
	{
		$str = '';
		
		$str .= '<br>';
		$str .= "\n";

		return $str;
	}
	
	/**
	 *   __toString - 
	 */
	public function __toString()
	{
		$str = '';

		//$str .= '<br>';
		$str .= 'testing';

		return $str;
	}
	
	
}  // end class

// ****************************************
// ****************************************
// ****************************************
// ****************************************

?>
