<?php

namespace App\Http\Controllers;

use App\Models\Slidebar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\storage;
use App\Models\Userr;


class SlidebarController extends Controller
{
    public function index()
    {

        $slidebars = Slidebar::all();
        return view('admin.slidebars', [
            'slidebar' => $slidebars
        ]);
    }

    public function create()
    {

        return view('create4');
    }

    public function store1(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jepg,png,jpg|max:2048',
        ], [
            'image.required' => 'Foto tidak boleh kosong',
        ]);
        
        // menyimpan foto produk
        $data = $request->all();
        $data['image'] = $request->file('image')->store('images', 'public');
        
        // membuat produk
        Slidebar::create($data);
        
        // redirect ke halaman halaman utama
        return redirect()->route('admin.slidebars');
    }

    public function show1(Slidebar $slidebar)
    {
        
        return view('edit', [
            'slidebar' => $slidebar
        ]);
    }

    public function update1(Request $request, Slidebar $slidebar) 
    {

        $request->validate([
            'image' => 'required|image|mimes:jepg,png,jpg|max:2048',
        ], [
            'image.required' => 'Foto tidak boleh kosong',
        ]);

        $data = $request->all;
        
        // mengecek gambar
        $data = $request->all();
        if ($request->file('image')) {
            storage::delete('storage/images/' . $slidebar->image);
        $data['image'] = $request->file('image')->store('images', 'public');
        } else{
            $data['image'] = $slidebar->image;
        }
        // memperbarui banner
        $slidebar->update($data);
        
        // redirect ke halaman halaman utama
        return redirect()->route('admin.slidebars');
    }

    public function delete1(Slidebar $slidebar)
    {
        // menghapus foto banner dari storage
        storage::delete('storage/images/' . $slidebar->image);

        // menghapus data banner dari database
        $slidebar->delete();
        // redirect ke halaman utama
        return redirect()->route('admin.slidebars');
    }
}


