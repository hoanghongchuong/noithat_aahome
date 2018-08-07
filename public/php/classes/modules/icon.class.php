<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir 
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

// List of buttons class
class Icon{
	
	public $el;
	public $comment;
	public $wrapper;
	public $temp = 'button.temp.html';			// edit temp name here *
	public $path = 'template/modules';			// edit path name here *
	
	public function render($args = array()){		
		
		// fixed create html mockup
		$this->el = new XTemplate($this->temp,$this->path);
		
		// for element that have wrapper  and comment 
		$this->el->assign('COMMENT',$this->comment);
		$this->el->assign('WRAPPER',$this->wrapper);
		
		// scan all variables when using
		foreach ($args as $key=>$value){

			// customize if need when more vars in html template *
			$this->el->assign('ID',$key);
			$this->el->assign('TYPE',$value[0]);
			$this->el->assign('SIZE',$value[1]);
			$this->el->assign('TEXT',$value[2]);
			
			// fixed loop
			$this->el->parse('main.loop');
		}

		// fixed out results
		$this->el->parse('main');
		echo $this->el->text('main');
		
	}
	
}
