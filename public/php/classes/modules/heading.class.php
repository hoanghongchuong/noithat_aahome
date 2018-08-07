<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir 
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

// List of buttons class
class Heading
{
	public $el;
	public $temp = 'heading.temp.html';			// edit temp name here *
	public $path = 'template/modules';			// edit path name here *

    public function render($args = array()){

		$this->el = new XTemplate($this->temp,$this->path);

		foreach ($args as $value){

			$this->el->assign('CLASS',$value[0]);
			$this->el->assign('HEADING_YELLOW',$value[1]);
			$this->el->assign('HEADING',$value[2]);
            $this->el->assign('CONTENT',$value[3]);

			$this->el->parse('main');
		}

		echo $this->el->text('main');
		
	}
	
}
