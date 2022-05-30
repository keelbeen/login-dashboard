<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\storage;
use App\Models\Userr;


class productController extends Controller
{
    public function index()
    {
$products = product::all();

        return view('admin.products', [
            'product' => $products
        ]);
    }

    public function add()
    {
        return view('create2');
    }

    public function create(Request $request)
{
// validasi input
$request->validate([
    'name' => 'required',
    'image' => 'required|image|mimes:jepg,png,jpg|max:2048',
    'price' => 'required',
    'stock' => 'required',
    'weight' => 'required',
    'itemcondition' => 'required',
    'minorder' => 'required',
    'description' => 'required',
], [
    'name.required' => 'Nama produk tidak boleh kosong',
    'image.required' => 'Foto produk tidak boleh kosong',
    'image.image' => 'Foto produk harus dalam format gambar',
    'price.required' => 'Harga produk tidak boleh kosong',
    'stock.required' => 'Stok produk tidak boleh kosong',
    'weight.required' => 'Berat produk tidak boleh kosong',
    'itemcondition.required' => 'Kondisi produk tidak boleh kosong',
    'minorder.required' => 'Minimal pemesanan tidak boleh kosong',
    'description.required' => 'Deksripsi produk tidak boleh kosong',
]);

// menyimpan foto produk
$data = $request->all();
$data['image'] = $request->file('image')->store('images', 'public');

// membuat produk
product::create($data);

// redirect ke halaman products.index / halaman utama
return redirect()->route('admin.product');
}
public function show2(product $product)
{
    return view('show2')->with([
        'product' => $product
    ]);
}


public function update(Request $request, product $product) {
    // validasi input
    $request->validate([
        'name' => 'required',
        'image' => 'image',
        'price' => 'required',
        'stock' => 'required',
        'description' => 'required'
    ], [
        'name.required' => 'Nama produk tidak boleh kosong',
        'image.image' => 'Foto produk harus dalam format gambar',
        'price.required' => 'Harga produk tidak boleh kosong',
        'stock.required' => 'Stok produk tidak boleh kosong',
        'description.required' => 'Deksripsi produk tidak boleh kosong',
    ]);

    $data = $request->all();

    // mengecek gambar
    if ($request->file('image')) {
        storage::delete('public/' . $product->image);
        $data['image'] = $request->file('image')->store('images', 'public');
    } else{
        $data['image'] = $product->image;
    }

    //memperbarui data produk
 $product->update($data);

    // redirect ke halaman utama
    return redirect()->route('admin.product');
    }

    public function delete(product $product)
    {
        // menghapus foto produk dari storage
        storage::delete('public/' . $product->image);

        // menghapus data produk dari database
        $product->delete();
        // redirect ke halaman utama
        return redirect()->route('admin.product');
    }
}



