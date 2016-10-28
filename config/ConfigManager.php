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
 * @file   ConfigManager.php
 * @author crecabarren
 * @date   14-10-2016
 * @time   11:45
 */
/**
 * Creates the basic configuration for all the application, creates the autoloader instance and register the available
 * namespaces.
 *
 * Class ConfigManager
 * @package  MEN\ConfigManager
 * @author crecabarren
 */


namespace MEN\Config;

class ConfigManager
{
    /**
     * @var $instance ConfigManager It represents the only one instance of the class.
     */
    private static $instance = null;

    /**
     * ConfigManager constructor.
     */
    private function __construct()
    {
        $this->parseIni();
    }

    /**
     * @return ConfigManager
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @param string $configFile
     */
    public function loadConfig($configFile)
    {
        if (file_exists($configFile)) {
            $this->parseIni($configFile);
        }
    }

    /**
     * @param string $configFile
     * @return void
     */
    private function parseIni($configFile = 'config.ini')
    {
        foreach (parse_ini_file($configFile, true) as $key => $value) {
            $this->$key = $value;
        }
    }
}