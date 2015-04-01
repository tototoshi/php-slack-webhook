<?php
namespace SlackWebhook;


class SlackWebhook
{

    private $webhook_url;

    function __construct($webhook_url)
    {
        $this->webhook_url = $webhook_url;
    }

    public function post($text)
    {
        $context = stream_context_create([
            'http' => [
                'method'  => 'POST',
                'header'  => 'Content-type: application/json; charset=UTF-8',
                'content' => json_encode([
                    'text' => $text,
                ])
            ]
        ]);
        file_get_contents($this->webhook_url, false, $context);
    }

}