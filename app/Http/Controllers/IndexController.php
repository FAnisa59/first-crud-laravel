<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    public function index()
    {

        $data['user'] = DB::table('users')->get();

        return view('index', $data);
    }

    public function edit($id_user)
    {
        // menampilkan user yang dipilih
        $data['user'] = DB::table('users')->where('id_user', $id_user)->first();

        return view('edit', $data);
    }

    public function update(Request $request, $id_user)
    {

        $simpan = DB::table('users')
            ->where('id_user', $id_user)
            ->update([
                'nama_user' => $request->nama_user,
                'email'  => $request->email,
                'jekel'  => $request->jekel,
                'nohp' => $request->nohp,
                'alamat' => $request->alamat
            ]);

        if ($simpan == true) {
            echo "<script>
            alert('Data berhasil di Update');
            window.location = '/';
            </script>";
        } else {
            echo "<script>
            alert('Data gagal di Update');
            window.location ='/edit/$id_user';
            </script>";
        }
    }

    public function add()
    {
        $data['user'] = DB::table('users')->get();

        return view('tambah');
    }

    public function save(Request $request)
    {
        $save = DB::table('users')->insert([
            'nama_user' => $request->nama_user,
            'email'  => $request->email,
            'jekel'  => $request->jekel,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat
        ]);

        if ($save == true) {
            echo "<script>
            alert('Data berhasil di Tambahkan');
            window.location = '/';
            </script>";
        } else {
            echo "<script>
            alert('Data gagal di tambahkan');
            window.location ='/tambah';
            </script>";
        }
    }

    public function hapus($id_user)
    {
        DB::table('users')
            ->where('id_user', $id_user)
            ->delete();
    }
}
