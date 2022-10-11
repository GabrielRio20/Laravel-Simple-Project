<?php
namespace App\Http\Controllers;

use App\Models\Buku;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    //fungsi indeks
    public function index(){
        $data_buku = Buku::all();
        $no = 0;
        return view('buku.index', compact('data_buku', 'no'));
    }

    public function create(){
        return view('buku.create');
    }

    public function store(Request $request){
        $buku = new Buku;
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect(('/buku'));

        // DB::table('buku')->insert(
        //     'judul' => $request->judul;
        //     $buku->penulis = $request->penulis;
        //     $buku->harga = $request->harga;
        //     $buku->tgl_terbit = $request->tgl_terbit;
        // )
    }

    public function destroy($id){
        $buku = Buku::find($id);
        $buku -> delete();
        return redirect('/buku');
    }

    public function edit($id){
        $buku = Buku::find($id);
        return view('buku.update', compact('buku'));
    }

    public function update(Request $request, $id){
        $buku = Buku::find($id);
        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'tgl_terbit' => $request->tgl_terbit
        ]);
        return redirect('/buku');
    }


}