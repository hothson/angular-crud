<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        // List all the products
        return Product::get();
    }

    public function store(Request $request)
    {
        // Create new product
        $product = new Product();
        $product->sku = $request->sku;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();
    }

    public function show($id)
    {
        // Show single product
        return Product::find($id);
    }

    public function update(Request $request, $id)
    {
        // Update the Product
        if ($id != null) {
            Product::where('id', $id)->update($request->all());  
        }
    }

    public function destroy($id)
    {
        // Delete the Product
        if ($id != null) {
            $product = Product::find($id);
            $product->delete();    
        }
    }
}