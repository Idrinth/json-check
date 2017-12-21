<?php

namespace De\Idrinth\ConfigCheck\Test\Service;

use De\Idrinth\ConfigCheck\Service\FileFinder;
use PHPUnit\Framework\TestCase;

class FileFinderTest extends TestCase
{
    /**
     */
    public function testFind()
    {
        $instance = new FileFinder();
        $this->assertCount(7, $instance->find(__DIR__, 'php'));
        $this->assertCount(2, $instance->find(__DIR__, 'php', array('Validator')));
    }
}