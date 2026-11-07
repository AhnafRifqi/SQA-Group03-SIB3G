<?php

namespace Tests\Unit;

use App\Support\ShopRules;
use PHPUnit\Framework\TestCase;

class Anggota3WhiteBoxTest extends TestCase
{
    public function test_anggota_3_white_box(): void
    {
        $actual = ShopRules::discount(100000, true);
        $this->assertSame(10000, $actual);
    }
}
