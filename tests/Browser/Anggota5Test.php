<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Anggota5Test extends DuskTestCase
{
    public function test_anggota_5(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/qa/reset')
                ->press('Checkout Sekarang')
                ->assertSee('Keranjang kosong')
                ->screenshot('bukti_p09_tc05_empty_cart');
        });
    }
}
