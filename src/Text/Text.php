<?php

namespace Previewtechs\Phpie\Text;

class Text
{
    /**
     * @param $value
     * @param $limit
     * @param string $end
     * @return string
     */
    public static function excerpt($value, $limit, $end = '...')
    {
        if (mb_strwidth($value, 'UTF-8') <= $limit) {
            return $value;
        }
        return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')) . $end;
    }

    /**
     * @param $value
     * @param $needles
     * @return bool
     */
    public static function contains($value, $needles)
    {
        foreach ((array)$needles as $needle) {
            if ($needle != '' && mb_strpos($value, $needle) !== false) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param $value
     * @param string $delimiter
     * @return string
     */
    public static function slug($value, $delimiter = '_')
    {
        $explodeValue = explode(' ', $value);
        return join($delimiter, $explodeValue);
    }

    /**
     * @param $length
     * @return string
     */
    public static function random($length)
    {
        return random_bytes($length);
    }

    /**
     * @param $string
     * @param $word
     * @return string
     */
    public static function removeWord($string, $word)
    {
        $manipulateStr = strtolower($string);
        $manipulateWord = strtolower($word);
        $explodeValue = explode($manipulateWord, $manipulateStr);
        return implode('', $explodeValue);
    }

    /**
     * @param $value
     * @return string
     */
    public static function camel($value)
    {
        $manipulateStr = str_replace(['-', '_', '.'], ' ', $value);
        return lcfirst(join('', explode(' ', ucwords($manipulateStr))));
    }

    /**
     * @param $value
     * @return mixed
     */
    public static function humanize($value)
    {
        return $manipulateStr = str_replace(['-', '_', '.'], ' ', $value);
    }
}