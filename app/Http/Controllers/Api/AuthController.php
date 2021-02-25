<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Members;
use Illuminate\Http\Request;

use Auth;
use Validator;
use Hash;
use Session;

class AuthController extends Controller
{

    function add_user(Request $request){

        $full_name = $request->full_name;
        $splitName = explode(' ', $full_name, 2);
        $first_name = $splitName[0];
        $last_name = !empty($splitName[1]) ? $splitName[1] : '';
        $email = $request->email;
        $phone_number = $request->code_phone_number."".$request->phone_number;
        $password = $request->password;
        $gender = $request->jenis_kelamin;


        $validation = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'required|email|unique:pengguna',
            'phone_number' => 'required|unique:pengguna,nomor_telepon',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
            'toc1' => 'required',
            'toc2' => 'required'
        ]);

        if($validation->fails()) {

          return response()->json([
              "status"  => "error",
              "message" => $validation->errors()
          ]);
        }

        $user = Members::create(
                    [
                        'nama_depan' => $first_name,
                        'nama_belakang' => $last_name,
                        'email' => $email,
                        'password' => Hash::make($password),
                        'nomor_telepon'=>$phone_number,
                        'nomor_ktp' =>'',
                        'nomor_npwp'=>'',
                        'kewarganegaraan'=>'',
                        'tempat_lahir'=>'',
                        'jenis_kelamin'=>$gender,
                        'alamat'=>'',
                        'kecamatan'=>'',
                        'kelurahan'=>'',
                        'kode_pos',
                        'nama_ibu_kandung'=>'',
                        'status_tinggal'=>'milikpribadi',
                        'status_menikah'=>'belum_menikah',
                        'nomor_bpjs_ketenagakerjaan'=>'',
                        'nomor_asuransi'=>'',
                        'nama_asuransi'=>'',
                        'tanggal_pembuatan'=>date('Y-m-d H:i:s'),
                        'tanggal_perubahan'=>date('Y-m-d H:i:s')
                    ]);

        return response()->json([
            "status"  => "success",
            "message" => "Sukses Menambahkan"
        ]);
    }

    function login_user(Request $request){

        $email = $request->email;
        $password = $request->password;

        $validation = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validation->fails()) {

            return response()->json(["success"  => "error", "message" => $validation->errors()]);
        }


        if(Auth::guard('pengguna')->attempt(['email' => $email, 'password' => $password])) {
//            $request->session()->regenerate();
            return response()->json([
                'success' => "success",
                 'message' => 'Login sukses!'
            ]);
        } else {
            return response()->json([
                'success' => "failed",
                'message' => 'Login Gagal!'
            ]);
        }

    }

    public function logout(Request $request) {
        Auth::logout();
        return response()->json([
            "status"  => "success",
            "message" => 'Proses Logout berhasil'
        ], 200);
    }
}
