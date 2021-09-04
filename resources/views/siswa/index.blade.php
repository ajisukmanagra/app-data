@extends('layout.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Siswa</h3>
                            <div slass="left">
                                <a type="button" class="btn btn-success btn-sm btn-toggle" data-toggle="modal"
                                    data-target="#exampleModalLong">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="panel-body">
                                <div>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>NAMA DEPAN</th>
                                                <th>NAMA BELAKANG</th>
                                                <th>JENIS KELAMIN</th>
                                                <th>AGAMA</th>
                                                <th>ALAMAT</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; ?>
                                            @foreach($siswa as $siswa)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td> <a
                                                        href="/siswa/{{ $siswa->id }}/profile">{{ $siswa->nama_depan }}</a>
                                                </td>
                                                <td><a
                                                        href="/siswa/{{ $siswa->id }}/profile">{{ $siswa->nama_belakang }}</a>
                                                </td>
                                                <td>{{ $siswa->jenis_kelamin }}</td>
                                                <td>{{ $siswa->agama }}</td>
                                                <td>{{ $siswa->alamat }}</td>
                                                <td>
                                                    <a href="/siswa/{{ $siswa->id }}/edit"
                                                        class="btn btn-primary btn-sm"><i class="fa fa-pencil"
                                                            aria-hidden="true"></i></a>
                                                    <a href="/siswa/{{ $siswa->id }}/delete"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('yakin mau di hapus ?')"><i
                                                            class="fa fa-trash" aria-hidden="true"></i></a>
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
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/siswa/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Depan</label>
                            <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nama Depan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Belakang</label>
                            <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nama Belakang">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                <option>--Pilih--</option>
                                <option value="Laki laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Agama</label>
                            <input name="agama" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Agama">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Avatar</label>
                            <input type="file" name="avatar" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        @endsection
        @section('footer')
        @endsection