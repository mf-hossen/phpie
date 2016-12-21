<?php

namespace Previewtechs\Phpie\Text;

use Cake\Utility\Inflector;

class Text extends Inflector
{

    /**
     * @param $string
     * @param $limit
     * @param string $end
     * @return string
     */
    public static function excerpt($string, $limit, $end = '...')
    {
        if (mb_strwidth($string, 'UTF-8') <= $limit) {
            return $string;
        }
        return rtrim(mb_strimwidth($string, 0, $limit, '', 'UTF-8')) . $end;
    }

    /**
     * @param $value
     * @param $needles
     * @return bool
     */
    public static function contains($string, $needles)
    {
        foreach ((array)$needles as $needle) {
            if ($needle != '' && mb_strpos($string, $needle) !== false) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param string $string
     * @param string $delimiter
     * @return string
     */
    public static function slug($string, $delimiter = '-')
    {
        return Inflector::slug($string, $delimiter);
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
     * @return  return  camelcase to snack.
     */
    public static function snake($value)
    {
        preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $value, $matches);
        $ret = $matches[0];
        foreach ($ret as &$match) {
            $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
        }
        return implode('_', $ret);
    }

    /**
     * @return string
     */
    public static function uuid()
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            // 16 bits for "time_mid"
            mt_rand(0, 0xffff),
            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand(0, 0x0fff) | 0x4000,
            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand(0, 0x3fff) | 0x8000,
            // 48 bits for "node"
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff)
        );
    }

    /**
     * @return string
     */
    public static function uuid8()
    {
        return sprintf(
            '%04x%04x',
            // 32 bits for "time_low"
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            // 16 bits for "time_mid"
            mt_rand(0, 0xffff),
            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand(0, 0x0fff) | 0x4000,
            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand(0, 0x3fff) | 0x8000,
            // 48 bits for "node"
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff)
        );
    }

}