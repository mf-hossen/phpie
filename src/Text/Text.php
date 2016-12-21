<?php

namespace Previewtechs\Phpie\Text;

use Cake\Utility\Inflector;

class Text
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
     * return from cake php Text Utility
     * @param string $string
     * @param string $delimiter
     * @return string
     */
    public static function slug($string, $delimiter = '-')
    {
        return \Cake\Utility\Text::slug($string, $delimiter);
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
     * return camelize  form cake php inflector.
     * @param $string
     * @param string $delimiter
     * @return string
     */
    public static function camel($string, $delimiter = '_')
    {
        return Inflector::camelize($string, $delimiter);
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
     * return pluralize word from cake php inflector.
     * @param $word
     * @return string
     */
    public static function plural($word)
    {
        return Inflector::pluralize($word);
    }


    /**
     * return singularize  word from cake php inflector.
     * @param $word
     * @return string
     */
    public static function singular($word)
    {
        return Inflector::singularize($word);
    }


    /**
     * return humanize string from cake php inflector.
     * @param $string
     * @param string $delimiter
     * @return string
     */
    public static function humanize($string, $delimiter = '_')
    {
        return Inflector::humanize($string, $delimiter);
    }


    /**
     * return classified string form cake php inflector.
     * @param $tableNAme
     * @return string
     */
    public static function classify($string)
    {
        return Inflector::classify($string);
    }

    /**
     * return tableize  form cake php inflector
     * @param $className
     * @return string
     */
    public static function tableize($className)
    {
        return Inflector::tableize($className);
    }


    /**
     * return uuid from cake php Text Utility
     * @return string
     */
    public static function uuid()
    {
        return \Cake\Utility\Text::uuid();
    }

    /**
     * insert data into a string
     * @param $string
     * @param $data
     * @param array $options
     * @return string
     */
    public static function insert($string, $data, array $options = [])
    {
        return \Cake\Utility\Text::insert($string, $data, $options);
    }

    /**
     * return wrapper sstring from cake php  Text class
     * @param $string
     * @param array $options
     * @return string
     */
    public static function wrap($string, $options = [])
    {
        return \Cake\Utility\Text::wrap($string, $options);
    }
}