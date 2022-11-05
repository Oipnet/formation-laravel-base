<?php

class Foo
{
    public function __construct(
        private DateTimeInterface $dateTime
    )
    {
    }

    public function getDatetime(): DateTimeInterface
    {
        return $this->dateTime;
    }
}