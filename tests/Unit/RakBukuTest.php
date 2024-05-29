<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\RakBuku;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RakBukuTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     */
    public function test_create(): void
    {
        $rak_buku = [
            'nama' => 'Contoh Rak',
            'lokasi' => 'C01',
            'keterangan' => 'Ini Contoh Rak Buku',
        ];

        $createdRakBuku = RakBuku::create($rak_buku);

        $this->assertDatabaseHas('rak_buku', $rak_buku);
    }

    public function test_show():void
    {
        $rak_buku = RakBuku::factory()->create();

        $this->assertDatabaseHas('rak_buku', [
            'id' => $rak_buku->id,
            'nama' => $rak_buku->nama,
            'lokasi' => $rak_buku->lokasi,
            'keterangan' => $rak_buku->keterangan,
        ]);
    }

    public function test_update():void
    {
        $rak_buku = RakBuku::factory()->create();

        $updatedData = [
            'nama' => 'RakBuku Baru',
            'lokasi' => 'CB01',
            'keterangan' => 'rak_buku telah diubah.',
        ];

        $rak_buku->update($updatedData);

        $this->assertDatabaseHas('rak_buku', $updatedData);
    }

    public function test_delete():void
    {
        $rak_buku = RakBuku::factory()->create();

        $rak_buku->delete();

        $this->assertDatabaseMissing('rak_buku', ['id' => $rak_buku->id]);
    }
}
