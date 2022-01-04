<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		
		$request->validate(
					[
						'name' 		=> 'required|unique:products|max:100',
						'price' 	=> 'required|integer',
						'details' 	=> 'required',
					]);
		$request->input('status', 'inactive');
        Product::create($request->all());
        return redirect()->route('products.index')->with('success','Product added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
		return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
		
		$request->validate(
					[
						'name' 		=> 'required|max:100',
						'price' 	=> 'required|integer',
						'details' 	=> 'required',
					]);
		
		$request->merge([
			'status' => $request->input('status')?? 'inactive'
		]);
		
        $product->update($request->all());
        return redirect()->route('products.index')->with('success','Product updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
		$product->delete();
        return redirect()->route('products.index')->with('success','Product deleted successfully.');
    }
	
	public function all(Product $product)
    {
		$currency 	= json_decode(\DB::table('settings')->select('value')->where('key', '=', 'global')->value('value'))->currency;	
		$symbol 	= trim(explode('|',config('global.currency')[$currency])[0]);
        $items 		= env('APP_PAGINATE',15);
        $products 	= Product::paginate($items);
        return view('products.all', ['products' => $products, 'symbol' => $symbol]); 
    }
	
	
}
