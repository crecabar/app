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
 * @file   frontend.php
 * @author crecabarren
 * @date   14-10-2016
 * @time   11:13
 */
//Get the current configuration manager
require(dirname(__FILE__) . "/../config/ConfigManager.php");

use MEN\Config\ConfigManager;

// Get the current config manager
$CM = ConfigManager::getInstance();
var_dump($CM);

$server = \MEN\Lib\Vendor\ASmall\ASmall\Server::getInstance();
var_dump($server);

//Inject the current configuration to the application manager.
$application = new \MEN\Lib\Vendor\ASmall\ASmall();
$application->load();
