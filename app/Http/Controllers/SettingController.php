<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use File;
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('settings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
    
    
    public function app(Setting $setting)
    {
        return view('settings.app');
    }
	
	public function crm(Setting $setting)
	{
		return view('settings.crm');
	}
	
	public function users(Setting $setting)
	{
		return view('settings.users');
	}
	
	public function siteGlobal(Setting $setting, Request $request)
	{
		if ($request->isMethod('post')) {
			
			if(!empty($request->input('uplodedlogo')) && is_null($request->logo)){
				$validateLogo = [
					'logo'  	=> 'string'                    
				];
			}else{
				$validateLogo = [
					'logo'  	=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
				];
			}
			if(!empty($request->input('uplodedfavicon')) && is_null($request->favicon)){
				$validateFavicon = [
					'favicon'  	=> 'string'                    
				];
			}else{
				$validateFavicon = [
					'favicon'  	=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
				];
			}
			
			$validateArray = [
				'site_name'     	=> 'required',
				'default_email' 	=> 'required|email',
				'pagination' 		=> 'required',
				'theme' 			=> 'required',
				'currency' 			=> 'required',
				'date_format' 		=> 'required',
				'language' 			=> 'required',
			];
			
			$validatedData = $request->validate(array_merge($validateLogo,$validateArray));
			$validatedData = $request->validate(array_merge($validateFavicon,$validateArray));
			$year 	= date("Y");
			$month 	= date("m");
		   // dd($request->logo->getClientOriginalExtension());
			if(!empty($request->input('uplodedlogo')) && !is_null($request->logo)){
				$logo 	    = time().'.'.$request->logo->getClientOriginalExtension();
				$logourl    = url('/')."/$year/$month/".$logo;
				$directory = public_path()."/$year/$month/";
				if (!file_exists($directory)) {
					FIle::makeDirectory($directory,0755, true);
				}
				
				$request->logo->move($directory, $logo);
			}else{
				$logourl    = $request->input('uplodedlogo');
				
			}
			if(!empty($request->input('uplodedfavicon')) && !is_null($request->favicon)){
				echo "helo";
				dd($faviconurl);
				$favicon 	    = time().'.'.$request->favicon->getClientOriginalExtension();
				$faviconurl    	= url('/')."/$year/$month/".$favicon;
				$directory 		= public_path()."/$year/$month/";
				if (!file_exists($directory)) {
					FIle::makeDirectory($directory,0755, true);
				}
				
				$request->favicon->move($directory, $favicon);
			}else{
				$faviconurl    = $request->input('uplodedfavicon');
				
			}
			dd($faviconurl);
			Setting::updateOrCreate([
					'key' 	=> 'global',
				],
				[
				'value' => json_encode([
							'logo' 		    	=> $logourl,
							'favicon' 		    => $faviconurl,
							'site_name' 		=> $request->input('site_name'),
							'default_email' 	=> $request->input('default_email'),
							'pagination' 		=> $request->input('pagination'),
							'theme' 			=> $request->input('theme'),
							'currency' 			=> $request->input('currency'),
							'auto_create_user' 	=> $request->input('auto_create_user')?? 'no',
							'date_format' 		=> $request->input('date_format'),
							'language' 			=> $request->input('language'),
						]
				)]
			);
		
			
			
			return redirect('settings/global')->with('success', 'Setting saved successfully!');
		}
		
		$global = Setting::where('key','=','global')->first();
		if($global != null)
			$global->value = json_decode($global->value);
		
		//dd($global);
		return view('settings.global', ['global' => $global]);
	}
	
	public function payment(Setting $setting, Request $request)
	{
		if ($request->isMethod('post')) {
			
			$validatedData = $request->validate([
				'paypal_enable' => 'required',
				'mode' 			=> 'required',
			]);
			
			Setting::updateOrCreate([
					'key' 	=> 'payment',
				],
				[
				'value' => json_encode([
							'paypal_enable' 	=> $request->input('paypal_enable'),
							'mode' 				=> $request->input('mode'),
							'fixed_charge' 		=> $request->input('fixed_charge'),
							'sanbox_email' 		=> $request->input('sanbox_email'),
							'sanbox_secret' 	=> $request->input('sanbox_secret'),
							'sandbox_client_id' => $request->input('sandbox_client_id'),
							'live_email' 		=> $request->input('live_email'),
							'live_secret' 		=> $request->input('live_secret'),
							'live_client_id' 	=> $request->input('live_client_id'),
						]
				)]
			);
		
			
			
			return redirect('settings/payment')->with('success', 'Payment Setting saved successfully!');
		}
		
		$payment = Setting::where('key','=','payment')->first();
		if($payment != null)
			$payment->value = json_decode($payment->value);
		
		return view('settings.payment', ['payment' => $payment]);
	}
	
	public function tax(Setting $setting, Request $request)
	{
		if ($request->isMethod('post')) {
			
			$validatedData = $request->validate([
				'tax_name' 		=> 'required',
				'percentage' 	=> 'required',
			]);
			
			Setting::updateOrCreate([
					'key' 	=> 'tax',
				],
				[
				'value' => json_encode([
							'tax_name' 		=> $request->input('tax_name'),
							'percentage' 	=> $request->input('percentage'),
							'status' 		=> $request->input('status')?? 'inactive',
						]
				)]
			);
		
			
			
			return redirect('settings/tax')->with('success', 'Tax setting saved successfully!');
		}
		
		$tax = Setting::where('key','=','tax')->first();
		if($tax != null)
			$tax->value = json_decode($tax->value);
		
		return view('settings.tax', ['tax' => $tax]);
	}
	
	public function business(Setting $setting, Request $request)
	{
		if ($request->isMethod('post')) {
			
			$validatedData = $request->validate([
				'business_name' => 'required',
				'email' 		=> 'required|email',
				'taxt_info' 	=> 'required',
				'phone' 		=> 'required',
				'address' 		=> 'required',
				'city' 			=> 'required',
				'state' 		=> 'required',
				'country' 		=> 'required',
			]);
			
			Setting::updateOrCreate([
					'key' 	=> 'business',
				],
				[
				'value' => json_encode([
							'business_name' => $request->input('business_name'),
							'email' 		=> $request->input('email'),
							'taxt_info' 	=> $request->input('taxt_info'),
							'phone' 		=> $request->input('phone'),
							'address' 		=> $request->input('address'),
							'city' 			=> $request->input('city'),
							'state' 		=> $request->input('state'),
							'country' 		=> $request->input('country'),
						]
				)]
			);
		
			
			
			return redirect('settings/business')->with('success', 'Business setting saved successfully!');
		}
		
		$business = Setting::where('key','=','business')->first();
		if($business != null)
			$business->value = json_decode($business->value);
		//dd($business);
		return view('settings.business', ['business' => $business]);
	}
	
    
}
