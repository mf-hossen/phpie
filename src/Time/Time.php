<?php
namespace Previewtechs\Phpie\Time;

use Carbon\Carbon;
use Symfony\Component\Translation\TranslatorInterface;
use Cake\Chronos\Chronos;

class Time
{
    /**
     * get a current date time.....
     * @param null $timeZone
     * @return static
     */
    public static function now($timeZone = NULL)
    {
        return Carbon::now($timeZone);
    }

    /**
     * Create a new date time  use this function. if any param null, now() values will be use.
     * @param null $year
     * @param null $month
     * @param null $day
     * @param null $hour
     * @param null $minute
     * @param null $second
     * @param null $tz
     * @return static
     */
    public static function create($year = null, $month = null, $day = null, $hour = null, $minute = null, $second = null, $tz = null)
    {
        return Carbon::create($year, $month, $day, $hour, $minute, $second, $tz);
    }


    /**
     * Set weekend days..
     * @param $days
     */
    public static function setWeekendDays($days)
    {
        return Carbon::setWeekendDays($days);
    }

    /**
     * get weekend days
     * @return array
     */
    public static function getWeekendDays()
    {
        return Carbon::getWeekendDays();
    }

    /**
     * To set  first day of a week use this method. param value must int.
     *  for SUNDAY =  0
     *  for MONDAY =  1
     *  for TUESDAY =  2
     *  for WEDNESDAY = 3
     *  for THURSDAY =  4
     *  for FRIDAY =  5
     *  for SATURDAY = 6
     *
     * if you don't set a value by default set Monday.
     * @param $day
     */
    public static function setFirstDayOfWeek($day)
    {
        return Carbon::setWeekStartsAt($day);
    }

    /**
     * return the first day of a week . its return from carbon library .
     * @return int
     */
    public static function getFirstDayOfWeek()
    {
        return Carbon::getWeekStartsAt();
    }

    /**
     *   To set  last day of a week use this method. param value must int.
     *  for SUNDAY =  0
     *  for MONDAY =  1
     *  for TUESDAY =  2
     *  for WEDNESDAY = 3
     *  for THURSDAY =  4
     *  for FRIDAY =  5
     *  for SATURDAY = 6
     *
     * if you don't set a value by default set Sunday.
     * @param $day
     */
    public static function setLastDayOfWeek($day)
    {
        return Carbon::setWeekEndsAt($day);
    }

    /**
     * @return int
     */
    public static function getLastDayOfWeek()
    {
        return Carbon::getWeekEndsAt();
    }

    /**
     * set current locale
     * @param $locale
     */
    public static function setLocale($locale)
    {
        return Carbon::setLocale($locale);
    }

    /**
     * return locale from carbon class. by default 'en'
     * @return string
     */
    public static function getLocale()
    {
        return Carbon::getLocale();
    }

    /**
     * return today date from carbon instance.
     * @return static
     */
    public static function today($tz = NULL)
    {
        return Carbon::today($tz);
    }

    /**
     * get yesterday date time....
     * @param null $tz
     * @return static
     */
    public static function yesterday($tz = NULL)
    {
        return Carbon::yesterday($tz);
    }


    /**
     * return parse date. it return next and previous date
     * Time::dateParse(' next Friday').
     * Time::dateParse(' previous Friday').
     * Time::dateParse(' 'Monday next week'').
     * The list of words that are considered to be relative modifiers are:
     *   this
     *   next
     *   last
     *   tomorrow
     *   yesterday
     *   +
     *   -
     *   first
     *   last
     *   ago
     * @param null $time
     * @param null $tz
     * @return static
     */
    public static function dateParse($time = null, $tz = null)
    {
        return Carbon::parse($time, $tz);
    }
}