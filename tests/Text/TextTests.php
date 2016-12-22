<?php
use Previewtechs\Phpie\Text\Text;

class TextTests extends PHPUnit_Framework_TestCase
{
    public function testExcerptStringReturnALimitCharacterWithGivenEllipsis()
    {
        $result = Text::excerpt('hello world', 0, 4, '---');
        $this->assertEquals('hello---', $result);

    }

    public function testSlugStringIfFoundSpaceConvertWithGivenDelimiterOrNot()
    {
        $result = Text::slug('I am a programmer', '-');
        $this->assertEquals('I-am-a-programmer', $result);
    }

    public function testStringAfterRemovedGivenWordExitsOrNot()
    {
        $result = Text::removeWord('PHP is a programming language and I love php ', 'php');
        $this->assertEquals('is a programming language and i love', $result);
    }

    public function testReturnStringCamelCaseOrNot()
    {
        $result = Text::camel('hello-world', '-');
        $this->assertEquals("HelloWorld", $result);
        $this->assertNotEquals('helloworld', $result);
    }

    public function testSnakeReturnStringCamelToReverseWithGivenDelimiter()
    {
        $result = Text::snake('helloWorld', '_');
        $this->assertEquals('hello_world', $result);
    }

    public function testPluralWordReturnFronSingularWord()
    {
        $result = Text::plural('Man');
        $this->assertEquals('Men', $result);
    }

    public function testSingularWordReturnFromPluralWord()
    {
        $result = Text::singular('Men');
        $this->assertEquals('Man', $result);
    }

    public function testHumanizeStringExistsUnderscore()
    {
        $result = Text::humanize('hello_world');
        $this->assertEquals('Hello World', $result);
    }

    public function testClassifiedTableNameReturnOrNot()
    {
        $result = Text::classify('users contact list');
        $this->assertEquals('UsersContactList', $result);
    }

    public function testUuidReturnNotNullAndLengthMust36Character()
    {
        $uuID = Text::uuid();
        var_dump($uuID);
        $this->assertNotNull($uuID);
        $this->assertEquals(36, strlen($uuID));
    }

    public function testStringWordIsExistsOrNotAfterInserted()
    {
        $result = Text::insert('My name is :name and I am :age years old',
            ['name' => 'Farhad', 'age' => '65']);
        $this->assertEquals('My name is Farhad and I am 65 years old', $result);
    }

    public function testWordBreakAfterWrap()
    {
        $result = Text::wrap('I am a programmer', 6);
        $testString = 'I am a' . "\n" . 'programmer';
        $this->assertEquals($testString, $result);
    }
}