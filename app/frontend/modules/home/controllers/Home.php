<?php
/**
 * @file   Home.php
 * @author crecabarren
 * @date   18-10-2016
 * @time   8:49
 */
/**
 * Class Home
 * @package MEN\App\Frontend\Modules\Home
 * @author crecabarren
 */


namespace MEN\App\Frontend\Modules\Home\Controllers;

use MEN\Lib\Form\Field\Text;

class Home
{
    public function actionHome()
    {
        $text = new Text();
        echo "Hello world!<br/>".$text->display();
    }
}