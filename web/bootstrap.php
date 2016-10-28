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
 * @file   bootstrap.php
 * @author crecabarren
 * @date   28-10-2016
 * @time   15:20
 */

//Get the current autoloader and sets the base namespaces.
require_once dirname(__FILE__) . "/../config/Psr4AutoLoaderClass.php";
$loader = new \MEN\Config\Psr4AutoLoaderClass();
$loader->register();
$loader->addNamespace('MEN', __DIR__ . '/');
$loader->addNamespace('MEN\App', __DIR__ . '/../app');
$loader->addNamespace('MEN\Config', __DIR__ . '/../config');
$loader->addNamespace('MEN\Lib', __DIR__ . '/../lib');

$exceptionHandler = new \MEN\Lib\Vendor\ASmall\ASmall\ErrorExceptionHandler();

