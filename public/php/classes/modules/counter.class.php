<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir 
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

// List of buttons class
class Counter{

    public $el;
    public $comment;
    public $class_wrapper;
    public $temp = 'counter.temp.html';			// edit temp name here *
    public $path = 'template/modules';			// edit path name here *

    public function render($args = array()){

        // fixed create html mockup
        $this->el = new XTemplate($this->temp,$this->path);
        $this->el->assign('WRAPPER',$this->class_wrapper);
        // scan all variables when using
        foreach ($args as $key=>$value){

            $this->el->assign('ICON',$value[0]);
            $this->el->assign('CLASS_NAME',$value[1]);
            $this->el->assign('COUNT_TO',$value[2]);
            $this->el->assign('TEXT',$value[3]);

            $this->el->parse('main.loop');
            $this->el->parse('main');

        }

        // fixed out results
        echo $this->el->text('main');

    }

}
