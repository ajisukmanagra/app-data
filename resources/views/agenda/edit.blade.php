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
                            <h3 class="panel-title">Edit Data</h3>
                            <div class="panel-body">
                                <div>
                                    <form action="/agenda/{{ $agenda->id }}/update" method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Siswa</label>
                                            <input name="nama_siwa" type="text" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Nama siswa" value="{{ $agenda->nama_siswa }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">keterangan</label>
                                            <input name="keterangan" type="text" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="keterangan" value="{{ $agenda->keterangan }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Pilih Keterangan</label>
                                            <select name="keterangan" class="form-control"
                                                id="exampleFormControlSelect1">
                                                <!--<option>--Pilih--</option>-->
                                                <option value="A" @if($agenda->keterangan == 'L') selected @endif>Alfa
                                                </option>
                                                <option value="S" @if($agenda->keterangan == 'P') selected
                                                    @endif>Sakit
                                                </option>
                                                <option value="I" @if($agenda->keterangan == 'L') selected @endif>Izin
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mapel</label>
                                            <input name="mapel" type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="mapel"
                                                value="{{ $agenda->mapel }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">waktu</label>
                                            <input name="waktu" type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="waktu"
                                                value="{{ $agenda->waktu }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama guru</label>
                                            <input name="nama_guru" type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="nama guru"
                                                value="{{ $agenda->nama_guru }}">
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
