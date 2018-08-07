<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

class Header
{

    public $el;
    public $data = array();
    public $class_header;
    public $temp = 'header.temp.html';            // edit temp name here *
    public $path = 'template/sections';            // edit path name here *

    function __construct()
    {
        $this->class_header = '';

    }


    public function render()
    {

        $this->el = new XTemplate($this->temp, $this->path);

        $this->el->assign('CLASS_HEADER', $this->class_header);

        $this->el->parse('main');
        echo $this->el->text('main');

    }


}