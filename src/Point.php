<?php

namespace App;

class Point
{
    public int $x;
    public int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getPoint(): array
    {
        return [$this->x, $this->y];
    }

    public function setPoint(int $x, int $y): void
    {
        $this->x = $x;
        $this->y = $y;
    }
}
