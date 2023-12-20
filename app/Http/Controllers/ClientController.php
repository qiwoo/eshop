<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function CategoryPage($id, $slug){
        $category = Category::findOrFail($id);
        $products = Product::where('product_category_id', $id)->latest()->get();
        return view('user_template.category', compact('category', 'products'));
    }

    public function SingleProduct($id){
        $product = Product::findOrFail($id);
        $subcat_id=Product::where('id', $id)->value('product_subcategory_id');
        $related_products = Product::where('product_subcategory_id', $subcat_id)->latest()->get();
        return view('user_template.product', compact('product', 'related_products'));
    }

    public function AddToCart(){
        return view('user_template.addtocart');
    }

    public function CheckOut(){
        return view('user_template.checkout');
    }

    public function UserProfile(){
        return view('user_template.userprofile');
    }
}
