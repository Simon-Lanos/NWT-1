<?php
/**
 * Created by PhpStorm.
 * User: MARCALBANMILLET
 * Date: 11/04/2018
 * Time: 15:19
 */

class Log
{
    public static function logWrite($data)
    {
        $directory = "/logs/";
        $file = date('Y-m-d') . ".log";
        $path = dirname(__DIR__) . $directory . $file;
        $data = date('H:i:s') . " " . $data;
        $handle = fopen($path, "a");
        if (flock($handle, LOCK_EX)) {
            fwrite($handle, $data . PHP_EOL);
            flock($handle, LOCK_UN);
        }
        fclose($handle);
    }
}