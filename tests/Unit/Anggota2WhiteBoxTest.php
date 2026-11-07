<?php

namespace Tests\Unit;

use App\Support\ShopRules;
use PHPUnit\Framework\TestCase;

class Anggota2WhiteBoxTest extends TestCase
{
    public function test_anggota_2_white_box(): void
    {
        $actual = ShopRules::discount(99999, false);
        $this->assertSame(0, $actual);
    }
}
