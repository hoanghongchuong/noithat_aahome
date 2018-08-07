<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir 
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

// List of buttons class
class Testimonial{
	
	public $el;
	public $wrapper;
	public $temp = 'testimonial.temp.html';			// edit temp name here *
	public $path = 'template/modules';			// edit path name here *
	
	public function render($args = array()){		
		
		// fixed create html mockup
		$this->el = new XTemplate($this->temp,$this->path);

		$this->el->assign('WRAPPER',$this->wrapper);
		
		// scan all variables when using
		foreach ($args as $value){

			$this->el->assign('IMG_LINK',$value[0]);
			$this->el->assign('IMG',$value[1]);
			$this->el->assign('NAME',$value[2]);
            $this->el->assign('POSITION',$value[3]);
            $this->el->assign('TEXT',$value[4]);

			$this->el->parse('main');
		}

		echo $this->el->text('main');
		
	}
	
}
