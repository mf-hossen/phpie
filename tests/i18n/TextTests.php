<?php
use Previewtechs\Phpie\Text\Text;

class TextTests extends PHPUnit_Framework_TestCase
{
    public function testExcerpt()
    {
        $result = Text::excerpt('hello world', 5);
        $this->assertEquals(mb_strlen($result), 8);
        $this->assertTrue(is_string($result));
    }

    public function testSlug()
    {
        $this->assertTrue(is_string(Text::slug('I am a programmer')));
    }

    public function testRemoveWord()
    {
        $this->assertTrue(is_string(Text::removeWord('PHP is a programming language and i love php ', 'php')));
    }

    public function testCamel()
    {
        $this->assertTrue(is_string(Text::camel('hello-world', '-')));
    }

    public function testSnake()
    {
        $this->assertTrue(is_string(Text::snake('helloWorld', '_')));
    }

    public function testPlural()
    {
        $this->assertTrue(is_string(Text::plural('table')));
    }

    public function testSingular()
    {
        $this->assertTrue(is_string(Text::singular('tables')));
    }

    public function testHumanize()
    {
        $this->assertTrue(is_string(Text::humanize('hello_world')));
    }

    public function testClassify()
    {
        $this->assertTrue(is_string(Text::classify('user list management')));
    }

    public function testTableize()
    {
        $this->assertTrue(is_string(Text::tableize('Test')));
    }

    public function testUuid()
    {
        $this->assertNotNull(Text::uuid());
    }

    public function testInsert()
    {
        $this->assertTrue(is_string(Text::insert('My name is :name and I am :age years old',
            ['name' => 'Farhad', 'age' => '65'])));
    }

    public function testWrap()
    {
        $this->assertTrue(is_string(Text::wrap('I am a programmer', 9)));
    }

}