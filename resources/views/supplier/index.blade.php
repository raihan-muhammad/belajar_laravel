

@extends('template/bootstrap')
@section('title')
    Tampil data suplier
@endsection

@section('content')
   <div class="card">
        <div class="card-header">
            Data Supplier
        </div>
        <div class="card-body">
            <a href="{{ route('supplier.create') }}" class="btn btn-primary">Tambah</a>
            <hr>
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama Supplier</th>
                    <th>Telp Supplier</th>
                    <th>Alamat Supplier</th>
                    <th>Aksi</th>
                </tr>
                @foreach($data_supplier as $b)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $b->nama_supplier }}</td>
                    <td>{{ $b->telp_supplier }}</td>
                    <td>{{ $b->alamat_supplier }}</td>
                    <td>
                        <form action="{{ route('supplier.destroy', [$b->kd_supplier]) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <a href="{{ route('supplier.edit', [$b->kd_supplier]) }}" class="btn btn-sm btn-success">update</a>
                            <button type="submit" class="btn btn-sm btn-danger" onClick="return confrim('Yakin delete?')">Delete</button>
                            <a href="{{ route('supplier.show', [$b->kd_supplier]) }}" class="btn btn-sm btn-info">Detail</a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div> 
@endsection