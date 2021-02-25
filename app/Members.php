<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Members extends Authenticatable
{
    use Notifiable;

    protected $table = 'pengguna';
    protected $guard = 'pengguna';
    public $timestamps = false;
    protected $fillable = [
        'id','email','password','nama_depan','nama_belakang','nomor_ktp','nomor_npwp','id_pekerjaaan','kewarganegaraan',
        'tempat_lahir','tanggal_lahir','jenis_kelamin','nomor_telepon','alamat','id_propinsi','id_kota','kecamatan','kelurahan','kode_pos',
        'id_pendidikan','nama_ibu_kandung','status_tinggal','status_menikah','jumlah_kartu_kredit','nomor_bpjs_ketenagakerjaan','nomor_asuransi',
        'nama_asuransi','status_email_verifikasi','tanggal_verifikasi_email','tanggal_verifikasi_telepon','status','tanggal_pembuatan','tanggal_perubahan'
    ];
}
