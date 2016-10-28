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
 * @file   Core.php
 * @author crecabarren
 * @date   20-10-2016
 * @time   8:27
 */
/**
 * Class Core
 * @package MEN\lib\vendor\asmall\ASmall
 * @author crecabarren
 */


namespace MEN\Lib\Vendor\ASmall\ASmall;

use MEN\Config\ConfigManager;

class Core
{
    /**
     * @var Server Contains an instance of the current server.
     */
    private $server;

    /**
     * @var ConfigManager Contains an instance of the current Configuration Manager
     */
    private $configurationManager;

    /**
     * Core constructor.
     */
    public function __construct()
    {
        $this->server = Server::getInstance();
        $this->configurationManager = ConfigManager::getInstance();
        $request = new Request(
            strlen($this->server->QueryString) > 0 ? $this->server->QueryString : 'app=frontend&module=home&action=home'
        );
        var_dump($request);
    }

    /**
     * It loads the required application and controller
     *
     * @return mixed
     */
    public function load()
    {

    }
}