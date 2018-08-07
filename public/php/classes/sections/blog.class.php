<?php
// List of single blog class
class Blog_List{
    
    public $el;
    public $comment;
    public $wrapper;
    public $temp = 'blog-list.temp.html';         // edit temp name here *
    public $path = 'template/sections';          // edit path name here *
    
    public function render($args = array()){        
        
        // fixed create html mockup
        $this->el = new XTemplate($this->temp,$this->path);
        
        // for element that have wrapper  and comment 
        $this->el->assign('COMMENT',$this->comment);
        $this->el->assign('WRAPPER',$this->wrapper);
        
        // scan all variables when using
        foreach ($args as $key=>$value){

            // customize if need when more vars in html template *
            $this->el->assign('ID',$key);
            $this->el->assign('TYPE',$value[0]);
            $this->el->assign('SIZE',$value[1]);
            $this->el->assign('TEXT',$value[2]);
            
            // fixed loop
            $this->el->parse('main');
        }

        // fixed out results
        $this->el->parse('main');
        echo $this->el->text('main');
        
    }
    
}
