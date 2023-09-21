<?php

use PHPUnit\Framework\TestCase;
require_once('./functions.php');

class MathsTests extends TestCase {
    public function testAdd()
    {
        $result = add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSubtract()
    {
        $result = subtract(5, 3);
        $this->assertEquals(2, $result);
    }
}

?>