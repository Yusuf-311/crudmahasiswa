@extends('mahasiswa.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div>
                <h2>Add New Mahasiswa</h2>
            </div>
            <div>
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>There were some problem with your input <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif


    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xa-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama :</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                </div>
            </div>

            <div class="col-xa-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kelas :</strong>
                    <input type="text" name="kelas" class="form-control" placeholder="kelas">
                </div>
            </div>

            <div class="col-xa-12 col-sm-12 col-md-12 mt-3 text-center">
                <button type="submit" class="btn btn-success">Create Mahasiswa</button>
            </div>
        </div>
    </form>


@endsection
