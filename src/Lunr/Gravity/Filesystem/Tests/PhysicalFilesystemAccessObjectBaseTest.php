<?php

/**
 * This file contains the PhysicalFilesystemAccessObjectBaseTest class.
 *
 * PHP Version 5.4
 *
 * @category   Filesystem
 * @package    Gravity
 * @subpackage Filesystem
 * @author     Heinz Wiesinger <heinz@m2mobi.com>
 * @author     Andrea Nigido <andrea@m2mobi.com>
 * @copyright  2013, M2Mobi BV, Amsterdam, The Netherlands
 * @license    http://lunr.nl/LICENSE MIT License
 */

namespace Lunr\Gravity\Filesystem\Tests;

use Lunr\Gravity\Filesystem\PhysicalFilesystemAccessObject;

/**
 * This class contains base tests for the PhysicalFilesystemAccessObject.
 *
 * @category   Filesystem
 * @package    Gravity
 * @subpackage Filesystem
 * @author     Heinz Wiesinger <heinz@m2mobi.com>
 * @author     Andrea Nigido <andrea@m2mobi.com>
 * @covers     Lunr\Gravity\Filesystem\PhysicalFilesystemAccessObject
 */
class PhysicalFilesystemAccessObjectBaseTest extends PhysicalFilesystemAccessObjectTest
{

    /**
     * Test that the logger class is passed correctly.
     */
    public function testLoggerIsPassedCorrectly()
    {
        $this->assertPropertySame('logger', $this->logger);
    }

}

?>
