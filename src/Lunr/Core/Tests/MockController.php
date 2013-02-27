<?php

/**
 * This file contains a Mock class for Lunr's Controller Class
 * used by the Unit tests.
 *
 * PHP Version 5.4
 *
 * @category   Libraries
 * @package    Core
 * @subpackage Mocks
 * @author     Heinz Wiesinger <heinz@m2mobi.com>
 * @copyright  2013, M2Mobi BV, Amsterdam, The Netherlands
 * @license    http://lunr.nl/LICENSE MIT License
 */

namespace Lunr\Core\Tests;

use Lunr\Core\Controller;

/**
 * View Mock class
 *
 * @category   Libraries
 * @package    Core
 * @subpackage Mocks
 * @author     Heinz Wiesinger <heinz@m2mobi.com>
 */
class MockController extends Controller
{

    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct(NULL);
    }

    /**
     * Destructor.
     */
    public function __destruct()
    {
        parent::__destruct();
    }

    /**
     * Mock method that does nothing.
     */
    public function foo()
    {
        // do nothing
    }

    /**
     * Mock static method that does nothing.
     */
    public static function bar()
    {
        // do nothing
    }

}

?>
