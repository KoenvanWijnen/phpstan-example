<?php

namespace test\Component\Foo;

/**
 * Interface testInterface
 */
interface testInterface
{
    /**
     * @param object $data
     * @param string $key
     * @return void
     */
    public function save(
        object $data,
        string $key
    ): void;
}
