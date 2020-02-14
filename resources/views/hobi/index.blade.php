@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Daftar Hobi</div>

                <div class="card-body">
                    <a href="{{ url('hobi/create') }}" class="btn btn-primary">
                        Tambah Hobi
                    </a>
                    <table class="table">
                        <thead>
                            <th>Jenis Hobi</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($hobi as $item)
                            <tr>
                                <td> {{ $item->nama }} </td>
                                <td>
                                    <a class="btn btn-info" href=" {{ route('hobi.show', $item->id) }} ">lihat</a>
                                    <a class="btn btn-warning" href=" {{ route('hobi.edit', $item->id) }} ">Edit</a>
                                    <a class="btn btn-danger" href=" {{ route('hobi.destroy', $item->id) }} ">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
