<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir 
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

// List of buttons class
class ProjectItem
{

    public $el;
    public $temp = 'project-item.temp.html';            // edit temp name here *
    public $path = 'template/sections';            // edit path name here *

    public function __construct()
    {
        $this->dataProjectListItem = array(
            ['data-design','4.3-single-project.php','img-1','CITY LIBRARY BOOKS','construction company','2015','john stone','Lorem Khaled Ipsum is a major key to success. Eliptical talk. You should never complain, complaining is a weak emotion, you got life, we breathing, we blessed. Cloth talk. Celebrate success right, the only way, apple. Find peace, life is like a water fall, you’ve gotta flow. Look at the sunset, life is amazing, life is beautiful, life is what you make it. Stay focused. Let me be clear, you have to make it through the jungle to make it to paradise, that’s the key,'],
            ['data-building','4.3-single-project.php','img-2','5-STAR HOTEL','construction company','2015','john stone','Lorem Khaled Ipsum is a major key to success. Eliptical talk. You should never complain, complaining is a weak emotion, you got life, we breathing, we blessed. Cloth talk. Celebrate success right, the only way, apple. Find peace, life is like a water fall, you’ve gotta flow. Look at the sunset, life is amazing, life is beautiful, life is what you make it. Stay focused. Let me be clear, you have to make it through the jungle to make it to paradise, that’s the key,'],
            ['data-furniture','4.3-single-project.php','img-3','OFFICE FURNITURE','construction company','2015','john stone','Lorem Khaled Ipsum is a major key to success. Eliptical talk. You should never complain, complaining is a weak emotion, you got life, we breathing, we blessed. Cloth talk. Celebrate success right, the only way, apple. Find peace, life is like a water fall, you’ve gotta flow. Look at the sunset, life is amazing, life is beautiful, life is what you make it. Stay focused. Let me be clear, you have to make it through the jungle to make it to paradise, that’s the key,'],
            ['data-consultant','4.3-single-project.php','img-4','ART MUSEUM','construction company','2015','john stone','Lorem Khaled Ipsum is a major key to success. Eliptical talk. You should never complain, complaining is a weak emotion, you got life, we breathing, we blessed. Cloth talk. Celebrate success right, the only way, apple. Find peace, life is like a water fall, you’ve gotta flow. Look at the sunset, life is amazing, life is beautiful, life is what you make it. Stay focused. Let me be clear, you have to make it through the jungle to make it to paradise, that’s the key,'],
            ['data-consultant','4.3-single-project.php','img-5','CABLE-STAYED BRIDGE','construction company','2015','john stone','Lorem Khaled Ipsum is a major key to success. Eliptical talk. You should never complain, complaining is a weak emotion, you got life, we breathing, we blessed. Cloth talk. Celebrate success right, the only way, apple. Find peace, life is like a water fall, you’ve gotta flow. Look at the sunset, life is amazing, life is beautiful, life is what you make it. Stay focused. Let me be clear, you have to make it through the jungle to make it to paradise, that’s the key,'],
            ['data-design','4.3-single-project.php','img-6','INTERIOR DESIGN','construction company','2015','john stone','Lorem Khaled Ipsum is a major key to success. Eliptical talk. You should never complain, complaining is a weak emotion, you got life, we breathing, we blessed. Cloth talk. Celebrate success right, the only way, apple. Find peace, life is like a water fall, you’ve gotta flow. Look at the sunset, life is amazing, life is beautiful, life is what you make it. Stay focused. Let me be clear, you have to make it through the jungle to make it to paradise, that’s the key,'],
        );
        $this->dataProjectGridItem = array(
            ['data-design','4.3-single-project.php','img-1','CITY LIBRARY BOOKS','construction company'],
            ['data-building','4.3-single-project.php','img-2','5-STAR HOTEL','construction company'],
            ['data-furniture','4.3-single-project.php','img-3','OFFICE FURNITURE','construction company'],
            ['data-consultant','4.3-single-project.php','img-4','ART MUSEUM','construction company'],
            ['data-consultant','4.3-single-project.php','img-5','CABLE-STAYED BRIDGE','construction company'],
            ['data-design','4.3-single-project.php','img-6','INTERIOR DESIGN','construction company'],
            ['data-design','4.3-single-project.php','img-7','OFFICE FURNITURE','construction company'],
            ['data-building','4.3-single-project.php','img-8','CABLE-STAYED BRIDGE','construction company'],
            ['data-furniture','4.3-single-project.php','img-9','CITY LIBRARY BOOKS','construction company'],
        );
        $this->dataProjectSlideShow = array(
            ['img-1','img-2','img-3','img-4','img-5','img-6'],
            ['img-thumb-1','img-thumb-2','img-thumb-3','img-thumb-4','img-thumb-5','img-thumb-6',]
        );
    }

    public function project_list_item()
    {

        $this->el = new XTemplate($this->temp, $this->path);

        foreach ($this->dataProjectListItem as $value){
            $this->el->assign('DATA_FILTER', $value[0]);
            $this->el->assign('LINK', $value[1]);
            $this->el->assign('IMG',$value[2]);
            $this->el->assign('TITLE', $value[3]);
            $this->el->assign('CLIENT', $value[4]);
            $this->el->assign('YEAR', $value[5]);
            $this->el->assign('LEADER', $value[6]);
            $this->el->assign('CONTENT', $value[7]);

            $this->el->parse('list_item');
        }

        echo $this->el->text('list_item');

    }

    public function project_grid_item()
    {

        $this->el = new XTemplate($this->temp, $this->path);

        foreach ($this->dataProjectGridItem as $value){
            $this->el->assign('DATA_FILTER', $value[0]);
            $this->el->assign('LINK', $value[1]);
            $this->el->assign('IMG',$value[2]);
            $this->el->assign('TITLE', $value[3]);

            $this->el->parse('grid_item');
        }

        echo $this->el->text('grid_item');

    }

    public function slide_show()
    {

        $this->el = new XTemplate($this->temp, $this->path);

        foreach ($this->dataProjectSlideShow as $key => $value){

            if ($key == 0){
                for ($i = 0 ; $i < count($value); $i++){
                    $this->el->assign('IMG', $value[$i]);
                    $this->el->parse('slide_show.slide_for');
                }

            }
            if ($key == 1){
                for ($i = 0 ; $i < count($value); $i++){
                    $this->el->assign('IMG_THUMBNAIL', $value[$i]);
                    $this->el->parse('slide_show.slide_nav');
                }
            }

        }
        $this->el->parse('slide_show');
        echo $this->el->text('slide_show');

    }
}
