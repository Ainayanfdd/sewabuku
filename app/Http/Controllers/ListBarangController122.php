<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController122 extends Controller
{
    public function getData(){
        $dataBarang = [
            ['id' => 1, 'nama' => 'Beras Pandan Wangi', 'harga'=> 15000],
            ['id' => 1, 'nama' => 'Tepung Terigu', 'harga'=> 20000],
            ['id' => 1, 'nama' => 'Baygon Cair', 'harga'=> 13500],
            ['id' => 1, 'nama' => 'Penyedap Royco', 'harga'=> 3200],
            ['id' => 1, 'nama' => 'Minyak Goreng', 'harga'=> 14000]
        ];
        return $dataBarang;
    }

    public function listbarang122(){
        $data = $this->getData();
        return view('listbarang122', compact('data'));
    }
}
