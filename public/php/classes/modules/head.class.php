<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir 
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

// List of buttons class
class Head{
	
	public $el;
	public $temp = 'head.temp.html';			// edit temp name here *
	public $path = 'template/modules';			// edit path name here *

    public function __construct()
    {
        $this->prefix = 'COMPANY';
    }

    public function render($args = 'Document'){
		
		// fixed create html mockup
		$this->el = new XTemplate($this->temp,$this->path);
		
		// for element that have wrapper  and comment 
		$this->el->assign('TITLE',$args);
		$this->el->assign('PREFIX',$this->prefix);

		// fixed out results
		$this->el->parse('main');
		echo $this->el->text('main');
		
	}
	
}
