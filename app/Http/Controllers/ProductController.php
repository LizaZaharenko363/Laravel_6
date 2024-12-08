<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query'); 
        if (!$query) {
            return back();
        }
        $products = Product::all();
  
        $filteredProducts = $products->filter(function ($product) use ($query) {
            return str_contains(strtolower($product->name), strtolower($query));
        });
    
        $uniqueProducts = $filteredProducts->unique('name');

        return view('search', compact('uniqueProducts', 'query'));
    }
    
    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete(); 

        return redirect()->route('shop');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0',
            'image_url' => 'nullable|url',
        ]);

        Product::create($data);

        return redirect()->route('shop');
    }


    public function getAllProducts()
    {
        $products = Product::all();
        return view('shop', compact('products'));
    }

    public function getProduct($id)
    {
        $product = Product::findOrFail($id);

        return view('product', compact('product'));
    }

    public function editProduct($id)
    {
        $product = Product::findOrFail($id);

        return view('update_product', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0',
            'image_url' => 'nullable|url',
        ]);

        $product = Product::findOrFail($id);
        $product->update($data);
        return redirect()->route('product.show', $id);
    }

}
