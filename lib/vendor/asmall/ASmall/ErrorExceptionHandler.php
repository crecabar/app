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
 * @file   ErrorExceptionHandler.php
 * @author crecabarren
 * @date   28-10-2016
 * @time   12:53
 */
/**
 * Class ErrorExceptionHandler
 * @package MEN\Lib\Vendor\ASmall\ASmall
 * @author crecabarren
 */


namespace MEN\Lib\Vendor\ASmall\ASmall;

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

class ErrorExceptionHandler
{
    public function __construct()
    {
        set_error_handler(array($this, 'handler'));
    }

    public function handler($err_severity, $err_msg, $err_file, $err_line)
    {
        // error was suppressed with the @-operator
        if (0 === error_reporting()) {
            return false;
        }
        switch($err_severity)
        {
            case E_ERROR:
                throw new \ErrorException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_WARNING:
                throw new WarningException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_PARSE:
                throw new ParseException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_NOTICE:
                throw new NoticeException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_CORE_ERROR:
                throw new CoreErrorException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_CORE_WARNING:
                throw new CoreWarningException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_COMPILE_ERROR:
                throw new CompileErrorException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_COMPILE_WARNING:
                throw new CoreWarningException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_USER_ERROR:
                throw new UserErrorException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_USER_WARNING:
                throw new UserWarningException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_USER_NOTICE:
                throw new UserNoticeException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_STRICT:
                throw new StrictException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_RECOVERABLE_ERROR:
                throw new RecoverableErrorException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_DEPRECATED:
                throw new DeprecatedException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_USER_DEPRECATED:
                throw new UserDeprecatedException($err_msg, 0, $err_severity, $err_file, $err_line);
        }
    }
}
