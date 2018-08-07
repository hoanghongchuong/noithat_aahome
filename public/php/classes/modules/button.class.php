<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir 
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

// List of buttons class
class Button
{

    public $el;
    public $wrapper;
    public $temp = 'button.temp.html';            // edit temp name here *
    public $path = 'template/modules';            // edit path name here *

    public function render($args = array()) 
    {
        // fixed create html mockup
        $this->el = new XTemplate($this->temp, $this->path);
        $this->el->assign('WRAPPER', $this->wrapper);

        foreach ($args as $key => $value) {

            // customize if need when more vars in html template *  
            $this->el->assign('LINK', $value[0]);
            $this->el->assign('CLASS_NAME', $value[1]);
            $this->el->assign('TEXT', $value[2]);

            $this->el->parse('button');
        }
        // fixed out results
        echo $this->el->text('button');
    }
}

