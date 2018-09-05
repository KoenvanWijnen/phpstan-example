<?php

namespace test\Component\Bar\Foo;

use test\Component\Foo\testInterface;

/**
 * Class test
 */
class test implements testInterface
{
    const TEST = 'test';

    /**
     * @inheritdoc
     */
    public function save(object $data, string $key = self::TEST): void
    {

    }

}
