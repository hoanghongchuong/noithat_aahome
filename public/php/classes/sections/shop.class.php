<?php

// List of single blog class
class Shop
{

    public $el;
    public $comment;
    public $wrapper;
    public $temp = 'shop.temp.html';         // edit temp name here *
    public $path = 'template/sections';          // edit path name here *


    public function __construct()
    {
        $this->wrapper = 'col-md-3 col-sm-6  ';
        $this->link = 'chi-tiet-sp.php';
        $this->shop_item = array(
            'img1',
            'img1',
            'img1',
            'img1',
            'img1',
            'img1',
            'img1',
            'img1',
        );

    }

    public function shop_item()
    {

        // fixed create html mockup
        $this->el = new XTemplate($this->temp, $this->path);

        // for element that have wrapper  and comment
        $this->el->assign('WRAPPER', $this->wrapper);
        $this->el->assign('LINK', $this->link);

        // scan all variables when using
        foreach ($this->shop_item as $key => $value) {

            // customize if need when more vars in html template *
            $this->el->assign('IMG', $value);

            // fixed loop
            $this->el->parse('shop_item');
        }

        // fixed out results
        echo $this->el->text('shop_item');

    }
}

