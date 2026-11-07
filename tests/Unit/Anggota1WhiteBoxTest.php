<?php

namespace Tests\Unit;

use App\Support\ShopRules;
use PHPUnit\Framework\TestCase;

class Anggota1WhiteBoxTest extends TestCase
{
    public function test_anggota_1_white_box(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        ShopRules::discount(-1, false);
    }
}
