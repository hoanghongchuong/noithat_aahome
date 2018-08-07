<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir 
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

// List of buttons class
class Accordion{
	
	public $el;
	public $temp = 'accordion.temp.html';			// edit temp name here *
	public $path = 'template/modules';			// edit path name here *



    public function __construct()
    {
        $this->accordion__arrow = 0;
        $this->accordion__data = array(
            ['Title1','Content1',1],
            ['Title2','Content2',0],
            ['Title3','Content3',0],
        );
    }

    public function render(){
		
		// fixed create html mockup
		$this->el = new XTemplate($this->temp,$this->path);
		
		// scan all variables when using
		foreach ($this->accordion__data as $key=>$value){
            $this->el->assign('ID',$key);
            $this->el->assign('TITLE',$value[0]);
            $this->el->assign('CONTENT',$value[1]);

            if($value[2] == 1){
                $this->el->assign('COLLAPSED','');
                $this->el->assign('TRUE','true');
                $this->el->assign('SHOW','show');
            }else{
                $this->el->assign('COLLAPSED','collapsed');
                $this->el->assign('TRUE','false');
                $this->el->assign('SHOW','');
            }


            if ($this->accordion__arrow == 0){
                $this->el->parse('main.loop');
            }else{
                $this->el->parse('main_1.loop');
            }


		}

		// fixed out results
        if ($this->accordion__arrow == 0){
            $this->el->parse('main');
            echo $this->el->text('main');
        }else{
            $this->el->parse('main_1');
            echo $this->el->text('main_1');
        }

		
	}
	
}
