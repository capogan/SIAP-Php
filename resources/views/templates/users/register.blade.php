@extends('templates.users.layouts.app')
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

                                <div class="alert message-result" role="alert"></div>
                                <form id="register_form" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group input-group">
                                        <select class="form-control" style="max-width: 65px; height: 51.5px;" name="jenis_kelamin" id="jenis_kelamin">
                                            <option value="pria">Mr.</option>
                                            <option value="wanita">Mrs.</option>

                                        </select>
                                        <input name="full_name" id="full_name" class="form-control" placeholder="Nama Lengkap" type="text">
                                    </div> <!-- form-group// -->
                                    <div class="form-group input-group">

                                        <input name="email" id="email" class="form-control" placeholder="Alamat Email" type="email">
                                    </div> <!-- form-group// -->
                                    <div class="form-group input-group">

                                        <select class="form-control" style="max-width: 65px; height: 51.5px;" id="code_phone_number" name="code_phone_number">
                                            <option selected="">+62</option>
                                            <option value="1">+60</option>
                                            <option value="2">+198</option>
                                            <option value="3">+701</option>
                                        </select>
                                        <input name="phone_number" id="phone_number" class="form-control" placeholder="Nomor Telepon" type="text">
                                    </div> <!-- form-group// -->


                                    <div class="form-group input-group">
                                        <input class="form-control" placeholder="Buat Password" type="password" name="password" id="password">
                                    </div> <!-- form-group// -->
                                    <div class="form-group input-group">
                                        <input class="form-control" placeholder="Ulangin password" type="password" name="password_confirmation" id="password_confirmation">
                                    </div> <!-- form-group// -->
                                    <div class="form-group input-group">
                                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                            <option value="">Pilih Kategori</option>
                                            <option value="individu">Individu</option>
                                            <option value="bisnis">Bisnis</option>
                                        </select>
                                    </div> <!-- form-group// -->

                                    <div class="form-group">
                                        <h6>Persyaratan</h6>
                                        <div class="form-check" style="font-size: small;">
                                            <label> <input type="checkbox" class="form-check-input" id="exampleCheck1" name="toc1">
                                                <p class="form-check-label" for="exampleCheck1">Saya telah membaca dan saya setuju dengan <a href="#">Kebijakan</a> & <a href="#">syarat Ketentuan</a></p></label>
                                        </div>
                                        <div class="form-check" style="font-size: small;">
                                            <label><input type="checkbox" class="form-check-input" id="exampleCheck1" name="toc2">
                                                <p class="form-check-label" for="exampleCheck1">Izinkan SIAP untuk mengirimkan saya informasi melalui email</p></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary btn-block" onclick="add_user()"> Buat Akun </button>
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
    @section('js')
        <script src="{{url('/script/register.js')}}" type="application/javascript" ></script>
    @endsection
@endsection



