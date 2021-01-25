<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;

    public function test_insert_into_tabel_dosen()
    {
        $dosen = Dosen::create([
            'nipy' => '60160978',
            'nidn' => '0504088601',
            'nama' => 'Dwi Normawati',
            'jabfung' => 'Asisten Ahli',
            'email_dosen' => 'dwinormawati6516@gmail.com',
            'avatar' => 'dwinormawati.jpg'
        ]);

        $this->assertEquals('60160978', $dosen->nipy);
        $this->assertEquals('0504088601', $dosen->nidn);
        $this->assertEquals('Dwi Normawati', $dosen->nama);
        $this->assertEquals('Asisten Ahli', $dosen->jabfung);
        $this->assertEquals('dwinormawati6516@gmail.com', $dosen->email_dosen);
        $this->assertEquals('dwinormawati.jpg', $dosen->avatar);
    }
}