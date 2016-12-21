<?php

use Previewtechs\Phpie\Text\Text;

class TestTests extends PHPUnit_Framework_TestCase
{
    public function testSample()
    {/*
       $result =  Text::slug(     'ManHh dsd dssc    ', '+');
        var_dump($result);*/

        $result = \Cake\Utility\Inflector::tableize('tbl');
        var_dump($result);

    }

}