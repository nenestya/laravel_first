@extends ("layouts.app")
@section ('main')
    <div class="container-fluid" style="width:50%">
    <h2> Create New Barang</h2>
    <br>
    {!! Form::open(['method'=>'post', 'action'=>'BarangController@store','files'=>'true']) !!}
        <div class="form-group">
            {!! Form::label('nama','Nama Barang') !!}
            {!! Form::text('nama',null,['class'=>'form-control','placeholder'=>'Nama Barang'])!!}
        </div>
        <div class="form-group">
                {!! Form::label('jenis_id','Id Jenis') !!}
                {!! Form::select('jenis_id',$jeniss,null,['class'=>'form-control','placeholder'=>'Jenis Barang'])!!}
            </div>
        <div class="form-group">
            {!! Form::label('warna','Warna Barang') !!}
            {!! Form::select('warna',['pink'=>'Pink','merah'=>'Merah','biru'=>'Biru'],null,['class'=>'form-control','placeholder'=>'Pilih Warna Barang'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('harga','Harga Satuan') !!}
            {!! Form::text('harga',null,['class'=>'form-control','placeholder'=>'Harga Satuan'])!!}
        </div>  
        <div class="form-group">
                {!! Form::label('photo_id','Foto Barang') !!}
                {!! Form::file('photo_id',null,['class'=>'custom-file-input'])!!}
            </div>  
        <div class="form-group">
            {!! Form::submit('Simpan',['class'=>'btn btn-danger'])!!}
        </div> 
    </div>
    {!! Form::close() !!}
@endsection


