<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$items 	= env('APP_PAGINATE',15);
        $sales 	= Sale::latest()->paginate($items);
		return view('sales.index', ['sales' => $sales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		$clients	= User::role('client')->get();
		
		return view('sales.create',['clients' => $clients]);
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
						'title' 	=> 'required|max:200',
						'user_id' 	=> 'required',
					]);
					
		$request->request->add(['invoice_no' => $this->genrateInvoiceNumber()]);
		$request->request->add(['invoice_date' => date('Y-m-d')]);
		$request->request->add(['type' => 'invoice']);
        $sale	= Sale::create($request->all());
        return redirect()->to('sales/'.$sale->id.'/edit')->with('success','Invoice drafted successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
		return view('sales.edit',compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
		dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
	
	public function all(Sale $sale)
    {
		$items 	= env('APP_PAGINATE',15);
        $sales 	= Sale::latest()->paginate($items);
		
		return view('sales.all', ['sales' => $sales]);
    }
	
	private function genrateInvoiceNumber(){
		$record = Sale::latest()->first();
		

		//check first day in a year
		if ( is_null($record) ){
			$nextInvoiceNumber = "SLM".date('Y').'-1';
		} else {
			//increase 1 with last invoice number
			$expNum = explode('-', $record->invoice_no);
			$nextInvoiceNumber = $expNum[0].'-'. $expNum[1]+1;
		}
		//dd($nextInvoiceNumber);
		return $nextInvoiceNumber;
	}
}
