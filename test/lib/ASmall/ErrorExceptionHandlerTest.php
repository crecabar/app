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
 * @file   ErrorExceptionHandlerTest.php
 * @author crecabarren
 * @date   28-10-2016
 * @time   16:01
 */
/**
 * Class ErrorExceptionHandlerTest
 * @package ClassTest
 * @author crecabarren
 */


namespace ClassTest;

use MEN\Lib\Vendor\ASmall\ASmall\Exception\CompileErrorException;
use MEN\Lib\Vendor\ASmall\ASmall\Exception\CoreErrorException;
use MEN\lib\vendor\asmall\ASmall\Exception\CoreWarningException;
use MEN\Lib\Vendor\ASmall\ASmall\Exception\DeprecatedException;
use MEN\Lib\Vendor\ASmall\ASmall\Exception\NoticeException;
use MEN\Lib\Vendor\ASmall\ASmall\Exception\ParseException;
use MEN\Lib\Vendor\ASmall\ASmall\Exception\RecoverableErrorException;
use MEN\Lib\Vendor\ASmall\ASmall\Exception\StrictException;
use MEN\Lib\Vendor\ASmall\ASmall\Exception\UserDeprecatedException;
use MEN\Lib\Vendor\ASmall\ASmall\Exception\UserErrorException;
use MEN\Lib\Vendor\ASmall\ASmall\Exception\UserNoticeException;
use MEN\Lib\Vendor\ASmall\ASmall\Exception\UserWarningException;
use MEN\lib\vendor\asmall\ASmall\Exception\WarningException;

class ErrorExceptionHandlerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \ErrorException
     */
    public function testErrorException()
    {
        include 'not_existing_file.php';
    }

    /**
     * @expectedException CompileErrorException
     */
    public function testCompileErrorException()
    {
        trigger_error("Compile error", E_COMPILE_ERROR);
    }

    /**
     * @expectedException CoreErrorException
     */
    public function testCoreErrorException()
    {
        trigger_error("Core error", E_CORE_ERROR);
    }

    /**
     * @expectedException CoreWarningException
     */
    public function testCoreWarningException()
    {
        trigger_error("Core warning", E_CORE_WARNING);
    }

    /**
     * @expectedException DeprecatedException
     */
    public function testDeprecatedException()
    {
        trigger_error("Deprecated", E_DEPRECATED);
    }

    /**
     * @expectedException NoticeException
     */
    public function testNoticeException()
    {
        trigger_error("Notice", E_NOTICE);
    }

    /**
     * @expectedException ParseException
     */
    public function testParseException()
    {
        trigger_error("Parse", E_PARSE);
    }

    /**
     * @expectedException RecoverableErrorException
     */
    public function testRecoverableErrorException()
    {
        trigger_error("Recoverable error", E_RECOVERABLE_ERROR);
    }

    /**
     * @expectedException StrictException
     */
    public function testStrictException()
    {
        trigger_error("Strict", E_STRICT);
    }

    /**
     * @expectedException UserDeprecatedException
     */
    public function testUserDeprecatedException()
    {
        trigger_error("Deprecated error", E_USER_DEPRECATED);
    }

    /**
     * @expectedException UserErrorException
     */
    public function testUserErrorException()
    {
        trigger_error("User error", E_USER_ERROR);
    }

    /**
     * @expectedException UserNoticeException
     */
    public function testUserNoticeException()
    {
        trigger_error("User notice", E_USER_NOTICE);
    }

    /**
     * @expectedException UserWarningException
     */
    public function testUserWarningException()
    {
        trigger_error("User warning", E_USER_WARNING);
    }

    /**
     * @expectedException WarningException
     */
    public function testWarningException()
    {
        trigger_error("Warning", E_WARNING);
    }
}