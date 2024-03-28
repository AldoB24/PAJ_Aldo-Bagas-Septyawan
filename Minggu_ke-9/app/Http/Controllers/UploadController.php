<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image; 
use App\Models\Gambar;
 
class UploadController extends Controller
{
 public function upload(){
 $gambar = Gambar::get();
 return view('upload',['gambar' => $gambar]);
 }
// hapus sementara
public function delete($id)
{
    	$gambar = Gambar::find($id);
    	$gambar->delete();
 
    	return redirect('/upload');
}
 
 public function proses_upload(Request $request){
 $this->validate($request, [
 'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
 'keterangan' => 'required',
 ]);
 
 // menyimpan data file yang diupload ke variabel $file
 $file = $request->file('file');
 
 $nama_file = time()."_".$file->getClientOriginalName();
 
               // isi dengan nama folder tempat kemana file diupload
 $tujuan_upload = 'data_file';
 $file->move($tujuan_upload,$nama_file);
 
  // Resize gambar menggunakan Intervention Image
  $image = Image::make(public_path('data_file/'.$nama_file));
  $image->resize(400, 200); // Ubah ukuran gambar sesuai kebutuhan
  $image->save();
 
 Gambar::create([
 'file' => $nama_file,
 'keterangan' => $request->keterangan,
 ]);
 
 return redirect()->back();
 }
}

