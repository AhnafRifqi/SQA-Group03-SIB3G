<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Anggota1Test extends DuskTestCase
{
    public function test_anggota_1(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/qa/reset')
                ->assertSee('Kopi Arabika')
                ->assertSee('Teh Melati')
                ->screenshot('bukti_p09_tc01_produk');
        });
    }
}
