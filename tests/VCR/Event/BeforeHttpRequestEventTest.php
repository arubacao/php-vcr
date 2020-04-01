<?php

namespace VCR\Event;

use VCR\Request;

class BeforeHttpRequestEventTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var BeforeHttpRequestEvent
     */
    private $event;

    protected function setUp(): void
    {
        $this->event = new BeforeHttpRequestEvent(new Request('GET', 'http://example.com'));
    }

    public function testGetRequest()
    {
        $this->assertInstanceOf('VCR\Request', $this->event->getRequest());
    }
}
