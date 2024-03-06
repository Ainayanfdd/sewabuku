<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarang extends Controller
{
    public function getData()
    {
        $dataBarang = [
            ['id' => 1, 'nama' =>'beras pandan wangi', 'harga' => 15000],
            ['id' => 2, 'nama' =>'tepung terigu', 'harga' => 20000],
            ['id' => 3, 'nama' =>'baygon cair', 'harga' => 13500],
            ['id' => 4, 'nama' =>'penyedap royco', 'harga' => 3200],
            ['id' => 5, 'nama' =>'Minyak Goreng', 'harga' => 14000],
        ];

        return$dataBarang;
    }
    public function tampilkan(){
        $data = $this->getData();
        return view('list_barang', compact('data'));
    }
    
}
