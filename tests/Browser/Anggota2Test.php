<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Anggota2Test extends DuskTestCase
{
    public function test_anggota_2(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/qa/reset')
                ->clear('#qty_kopi')
                ->type('#qty_kopi', '2')
                ->press('Tambah Kopi')
                ->assertSee('Subtotal: Rp 50.000')
                ->screenshot('bukti_p09_tc02_kopi');
        });
    }
}
