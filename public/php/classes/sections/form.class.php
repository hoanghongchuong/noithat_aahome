<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir 
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

// List of buttons class
class Form
{

    public $el;
    public $temp = 'blog.temp.html';            // edit temp name here *
    public $path = 'template/sections';            // edit path name here *

    public function render($args = array())
    {

        $this->el = new XTemplate($this->temp, $this->path);



        $this->el->assign('OVERLAY',$args[1]);

        $this->el->parse('main');

        echo $this->el->text('main');

    }
}
