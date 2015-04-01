<?php
namespace SlackWebhook;

class SlackWebhookTest extends \PHPUnit_Framework_TestCase {

    public function test_post()
    {
        $url = "put your webhook url here";
        $slack = new SlackWebhook($url);
        $slack->post("test");
    }
}
