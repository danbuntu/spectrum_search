<?php

/* src/View/Helper/LinkHelper.php */
namespace App\View\Helper;

use App\Test\TestCase\Controller\PagesControllerTest;
use Cake\Core\Configure;
use Cake\View\Helper;
$picUrl = Configure::read('MyConf.picurl');

class LinkHelper extends Helper
{



public function makeImgWithLink($url, $id)
{

    $picUrl = Configure::read('MyConf.picurl');

// Logic to create specially formatted link goes here...
    echo '<a href="view/', $id, '">';
    echo '<img width="256" src="' , $picUrl , '/' . $url , '">';
    echo '</a>';
}

    public function makeAdditionals($url, $filename)
    {

//        get the filetype
$ftype = pathinfo($filename, PATHINFO_EXTENSION);

// Logic to create specially formatted link goes here...

        $images = array ('gif', 'jpg');
        $docs = array ('pdf', 'txt', 'pdf');

        if (in_array($ftype, $images)) {
            $this->img($url);
        } elseif (in_array($ftype, $docs)) {
            $this->link($url, $filename);

        }

    }




    public function makeMagazine($url) {
        $picUrl = Configure::read('MyConf.picurl');
        echo '<img width="256" src="' , $picUrl , '/' . $url , '">';
    }


    public function img($url) {
        $picUrl = Configure::read('MyConf.picurl');
        echo '<img width="256" src="' , $picUrl , '/' . $url , '">';
    }


    public function link($url, $filename) {
        $picUrl = Configure::read('MyConf.picurl');
        echo '<a target="_blank" href="' , $picUrl , '/' , $url , '">' , $filename , '</a>';
    }

}