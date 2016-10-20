<?php
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