@extends('layouts.master')

@section('content')
<div class="container pt-4">

    <h1>Data Pegawai</h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-sm rounded-pill my-3" data-bs-toggle="modal"
        data-bs-target="#exampleModal">
        Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Pegawai</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/store-employee" method="post">
                        @csrf
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control mb-1">
                        <label for="">NIK</label>
                        <input type="text" name="nik" class="form-control mb-1">
                        <label for="">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control mb-1">
                        <label for="">Status</label>
                        <select name="status" class="form-select">
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm rounded-pill"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm rounded-pill">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NIK</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $i => $employee)
            <tr>
                <th scope="row">{{ $i+1 }}</th>
                <td>{{ $employee->nama }}</td>
                <td>{{ $employee->nik }}</td>
                <td>{{ $employee->jabatan }}</td>
                <td>
                    @if($employee->status == 'Aktif')
                    <div class="badge bg-success rounded-pill">Aktif</div>
                    @else
                    <div class="badge bg-secondary rounded-pill">Tidak Aktif</div>
                    @endif
                </td>
                <td>
                    <a href="" class="btn btn-warning btn-sm rounded-pill">Edit</a>
                    <a href="" class="btn btn-primary btn-sm rounded-pill">Details</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
