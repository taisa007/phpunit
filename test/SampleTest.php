<?php

class SampleTest extends PHPUnit_Framework_TestCase {

    /** @test **/
    public function testPhp() {
        $text = 'sample';
        $result = 'sample';
        $this->assertThat($result, $this->equalTo($text));
    }

}
