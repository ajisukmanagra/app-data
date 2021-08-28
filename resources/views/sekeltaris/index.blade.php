@extends('layout.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            @if(session('sukses'))
                            <div class="alert alert-success" role="alert">
                                {{session('sukses')}}
                            </div>
                            @endif
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
                                                <th>NAMA USER</th>
                                                <th>NAMA</th>
                                                <th>KELAS</th>
                                                <th>TOKEN</th>
                                                <th>PASSWORD</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; ?>
                                            @foreach($sekeltaris as $sekeltaris)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $sekeltaris->user_id }}</td>
                                                <td>{{ $sekeltaris->nama }}</td>
                                                <td>{{ $sekeltaris->kelas }}</td>
                                                <td>{{ $sekeltaris->token }}</td>
                                                <td>{{ $sekeltaris->password }}</td>
                                                <td>
                                                    <a href="/sekeltaris/{{ $sekeltaris->id }}/edit"
                                                        class="btn btn-primary btn-sm"><i class="fa fa-pencil"
                                                            aria-hidden="true"></i></a>
                                                    <a href="/sekeltaris/{{ $sekeltaris->id }}/delete"
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
                    <form action="/sekeltaris/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">user</label>
                            <input name="user_id" type="taxt" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="user">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="email" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">kelas</label>
                            <input name="kelas" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="kelas">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">token</label>
                            <input name="token" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="token">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">password</label>
                            <input name="password" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="password">
                        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection