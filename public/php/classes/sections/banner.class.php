<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir 
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

// List of buttons class
class Banner
{

    public $el;
    public $temp = 'banner.temp.html';            // edit temp name here *
    public $path = 'template/sections';            // edit path name here *

    public function render($img='banner-1.jpg',$class='vk-banner--style-1')
    {

        $this->el = new XTemplate($this->temp, $this->path);

        $this->el->assign('CLASS', $class);

        $this->el->assign('IMG',$img);

        $this->el->parse('main');

        echo $this->el->text('main');

    }
}
