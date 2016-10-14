<?php
/**
 * Copyright (C)
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 */

/**
 * @file   ConfigManager.php
 * @author crecabarren
 * @date   14-10-2016
 * @time   11:45
 */
/**
 * Class ConfigManager
 * @package ConfigManager
 * @author crecabarren
 */


namespace Config;

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
        require_once 'Psr4AutoLoaderClass.php';
        $this->loader = new Psr4AutoLoaderClass();
        $this->loader->register();
        $this->loader->addNamespace('Lib', __DIR__ . '/../lib'); //TODO: this should be loaded here or in another place?
        $this->loader->addNamespace('App', __DIR__ . '/../app');
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
     * @param string $namespace
     * @param string $path
     * @return void
     */
    public function addNamespace($namespace, $path)
    {
        $this->loader->addNamespace($namespace, $path);
    }

    /**
     * @return void
     */
    private function parseIni()
    {
        foreach (parse_ini_file('config.ini') as $key => $value) {
            $this->$key = $value;
        }
    }
}