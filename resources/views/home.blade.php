@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Masukkan data</div>
 
                <div class="card-body">
                    @if(auth()->user()->is_admin == 1)
                    <a href="{{url('admin/routes')}}">Admin</a>
                    @else
                        <form method="POST" action="">
                            <div class="form-group">
                                <label>Posisi yang dilamar</label>
                                <input type="text" class="form-control" name="posisi">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                <label>No KTP</label>
                                <input type="text" class="form-control" name="noktp">
                            </div>
                            <div class="form-group">
                                <label>Tempat, Tanggal Lahir</label><br>
                                <input type="text"  name="tempatlahir">
                                <input type="date"  name="tanggallahir">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jeniskelamin" id="exampleFormControlSelect1">
                                <option value="l">Laki-Laki</option>
                                <option value="p">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Agama</label><br>
                                <input type="text" class="form-control" name="agama">
                            </div>
                            <div class="form-group">
                                <label>Golongan Darah</label>
                                <select class="form-control" name="golongandarah" id="exampleFormControlSelect1">
                                <option value="a">A</option>
                                <option value="b">B</option>
                                <option value="ab">AB</option>
                                <option value="o">O</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status" id="exampleFormControlSelect1">
                                <option></option>
                                <option value="Menikah">Menikah</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat KTP</label>
                                <textarea class="form-control" name="alamatktp" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Alamat Tinggal</label>
                                <textarea class="form-control" name="alamattinggal" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label>No Telp</label>
                                <input type="text" class="form-control" name="notelp">
                            </div>
                            <div class="form-group">
                                <label>Orang Terdekat yang bisa dihubungi</label>
                                <input type="text" class="form-control" name="orangterdekat">
                            </div>
                            <div class="form-group">
                                <label>SKILL</label>
                                <textarea class="form-control" name="skill" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Golongan Darah</label>
                                <select class="form-control" name="golongandarah" id="exampleFormControlSelect1">
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Penghasilan yang diharapkan</label>
                                <input type="text" class="form-control" name="penghasilan">
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary">
                            </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection