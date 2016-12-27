<?php
namespace Previewtechs\Phpie\Time;

use Previewtechs\Phpie\Text\Text;

class TimeTests extends \PHPUnit_Framework_TestCase
{
    public function testCurrentTimeReturnOrNot()
    {
        $this->assertEquals(date("Y-m-d"), Time::now()->toDateString());
    }

    public function testCreateTimeDateValidOrNot()
    {
        $time = Time::create(2017, 4, 29, 5, 02, 00, 'Asia/Dacca');
        $this->assertEquals('2017-04-29 05:02:00', $time->toDateTimeString());
    }

    public function testSetWeekendDaysAndGetWeekendDaysEqualOrNoNot()
    {
        Time::setWeekendDays(6);
        $this->assertEquals(2, is_int(Time::getWeekendDays()));
    }

    public function testFirstDayOfWeekSetAndGetIsWorkingAndAreTheyEqualOrNot()
    {
        Time::setFirstDayOfWeek(0);
        $this->assertEquals(0, Time::getFirstDayOfWeek());
    }

    public function testLastDayOfWeekSetAndGetIsWorkingAndAreTheyEqualOrNot()
    {
        Time::setLastDayOfWeek(4);
        $this->assertEquals(4, Time::getLastDayOfWeek());
    }

    public function testSetLocalAndGetLocaleMatchOrNot()
    {
        Time::setLocale('bn');
        $this->assertEquals('bn', Time::getLocale());
    }

    public function testTodayDateIsMatchWithGivenDateOrNot()
    {
        $this->assertEquals(date("Y-m-d"), Time::today()->toDateString());
    }

    public function testYesterdayDateIsMatchWithGivenDateOrNot()
    {
        $this->assertEquals(date("Y-m-d", strtotime("-1 days")), Time::yesterday()->toDateString());
    }

    public function testDateParseReturndateCurrectOrWrong()
    {
        $result = Time::dateParse('Next Friday')->toDateString();
        $this->assertEquals('2016-12-30', $result);
    }
}