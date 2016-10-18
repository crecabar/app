<?php
/**
 * @file   Text.php
 * @author crecabarren
 * @date   18-10-2016
 * @time   8:42
 */
/**
 * Class Text
 * @package MEN\Lib\Form\Field
 * @author crecabarren
 */


namespace MEN\Lib\Form\Field;

use MEN\Lib\Form\Field;

class Text extends Field
{
    /**
     * @return string
     */
    public function display()
    {
        // TODO: Implement display() method.
        return '<input type="text" />';
    }

}