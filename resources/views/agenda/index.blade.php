@extends('layout.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Agenda</h3>
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
                                                <th>NAMA_SISWA</th>
                                                <th>KETERANGAN</th>
                                                <th>MAPEL</th>
                                                <th>WAKTU</th>
                                                <th>NAMA_GURU</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; ?>
                                            @foreach($agenda as $agenda)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $agenda->nama_siswa }}</td>
                                                <td>{{ $agenda->keterangan }}</td>
                                                <td>{{ $agenda->mapel }}</td>
                                                <td>{{ $agenda->waktu }}</td>
                                                <td>{{ $agenda->nama_guru }}</td>
                                                <td>
                                                    <a href="/agenda/{{ $agenda->id }}/edit" class="btn btn-primary btn-sm"><i class="fa fa-pencil"
                                                            aria-hidden="true"></i></a>
                                                    <a href="/agenda/{{ $agenda->id }}/delete" class="btn btn-danger btn-sm"onclick="return confirm('yakin mau di hapus ?')"><i
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
                    <form action="/agenda/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama siswa</label>
                            <input name="nama_siswa" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nama Siswa">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Keterangan siswa</label>
                            <select name="keterangan" class="form-control" id="exampleFormControlSelect1">
                                <option>--Pilih--</option>
                                <option value="A">Alfa</option>
                                <option value="S">Sakit</option>
                                <option value="I">Izin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Pelajaran</label>
                            <input name="mapel" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nama Pelajaran">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">waktu</label>
                            <input name="waktu" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="waktu">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Nama Guru</label>
                            <input name="nama_guru" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nama guru">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
