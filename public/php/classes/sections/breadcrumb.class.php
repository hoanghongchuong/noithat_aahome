<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir 
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

// List of buttons class
class Breadcrumb{
	
	public $el;
	public $temp = 'breadcrumb.temp.html';			// edit temp name here *
	public $path = 'template/sections';			// edit path name here *

    public function __construct()
    {
        $this->data = array(
            'current page',
            ['#','cate page'],

        );
    }

    public function render($args = array()){
		
		// fixed create html mockup
		$this->el = new XTemplate($this->temp,$this->path);

        $this->el->assign('CURRENT_PAGE',$args[0]);

            for($i = 1; $i < count($args); $i++){
                $this->el->assign('LINK',$args[$i][0]);
                $this->el->assign('PAGE',$args[$i][1]);
                $this->el->parse('main.loop');
            }
        $this->el->parse('main');
		echo $this->el->text('main');
		
	}
	
}
