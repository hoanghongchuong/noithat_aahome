<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir 
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

// List of buttons class
class ListItem
{

    public $el;
    public $temp = 'list-item.temp.html';            // edit temp name here *
    public $path = 'template/modules';            // edit path name here *

    public function __construct()
    {
        $title = 'Những cách thiết kế nội thất khiến ngôi nhà rộng rãi hơn';
        $content = 'Dưới đây là một số gợi ý giúp bạn thiết kế nội thất giúp ngôi nhà của mình trông sáng sủa, rộng rãi và thoáng mát hơn.';
        $this->blogItem__wrapper = 'col-lg-4 col-sm-6';
        $this->blogItem__link = 'blog-details.php';
        $this->blogItem__data = array(
            ['blog-1.jpg', $title, $content],
            ['blog-2.jpg', $title, $content],
            ['blog-3.jpg', $title, $content],

            ['blog-4.jpg', $title, $content],
            ['blog-5.jpg', $title, $content],
            ['blog-6.jpg', $title, $content],

            ['blog-7.jpg', $title, $content],
            ['blog-8.jpg', $title, $content],
            ['blog-9.jpg', $title, $content],
        );

        $title1 = 'Những cách thiết kế nội thất khiến ngôi nhà rộng rãi hơn';
        $content1 = 'Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp';
        $this->projectItem__wrapper = 'col-lg-3 col-sm-6 col-md-4';
        $this->projectItem__link = 'project-details.php';
        $this->projectItem__data = array(
            ['p-1.jpg', 'VP- Hoàng Quốc Việt', $content1],
            ['p-2.jpg', 'VP- Văn phòng Kaopiz', $content1],
            ['p-3.jpg', 'VP- Biệt thự Mr. Huy', $content1],
            ['p-4.jpg', 'Nhà hàng ẩm thực quê ta', $content1],

            ['p-5.jpg', 'VP- Hoàng Quốc Việt', $content1],
            ['p-6.jpg', 'VP- Văn phòng Kaopiz', $content1],
            ['p-7.jpg', 'VP- Biệt thự Mr. Huy', $content1],
            ['p-8.jpg', 'Nhà hàng ẩm thực quê ta', $content1],

            ['p-9.jpg', 'VP- Hoàng Quốc Việt', $content1],
            ['p-10.jpg', 'VP- Văn phòng Kaopiz', $content1],
            ['p-11.jpg', 'VP- Biệt thự Mr. Huy', $content1],
            ['p-12.jpg', 'Nhà hàng ẩm thực quê ta', $content1],

            ['p-13.jpg', 'VP- Hoàng Quốc Việt', $content1],
            ['p-14.jpg', 'VP- Văn phòng Kaopiz', $content1],
            ['p-15.jpg', 'VP- Biệt thự Mr. Huy', $content1],
            ['p-16.jpg', 'Nhà hàng ẩm thực quê ta', $content1],

            ['p-17.jpg', 'VP- Hoàng Quốc Việt', $content1],
            ['p-18.jpg', 'VP- Văn phòng Kaopiz', $content1],
        );

        $this->projectGalleryItem__wrapper = 'col-lg-4 col-sm-6';
        $this->projectGalleryItem__link = 'images/';
        $this->projectGalleryItem__data = array(
            ['p-detail-2.jpg'],
            ['p-detail-3.jpg'],
            ['p-detail-4.jpg'],

            ['p-detail-5.jpg'],
            ['p-detail-6.jpg'],
            ['p-detail-7.jpg'],

            ['p-detail-8.jpg'],
            ['p-detail-9.jpg'],
        );

        $this->serviceItem__wrapper = 'col-lg-3 col-sm-6';
        $this->serviceItem__link = '#';
        $this->serviceItem__data = array(
            ['icon-5.png', 'Nguồn nhân lực', 'Nguồn nhân lực với chuyên môn vững vàng, năng động và tâm huyết với sự phát triển của công ty.'],
            ['icon-6.png', 'Kinh nghiệm', 'Công ty chúng tôi có nhiều năm kinh nghiệm trong lĩnh vực thiết kế và thi công công trình và nội thất.'],
            ['icon-7.png', 'Công nghệ', 'Chúng tôi luôn luốn cập nhật và sử dụng những công nghệ tiên tiến và mới nhất.'],
            ['icon-8.png', 'Chuyên ngành', 'Nguồn nhân lực với chuyên môn vững vàng, năng động và tâm huyết với sự phát triển của công ty.'],
        );



        $this->serviceItem__link2 = 'project-details.php';
        $this->serviceItem__data2 = array(
            ['s1.jpg','col-lg-6','Thiết kế và thi công trọn gói','Hiện nay có rất nhiều nơi cung cấp dịch vụ này, chính vì thế mà bạn cần phải tìm hiểu thật kĩ trước khi quyết định, cần thống nhất về mặt chi phí, chất liệu với công ty thi công nội thất trọn gói trước khi thuê họ. '],
            ['s4.jpg','col-lg-6','Thiết kế kiến trúc và nội thất',0],
            ['s5.jpg','col-lg-6','Thiết Thiết kế nhà theo phong thủy','Hiện nay có rất nhiều nơi cung cấp dịch vụ này, chính vì thế mà bạn cần phải tìm hiểu thật kĩ trước khi quyết định, cần thống nhất về mặt chi phí, chất liệu với công ty thi công nội thất trọn gói trước khi thuê họ. '],
            ['s2.jpg','col-lg-3 _size','Thi công nội thất',0],
            ['s3.jpg','col-lg-3','Sửa chữa cải tạo',0],
        );

        $this->partnerItem__wrapper = 'col-lg-3 col-sm-6';
        $this->partnerItem__link = '#';
        $this->partnerItem__data = array(
            ['band-1.png', 'Công ty hiện kinh doanh trong các lĩnh vực tài chính, bất động sản và thương mại.'],
            ['band-2.png', 'Công ty hiện kinh doanh trong các lĩnh vực tài chính, bất động sản và thương mại.'],
            ['band-3.png', 'Công ty hiện kinh doanh trong các lĩnh vực tài chính, bất động sản và thương mại.'],
            ['band-4.png', 'Công ty hiện kinh doanh tband-1rong các lĩnh vực tài chính, bất động sản và thương mại.'],

            ['band-1.png', 'Công ty hiện kinh doanh trong các lĩnh vực tài chính, bất động sản và thương mại.'],
            ['band-2.png', 'Công ty hiện kinh doanh trong các lĩnh vực tài chính, bất động sản và thương mại.'],
            ['band-3.png', 'Công ty hiện kinh doanh trong các lĩnh vực tài chính, bất động sản và thương mại.'],
            ['band-4.png', 'Công ty hiện kinh doanh trong các lĩnh vực tài chính, bất động sản và thương mại.'],
        );
    }


    public function blogItem()
    {

        $this->el = new XTemplate($this->temp, $this->path);
        $this->el->assign('WRAPPER', $this->blogItem__wrapper);
        $this->el->assign('LINK', $this->blogItem__link);

        foreach ($this->blogItem__data as $value) {

            $this->el->assign('IMG', $value[0]);
            $this->el->assign('TITLE', $value[1]);
            $this->el->assign('TEXT', $value[2]);

            $this->el->parse('blog_item');
        }


        echo $this->el->text('blog_item');
    }

    public function project_item($class='vk-project-item--style-1')
    {

        $this->el = new XTemplate($this->temp, $this->path);
        $this->el->assign('WRAPPER', $this->projectItem__wrapper);
        $this->el->assign('LINK', $this->projectItem__link);
        $this->el->assign('CLASS', $class);

        foreach ($this->projectItem__data as $value) {

            $this->el->assign('IMG', $value[0]);
            $this->el->assign('TITLE', $value[1]);
            $this->el->assign('TEXT', $value[2]);

            $this->el->parse('project_item');
        }


        echo $this->el->text('project_item');
    }

    public function project_item_1($class='vk-project-item--style-2')
    {

        $this->el = new XTemplate($this->temp, $this->path);
        $this->el->assign('WRAPPER', $this->projectItem__wrapper);
        $this->el->assign('CLASS', $class);


        foreach ($this->projectItem__data as $key => $value) {

            $this->el->assign('ID', $key);
            $this->el->assign('IMG', $value[0]);
            $this->el->assign('LINK', 'images/' . $value[0]);
            $this->el->assign('TITLE', $value[1]);
            $this->el->assign('CAPTION', $value[2]);
            $this->el->assign('TEXT', $value[2]);
            $this->el->parse('project_item_1');
        }


        echo $this->el->text('project_item_1');
    }

    public function project_gallery_item()
    {

        $this->el = new XTemplate($this->temp, $this->path);
        $this->el->assign('WRAPPER', $this->projectGalleryItem__wrapper);

        foreach ($this->projectGalleryItem__data as $value) {

            $this->el->assign('IMG', $value[0]);
            $this->el->assign('LINK', $this->projectGalleryItem__link . $value[0]);

            $this->el->parse('project_gallery_item');
        }


        echo $this->el->text('project_gallery_item');
    }

    public function service_item($class='vk-service-item--style-1')
    {

        $this->el = new XTemplate($this->temp, $this->path);
        $this->el->assign('WRAPPER', $this->serviceItem__wrapper);
        $this->el->assign('CLASS', $class);

        foreach ($this->serviceItem__data as $value) {

            $this->el->assign('IMG', $value[0]);
            $this->el->assign('TITLE', $value[1]);
            $this->el->assign('TEXT', $value[2]);


            $this->el->parse('service_item');
        }


        echo $this->el->text('service_item');
    }

    public function service_item_2($class='vk-service-item--style-2')
    {

        $this->el = new XTemplate($this->temp, $this->path);
        $this->el->assign('LINK', $this->serviceItem__link2);
        $this->el->assign('CLASS', $class);

        foreach ($this->serviceItem__data2 as $value) {

            $this->el->assign('IMG', $value[0]);
            $this->el->assign('WRAPPER', $value[1]);
            $this->el->assign('TITLE', $value[2]);
            $this->el->assign('TEXT', $value[3]);
            if($value[3] !==0){
                $this->el->parse('service_item_2.text');
            }

            $this->el->parse('service_item_2');
        }


        echo $this->el->text('service_item_2');
    }

    public function partner_item()
    {

        $this->el = new XTemplate($this->temp, $this->path);
        $this->el->assign('WRAPPER', $this->partnerItem__wrapper);

        foreach ($this->partnerItem__data as $value) {

            $this->el->assign('IMG', $value[0]);
            $this->el->assign('TEXT', $value[1]);


            $this->el->parse('partner_item');
        }


        echo $this->el->text('partner_item');
    }

}
