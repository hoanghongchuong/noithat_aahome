<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

class Media{
	
	public $el;
	public $comment;
	public $wrapper;
	public $temp = 'media.temp.html';			// edit temp name here *
	public $path = 'template/sections';			// edit path name here *
	
	public function render($args = array()){		
		
		// fixed create html mockup
		$this->el = new XTemplate($this->temp,$this->path);
		
		// for element that have wrapper 
		$this->el->assign('COMMENT',$this->comment);
		$this->el->assign('WRAPPER',$this->wrapper);
		
		// scan all variables when using
		foreach ($args as $key=>$value){			
			
			// customize if need when more vars in html template *			
			$this->el->assign('ID',$key);
			$this->el->assign('ALIGN',$value[0]);
			$this->el->assign('HEADING',$value[1]);			
			
			// fixed loop
			$this->el->parse('main.loop');
		}

		// fixed out results
		$this->el->parse('main');
		echo $this->el->text('main');
		
	}
	
}