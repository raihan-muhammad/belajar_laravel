

@extends('template/bootstrap')
@section('title')
    Detail data suplier
@endsection

@section('content')
   <div class="card">
        <div class="card-header">
            Detail Data Supplier
        </div>
        <div class="card-body">
            <a href="{{ route('supplier.index') }}" class="btn btn-success">Kembali</a>
            <table class="table table-bordered">
                <tr>
                    <td>Nama Supplier</td>
                    <td>:</td>
                    <td>{{ $data_supplier->nama_supplier }}</td>
                </tr>
                <tr>
                    <td>Telp Supplier</td>
                    <td>:</td>
                    <td>{{ $data_supplier->telp_supplier }}</td>
                </tr>
                <tr>
                    <td>Alamat Supplier</td>
                    <td>:</td>
                    <td>{{ $data_supplier->alamat_supplier }}</td>
                </tr>
            </table>
        </div>
    </div> 
@endsection