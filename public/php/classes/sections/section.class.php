<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir 
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

// List of buttons class
class Section
{

    public $el;
    public $temp = 'section.temp.html';            // edit temp name here *
    public $path = 'template/sections';            // edit path name here *



    public function section_style_1($args = array())
    {
        $this->el = new XTemplate($this->temp, $this->path);
        foreach ($args as $value) {
            $this->el->assign('CLASS_SECTION', $value[0]);
            $this->el->assign('HEADING', $value[1]);
            $this->el->assign('IMG_LINK', $value[2]);
            $this->el->assign('TITLE', $value[3]);
            $this->el->assign('CONTENT', $value[4]);
            $this->el->assign('BUTTON', $value[5]);
        }
        $this->el->parse('section_style_1');
        echo $this->el->text('section_style_1');
    }

}
