@extends('layouts.main')
  
@section('container')

<div class="row">
        <div class="col-lg-12 margin-tb mt-5">
            <div class="card shadow p-3 mb-5">
                <div class="card-header">
                    <h2> Peminjaman Laptop 
                        <a href="{{ route('peminjaman.create') }}" class="btn btn-primary float-end"><i class="bi bi-cart-plus-fill"></i> Beli tiket</a>
                    </h2>
                </div>
                <table class="table table-bordered text-center mt-2">
                    <tr>
                        <th>Nis</th>
                        <th>Nama Peminjam</th>
                        <th>No Laptop</th>
                        <th>Tanggal Meminjam</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($peminjamans as $peminjaman)
                    <tr>
                         <td>{{ $peminjaman->id}}</td>
                         <td>{{ $peminjaman->nama_pemesan }}</td>
                         <td>{{ $peminjaman->no_laptop }}</td>
                         <td>{{ $peminjaman->tanggal_tiket_di_pesan}}</td>
                        <td><form onsubmit="return confirm('hallo dek?');" action="{{ route('peminjaman.destroy', $peminjaman->id) }}" method="POST">
                                    <a href="{{ route('peminjaman.edit', $peminjaman->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                            </form>
                        </td>
                        </th>
                    </tr>
        @endforeach
                </table> 
            </div>
        </div>
    </div>
@endsection
