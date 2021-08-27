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
                            <h3 class="panel-title">Edit Data sekeltaris</h3>
                            <div class="panel-body">
                                <div>
                                    <form action="/sekeltaris/{{ $sekeltaris->id }}/update" method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">user</label>
                                            <input name="user_id" type="taxt" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="user" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input name="email" type="text" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="email">
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
                                            <input name="password" type="text" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="password">
                                        </div>
                                        <div class="btn btn-warning">
                                    <button type="submit">update</button>
                                </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
