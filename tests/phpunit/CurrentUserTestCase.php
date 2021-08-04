<?php

declare(strict_types=1);

/**
 * This file is part of vfsStream.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace bovigo\vfs\tests;

use bovigo\vfs\vfsStream;
use PHPUnit\Framework\TestCase;

use function bovigo\assert\assertFalse;
use function bovigo\assert\assertThat;
use function bovigo\assert\assertTrue;
use function bovigo\assert\expect;
use function bovigo\assert\predicate\equals;
use function clearstatcache;
use function file_put_contents;
use function fopen;
use function fstat;
use function PHPUnit\Framework\assertEquals;
use function uniqid;
use function unlink;

/**
 * Test for setCurrentUser/setCurrentGroup functionality.
 *
 * @group  unlink
 */
class CurrentUserTestCase extends TestCase
{
    /**
     * @test
     */
    public function canSetCurrentUser(): void
    {
        vfsStream::setCurrentUser(1234);
        assertEquals(1234, vfsStream::getCurrentUser());
    }

    /**
     * @test
     */
    public function canSetCurrentGroup(): void
    {
        vfsStream::setCurrentGroup(456);
        assertEquals(456, vfsStream::getCurrentGroup());
    }

}
