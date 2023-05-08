<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function getIndex() //List Aset
    {
        return view('welcome_message');
    }
    public function getAset() //List Aset
    {
        $data = [
            'post_title' => 'List Assets'
        ];
        return view('dashboard/aset', $data);
    }

    public function getBarang() //Input Nama Barang
    {
        $data = [
            'post_title' => 'Nama - Nama Aset'
        ];
        return view('dashboard/barang', $data);
    }

    public function getKategori() //Input Kategori
    {
        $data = [
            'post_title' => 'Kategori'
        ];
        return view('dashboard/kategori', $data);
    }

    public function getReparasi() //Input Reparasi
    {
        $data = [
            'post_title' => 'Reparasi Aset'
        ];
        return view('dashboard/reparasi', $data);
    }
    public function getPengajuan() //Input Reparasi
    {
        $data = [
            'post_title' => 'Pengajuan Barang'
        ];
        return view('dashboard/pengajuan', $data);
    }

    public function getUser() // Edit User
    {
        $data = [
            'post_title' => 'Konfigurasi User'
        ];
        return view('dashboard/user', $data);
    }
    public function getTest()
    {
        return view('_layout/template');
    }
}
