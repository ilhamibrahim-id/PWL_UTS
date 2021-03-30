@extends('barangs.template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD UTS ILHAM IBRAHIM</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('barang.create') }}">Tambah Data Barang</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">Id_Barang</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kategori Barang</th>
            <th>Harga</th>
            <th>QTY</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($barangs as $post)
        <tr>
            <td class="text-center">{{ $post->id_barang }}</td>
            <td>{{ $post->kode_barang }}</td>
            <td>{{ $post->nama_barang }}</td>
            <td>{{ $post->kategori_barang }}</td>
            <td>{{ $post->harga }}</td>
            <td>{{ $post->qty }}</td>
            <td class="text-center">
                <form action="{{ route('barang.destroy',$post->id_barang) }}" method="POST">

                    <a class="btn btn-info btn-sm" href="{{ route('barang.show',$post->id_barang) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('barang.edit',$post->id_barang) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $barangs->links() !!}

@endsection
