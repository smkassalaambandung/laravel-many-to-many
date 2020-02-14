@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Hobi</div>

                <div class="card-body">
                    <form action=" {{ route('hobi.store') }} " method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Masukan Jenis Hobi</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="nama" required>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <button class="btn btn-primary" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
