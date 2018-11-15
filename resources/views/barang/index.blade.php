@extends('layouts.app')

@section ('main')

<div class="container">
        <a href="{{route('barang.create')}}" class="btn btn-sm btn-info" style="margin:20px"> Tambah </a>
    <table class="table">
            <thead>
                <tr>
                    <th>foto</th>
                    <th>nama</th>
                    <th>jenis</th>
                    <th>harga</th>
                    <th>warna</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangs as $barang)
                <tr>
           
                <td><img src="/image/{{$barang->photo->name}}" alt="" class="src" height="100px" width="100px"></td>
                <td>{{$barang->nama}}</td>
                <td>{{$barang->jenis ? $barang->jenis->nama_jenis:'jenis barang tidak ditemukan'}}</td>
                <td>{{$barang->harga}}</td>
                <td>{{$barang->warna}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

