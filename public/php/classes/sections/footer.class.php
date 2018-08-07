<?php
// STEP 2 - CREATE CLASS (IF NOT HAVE) IN classes dir
// IF HAVED NEXT TO STEP 3
// JUST COPY AND EDIT PLACE WITH * SIGN

class Footer
{

    public $el;
    public $temp = 'footer.temp.html';            // edit temp name here *
    public $path = 'template/sections';            // edit path name here *
    public $dataColumn_1;
    public $dataColumn_2;
    public $dataColumn_3;
    public $dataColumn_4;

    //init default data footer
    function __construct()
    {
        //column 1
        //[HEADING, CONTENT, array([LINK, ICON_CLASS])]

        $this->dataColumn_1 = array([
            '<span class="vk-text-color-yellow-1">About</span> Company',
            'Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears, and I’m never giving up, I’m just getting started.',
            array(
                ['#', 'fa-facebook'],
                ['#', 'fa-twitter'],
                ['#', 'fa-google-plus'],
                ['#', 'fa-skype'],
                ['#', 'fa-youtube-play'],
                ['#', 'fa-pinterest-p'],
            ),
        ]);

        //column 2
        //[HEADING => array([LINK, TEXT])]

        $this->dataColumn_2 = array(
            'Quick link' => array(
                ['2.1-about-page.php', 'About us'],
                ['3.1-consultant-service.php', 'Services'],
                ['2.2-testimonial-page.php', 'Testimonials'],
                ['4.1-project-list.php', 'Project'],
                ['2.4-faq-page.php', 'FAQ\'s'],
                ['2.5-career-page.php', 'Careers'],
                ['2.6-contact-page.php', 'Contact us'],
            ),
        );

        //column 3
        //[HEADING => array( array([[CLASS_ICON, TEXT]) )]

        $this->dataColumn_3 = array(
            'Offices' => array(
                array(
                    ['fa-map', 'Freedom Township, MO, USA'],
                    ['fa-envelope', '<a href="mailto:email1@domain.com">email1@domain.com</a>'],
                    ['fa-phone', '(122) 649 576 487'],
                ),
                array(
                    ['fa-map', 'Somerset County, PA, USA'],
                    ['fa-envelope', '<a href="mailto:email2@domain.com">email2@domain.com</a>'],
                    ['fa-phone', '(122) 649 576 488'],
                )
            ),
        );

        //column 4
        //[HEADING => array( array([[CLASS_ICON, TEXT]) )]
        $this->dataColumn_4 = array(
            'Latest works' => array(
                ['5.3-single-blog.php', 'footer-1'],
                ['5.3-single-blog.php', 'footer-2'],
                ['5.3-single-blog.php', 'footer-3'],
                ['5.3-single-blog.php', 'footer-4'],
                ['5.3-single-blog.php', 'footer-5'],
                ['5.3-single-blog.php', 'footer-6'],
                ['5.3-single-blog.php', 'footer-7'],
                ['5.3-single-blog.php', 'footer-8'],
                ['5.3-single-blog.php', 'footer-9'],
            ),
        );
    }

    function __destruct()
    {
    }

    public function render()
    {

        $this->el = new XTemplate($this->temp, $this->path);

        //column 1
        foreach ($this->dataColumn_1 as $value) {
            $this->el->assign('HEADING_1', $value[0]);
            $this->el->assign('CONTENT_ABOUT', $value[1]);
            foreach ($value[2] as $item) {
                $this->el->assign('LINK_SOCIAL', $item[0]);
                $this->el->assign('ICON_CLASS_SOCIAL', $item[1]);

                $this->el->parse('main.column_1.loop');
            }

            $this->el->parse('main.column_1');

        }

//column 2
        foreach ($this->dataColumn_2 as $key => $value) {
            $this->el->assign('HEADING_2', $key);
            foreach ($value as $item) {
                $this->el->assign('LINK_QUICK', $item[0]);
                $this->el->assign('TEXT_QUICK_LINK', $item[1]);

                $this->el->parse('main.column_2.loop');
            }

            $this->el->parse('main.column_2');
        }

//column 3
        foreach ($this->dataColumn_3 as $key => $value) {
            $this->el->assign('HEADING_3', $key);

            foreach ($value as $array) {

                foreach ($array as $item) {
                    $this->el->assign('ICON_CLASS_OFFICE', $item[0]);
                    $this->el->assign('TEXT_OFFICE', $item[1]);

                    $this->el->parse('main.column_3.loop_1.loop_2');
                }

                $this->el->parse('main.column_3.loop_1');
            }

            $this->el->parse('main.column_3');
        }

//column 4
        foreach ($this->dataColumn_4 as $key => $value) {
            $this->el->assign('HEADING_4', $key);
            foreach ($value as $item) {
                $this->el->assign('IMG_LINK', $item[0]);
                $this->el->assign('IMG', $item[1]);

                $this->el->parse('main.column_4.loop');
            }

            $this->el->parse('main.column_4');
        }

        $this->el->parse('main');
        echo $this->el->text('main');

    }

}