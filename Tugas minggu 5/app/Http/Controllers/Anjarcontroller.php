<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Anjarcontroller extends Controller
{
    public function index()
    {
       // return "Halo ini adalah method index, dalam controller Anjar.";
       //return "Method ini akan digunakan untuk mengambil semua data user";
       $nama = "Anjar Fitria";

       $matkul = ["Pemrograman Lanjut, Pancasil,Perancangan Perangkat keras"];

       return view('watermelon',compact('nama','matkul'));
    }
    public function create()
    {
        return "Method ini nantinya digunakan untuk menampilkan form untuk menambah data user";
    }
    public function store (request $request)
    {
        return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }
    public function show($id)
    {
        return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id=" . $id;
    }
    public function edit($id)
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $id;
    }
    public function update(Request $request, $id)
    {
        return "Method ini nantinya akan digunakan untuk mengubah data user dengan id=" . $id;
    }
    public function destory($id)
    {
        return "Method ini nantinya digunakan untuk menghapus data user dengan id=" . $id;
    }
}



