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
 * @file   Request.php
 * @author crecabarren
 * @date   20-10-2016
 * @time   8:28
 */
/**
 * Class Request
 * @package MEN\lib\vendor\asmall\ASmall
 * @author crecabarren
 */


namespace MEN\Lib\Vendor\ASmall\ASmall;

class Request
{
    private $params = array(); //TODO: Change it to = [] as soon as get PHP 5.6

    /**
     * Request constructor.
     * @param string $request
     */
    public function __construct($request = '')
    {
        if ($request != '') {
            $requestArray = explode("&", $request);
            foreach ($requestArray as $requestItem) {
                $requestItem = explode("=", $requestItem);
                $this->params[$requestItem[0]] = $requestItem[1];
                echo $requestItem[0] . " => " . $requestItem[1] . "<br/>";
            }
        }
    }
}