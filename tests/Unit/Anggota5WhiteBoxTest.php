<?php

namespace Tests\Unit;

use App\Support\ShopRules;
use PHPUnit\Framework\TestCase;

class Anggota5WhiteBoxTest extends TestCase
{
    public function test_anggota_5_white_box(): void
    {
        $actual = ShopRules::subtotal(['kopi' => 2, 'teh' => 1]);
        $this->assertSame(65000, $actual);
    }
}
