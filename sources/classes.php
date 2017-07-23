<?php
/**
 *
 * @file          classes.php
 * @author        Nils Laumaillé
 * @version       2.1.27
 * @copyright     (c) 2009-2017 Nils Laumaillé
 * @licensing     GNU AFFERO GPL 3.0
 * @link          http://www.teampass.net
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

class superGlobal
{
    public static function put($key, $value, $type)
    {
        if ($type === "SESSION") {
            $_SESSION[$key] = $value;
        } elseif ($type === "SERVER") {
            $_SERVER[$key] = $value;
        }
    }

    public static function get($key, $type)
    {
        if ($type === "SESSION") {
            return (isset($_SESSION[$key]) ? $_SESSION[$key] : null);
        } elseif ($type === "SERVER") {
            return (isset($_SERVER[$key]) ? $_SERVER[$key] : null);
        }
    }

    public static function forget($key, $type)
    {
        if ($type === "SESSION") {
            unset($_SESSION[$key]);
        } elseif ($type === "SERVER") {
            unset($_SERVER[$key]);
        }
    }
}
