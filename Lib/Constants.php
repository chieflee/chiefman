<?php
/**
 * This file is part of workerman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link      http://www.workerman.net/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

// Date.timezone
// 时区
if (!ini_get('date.timezone')) {
    date_default_timezone_set('Asia/Shanghai');
}
// Display errors.
// 显示 错误
ini_set('display_errors', 'on');
// Reporting all.
//报告错误
error_reporting(E_ALL);

// Reset opcache.
//重置op缓存
if (function_exists('opcache_reset')) {
    opcache_reset();
}

// For onError callback.
// 连接失败回调
define('WORKERMAN_CONNECT_FAIL', 1);
// For onError callback.
// 发生错误回调
define('WORKERMAN_SEND_FAIL', 2);

// Compatible with php7
//错误类 兼容php7
if(!class_exists('Error'))
{
    class Error extends Exception
    {
    }
}
