<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Anggota4Test extends DuskTestCase
{
    public function test_anggota_4(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/qa/reset')
                ->clear('#qty_kopi')
                ->type('#qty_kopi', '0')
                ->press('Tambah Kopi')
                ->assertSee('Jumlah minimal 1')
                ->screenshot('bukti_p09_tc04_invalid_qty');
        });
    }
}
