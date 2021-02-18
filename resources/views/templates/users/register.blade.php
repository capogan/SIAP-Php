@extends('templates.layouts.app')
@section('content')
<div class="container-fluid" style="height: 100vh; display: block;">
    <div class="row no-gutter  h-100">
        <div class="col-md-7 bg-login">

        </div>
        <div class="col-md-5 bg-light">
            <div class="login d-flex align-items-center py-4">
                <div class="container">

                    <div class="row">

                        <div class="col-lg-10  mx-auto">


                            <h4 class="card-title text-center">Buat Akun</h4>

                            <p class="text-center">Silahkan Membuat Akun anda</p>


                            <form>
                                <div class="form-group input-group">

                                    <input name="" class="form-control" placeholder="Nama Lengkap" type="text">
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">

                                    <input name="" class="form-control" placeholder="Alamat Email" type="email">
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">

                                    <select class="form-control" style="max-width: 65px; height: 51.5px;">
                                        <option selected="">+62</option>
                                        <option value="1">+60</option>
                                        <option value="2">+198</option>
                                        <option value="3">+701</option>
                                    </select>
                                    <input name="" class="form-control" placeholder="Nomor Telepon" type="text">
                                </div> <!-- form-group// -->

                                <div class="form-group input-group">
                                    <input class="form-control" placeholder="Buat Password" type="password">
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">

                                    <input class="form-control" placeholder="Repeat password" type="password">
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <h6>Persyaratan</h6>
                                    <div class="form-check" style="font-size: small;">
                                       <label> <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                           <p class="form-check-label" for="exampleCheck1">Saya telah membaca dan saya setuju dengan <a href="#">Kebijakan</a> & <a href="#">syarat Ketentuan</a></p></label>
                                    </div>
                                    <div class="form-check" style="font-size: small;">
                                        <label><input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <p class="form-check-label" for="exampleCheck1">Izinkan SIAP untuk mengirimkan saya informasi melalui email</p></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block"> Buat Akun </button>
                                </div> <!-- form-group// -->
                                <p class="text-center">Sudah Memiliki Akun? <a href="/login">Log In</a> </p>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection



