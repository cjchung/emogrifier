<?php

namespace Pelago\Tests\Unit\Emogrifier\HtmlProcessor;

use Pelago\Emogrifier\HtmlProcessor\AbstractHtmlProcessor;
use Pelago\Emogrifier\HtmlProcessor\CssToAttributeConverter;

/**
 * Test case.
 *
 * @author Oliver Klee <github@oliverklee.de>
 */
class CssToAttributeConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function classIsAbstractHtmlProcessor()
    {
        static::assertInstanceOf(AbstractHtmlProcessor::class, new CssToAttributeConverter('<html></html>'));
    }
}
