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
 * @file   Server.php
 * @author crecabarren
 * @date   20-10-2016
 * @time   8:28
 */
/**
 * Class Server
 * @package MEN\lib\vendor\asmall\ASmall
 * @author crecabarren
 */


namespace MEN\Lib\Vendor\ASmall\ASmall;

class Server
{
    /**
     * Represents the only one instance of the Server class.
     * @var $instance \MEN\Lib\Vendor\ASmall\ASmall\Server
     */
    private static $instance = null;

    private function __construct()
    {
        foreach ($_SERVER as $key => $value) {
            $key = $this->toCamelCase($key);
            $this->$key = $value;
        }
    }

    /**
     * Returns the only one instance of the Server class.
     * @return \MEN\Lib\Vendor\ASmall\ASmall\Server
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Magic method to access dynamically added properties.
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    /**
     * It converts the given string in dashes and underscore format to camelCase format.
     *
     * TODO: this function should be a global object.
     * @param $string
     * @return mixed|string
     */
    private function toCamelCase($string)
    {
        $string = strtolower($string);
        $string = preg_replace_callback('/[-_](.?)/', function($matches) {
            return ucfirst($matches[1]);
        }, $string);
        $string = ucfirst($string);
        return $string;
    }
}