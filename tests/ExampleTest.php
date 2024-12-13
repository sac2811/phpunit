<?php

require 'wp-content/plugins/capgemini-utility-functions/src/PostUtility.php';

class ExampleTest extends PHPUnit\Framework\TestCase
{
    public function testTrue()
    {
        $this->assertTrue(true);
    }

    public function testPostYears()
    {
        $postUtility = new PostUtility();
        $postYears = $postUtility->posts_years('post');
        $this->assertIsArray($postYears);
        $this->assertNotEmpty($postYears);
    }
}