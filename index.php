<?php
// PHP 版本必须大于 7
$minPHPVersion = 7;
if (phpversion() < $minPHPVersion) {
    die("您的 PHP 版本必须为 {$minPHPVersion} 或更高版本。当前版本：" . phpversion());
}
unset($minPHPVersion);

// 定义根目录
define('BASEPATH', __DIR__ . DIRECTORY_SEPARATOR);

// 加载框架
include 'BASEPATH' . 'includes/bootstrap.php';
