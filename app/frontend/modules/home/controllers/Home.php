<?php
/**
 * Copyright (C) 2016 crecabarren
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301
 * USA
 */

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

use MEN\Lib\Vendor\ASmall\ASmall\Form\Field\Text;

class Home
{
    public function actionHome()
    {
        $text = new Text();
        echo "Hello world!<br/>".$text->display();
    }
}