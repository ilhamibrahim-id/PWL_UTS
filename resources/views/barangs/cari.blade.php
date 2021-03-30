@extends('barangs.template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Menampilkan Data Barang </h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('barang.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($barang as $barang)
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <hr />
                <strong>id_barang:</strong>
                {{ $barang->id_barang }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>kode_barang:</strong>
                {{ $barang->kode_barang }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nama_barang:</strong>
                {{ $barang->nama_barang }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>kategori_barang:</strong>
                {{ $barang->kategori_barang }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>harga:</strong>
                {{ $barang->harga }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>qty:</strong>
                {{ $barang->qty }}
            </div>
        </div>
        <hr>
        @endforeach
    </div>
@endsection
