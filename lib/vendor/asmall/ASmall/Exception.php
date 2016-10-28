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
 * @file   Exception.php
 * @author crecabarren
 * @date   28-10-2016
 * @time   12:53
 */
/**
 * Class Exception
 * @package MEN\lib\vendor\asmall\ASmall
 * @author crecabarren
 */


namespace MEN\Lib\Vendor\ASmall\ASmall;

class Exception
{
    public function __construct()
    {
        set_error_handler(array($this, 'handler'));
    }

    public function handler($err_severity, $err_msg, $err_file, $err_line, array $err_context)
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
                throw new Exception\WarningException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_PARSE:
                throw new Exception\ParseException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_NOTICE:
                throw new Exception\NoticeException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_CORE_ERROR:
                throw new Exception\CoreErrorException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_CORE_WARNING:
                throw new Exception\CoreWarningException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_COMPILE_ERROR:
                throw new Exception\CompileErrorException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_COMPILE_WARNING:
                throw new Exception\CoreWarningException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_USER_ERROR:
                throw new Exception\UserErrorException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_USER_WARNING:
                throw new Exception\UserWarningException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_USER_NOTICE:
                throw new Exception\UserNoticeException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_STRICT:
                throw new Exception\StrictException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_RECOVERABLE_ERROR:
                throw new Exception\RecoverableErrorException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_DEPRECATED:
                throw new Exception\DeprecatedException($err_msg, 0, $err_severity, $err_file, $err_line);
            case E_USER_DEPRECATED:
                throw new Exception\UserDeprecatedException($err_msg, 0, $err_severity, $err_file, $err_line);
        }
    }
}
