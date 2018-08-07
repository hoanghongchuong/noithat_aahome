<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir 
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

// List of buttons class
class AlertBox{
	
	public $el;
	public $comment;
	public $wrapper;
	public $temp = 'alertbox.temp.html';			// edit temp name here *
	public $path = 'template/modules';			// edit path name here *
	
	public function render($args = array()){		
		
		// fixed create html mockup
		$this->el = new XTemplate($this->temp,$this->path);
		
		// for element that have wrapper  and comment 
//		$this->el->assign('COMMENT',$this->comment);
//		$this->el->assign('WRAPPER',$this->wrapper);
		
		// scan all variables when using
		foreach ($args as $key=>$value){
            $this->el->assign('ICON',$value[0]);
            $this->el->assign('CLASS_NAME',$value[1]);
			$this->el->assign('STRONG_TEXT',$value[2]);
			$this->el->assign('TEXT',$value[3]);
            $this->el->parse('main');
		}

		// fixed out results
		echo $this->el->text('main');
		
	}
	
}
