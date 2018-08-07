<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir 
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

// List of buttons class
class Pagination{
	
	public $el;
	public $temp = 'pagination.temp.html';			// edit temp name here *
	public $path = 'template/sections';			// edit path name here *



    public function render(){
		
		// fixed create html mockup
		$this->el = new XTemplate($this->temp,$this->path);
        $this->el->parse('main');
		echo $this->el->text('main');
		
	}
	
}
