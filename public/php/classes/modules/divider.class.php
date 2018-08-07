<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir 
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

// List of buttons class
class Divider{
	
	public $el;
	public $temp = 'divider.temp.html';			// edit temp name here *
	public $path = 'template/modules';			// edit path name here *
	
	public function render($args = array()){		

		$this->el = new XTemplate($this->temp,$this->path);

		foreach ($args as $key=>$value){

			$this->el->assign('CLASS_NAME',$value);

			$this->el->parse('divider');
		}

		echo $this->el->text('divider');
		
	}
	
}

