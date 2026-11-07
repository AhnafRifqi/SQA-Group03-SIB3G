<?php

namespace Tests\Unit;

use App\Support\ShopRules;
use PHPUnit\Framework\TestCase;

class Anggota4WhiteBoxTest extends TestCase
{
    public function test_anggota_4_white_box(): void
    {
        $actual = ShopRules::discount(100000, false);
        $this->assertSame(5000, $actual);
    }
}
