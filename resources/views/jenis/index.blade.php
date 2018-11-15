@extends('layouts.app')

@section ('main')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>id jenis</th>
                    <th>nama jenis</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($jeniss as $jenis)
                <tr>
                <td>{{$jenis->id}}</td>
                <td>{{$jenis->nama_jenis}}</td>
                
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
