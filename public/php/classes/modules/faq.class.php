<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir 
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

// List of buttons class
class Faq{
	
	public $el;
	public $temp = 'FAQ.temp.html';			// edit temp name here *
	public $path = 'template/modules';			// edit path name here *

//	$data = array(
//		'CLASS_NAME',
//		'PARENT',
//		array(
//				['LINK','TITLE','TEXT']
//			)
//		);

	public function render($args = array()){		


		// fixed create html mockup
		$this->el = new XTemplate($this->temp,$this->path);
		
		// for element that have wrapper  and comment

		
		// scan all variables when using
		foreach ($args as $value){
            $this->el->assign('CLASS_NAME',$value[0]);
            $this->el->assign('PARENT',$value[1]);

            foreach ($value[2] as $item){

                $this->el->assign('LINK',$item[0]);
                $this->el->assign('TITLE',$item[1]);
                $this->el->assign('TEXT',$item[2]);

                // fixed loop
                $this->el->parse('main.loop');
            }

		}

		// fixed out results
		$this->el->parse('main');
		echo $this->el->text('main');
		
	}
	
}
