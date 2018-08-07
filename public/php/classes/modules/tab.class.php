<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir 
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

// List of buttons class
class Tab{
	
	public $el;
	public $temp = 'tab.temp.html';			// edit temp name here *
	public $path = 'template/modules';			// edit path name here *

	public function __construct()
    {
        $this->tab__data = array(
            ['active','Title1','content1'],
            ['','Title2','content2'],
        );
    }

    public function render(){
		
		// fixed create html mockup
		$this->el = new XTemplate($this->temp,$this->path);
		

		foreach ($this->tab__data as $key => $value){


			$this->el->assign('ID',$key);
			$this->el->assign('ACTIVE',$value[0]);
			$this->el->assign('TITLE',$value[1]);



			$this->el->assign('CONTENT',$value[2]);
            $this->el->parse('main.nav_loop');
            $this->el->parse('main.content_loop');

		}

		// fixed out results
		$this->el->parse('main');
		echo $this->el->text('main');
		
	}
	
}
