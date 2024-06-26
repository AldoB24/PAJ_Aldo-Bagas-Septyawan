<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
class GuruController extends Controller
{
     // menampilkan data guru
     public function index()
     {
         $guru = Guru::All();
         return view('guru', ['guru' => $guru]);
     }
     // hapus sementara
public function hapus($id)
{
    	$guru = Guru::find($id);
    	$guru->delete();
 
    	return redirect('/guru');
}
// menampilkan data guru yang sudah dihapus
public function trash()
{
    	// mengampil data guru yang sudah dihapus
    	$guru = Guru::onlyTrashed()->get();
    	return view('guru_trash', ['guru' => $guru]);
}
 // restore data guru yang dihapus
 public function restore($id)
 {
         $guru = Guru::onlyTrashed()->where('id',$id);
         $guru->restore();
         return redirect('/guru/trash');
 }
}
