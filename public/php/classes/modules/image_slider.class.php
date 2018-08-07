<?php

class ImageSlider
{

    public $el;
    public $wrapper_item;
    public $class_name;
    public $slider_option;
    public $temp = 'image-slider.temp.html';            // edit temp name here *
    public $path = 'template/modules';            // edit path name here *

    public function render($args = array())
    {

        $this->el = new XTemplate($this->temp, $this->path);

        $this->el->assign('WRAPPER_ITEM', $this->wrapper_item);
        $this->el->assign('CLASS_NAME', $this->class_name);
        $this->el->assign('SLIDER_OPTION', $this->slider_option);

        foreach ($args as $key => $value) {

            $this->el->assign('NUMBER', $key);
            $this->el->assign('WRAPPER_ITEM', $value[0]);
            $this->el->assign('IMG', $value[1]);
            $this->el->assign('TITLE', $value[2]);
            $this->el->assign('POSITION', $value[3]);

            $this->el->parse('main.loop');
        }

        $this->el->parse('main');
        echo $this->el->text('main');

    }

}
