<x-app-layout>
	@section('breadcrumb') 
		@parent
		<li class="flex items-center">
			<a href="{{ url('settings/crm')}} ">Settings</a>
			<svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
		</li>
		<li>
		<a href="javascript:void();" class="text-gray-500" aria-current="page">Payment Settings</a>
		</li>
	@endsection 
	<div class="relative min-h-screen flex items-center justify-center bg-center bg-gray-50 py-12 px-8 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center">
		<div class="absolute bg-black opacity-60 inset-0 z-0"></div>
		<div class="max-w-full w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
			<div class="grid  gap-8 grid-cols-1">
				<div class="flex flex-col ">
					<div class="mt-5">
						<form method="POST" action="{{ route('settings.payment') }}" enctype="multipart/form-data">
							@csrf
							<div class="bg-blue-700 bg-opacity-75 p-2 mb-6 text-white"><h3>Paypal Settings</h3></div>
							<div class="md:flex flex-row md:space-x-4 w-full text-xs">
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="paypal_enable" :value="__('Enable Paypal Payment Method')" />
									<div class="flex items-center justify-start w-full mb-12">
										<label for="appToggle" class="flex items-center cursor-pointer">
											<!-- toggle -->
											<div class="relative">
												<!-- input -->
												<input type="checkbox" name="paypal_enable" value="yes" id="appToggle" {{ ('yes' == $payment->value->paypal_enable) ? 'checked="checked"' : '' }} class="sr-only">
												<!-- line -->
												<div class="block bg-gray-600 w-14 h-8 rounded-full"></div>
												<!-- dot -->
												<div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition"></div>
											</div>
											<!-- label -->
											<div class="ml-3 text-gray-700 font-medium">Enable</div>
										</label>
									</div>
								</div>	
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="mode" :value="__('Payment Mode')" />
									<div class="flex items-center justify-start w-full mb-12">
										<label for="modeOfPaypal" class="flex items-center cursor-pointer">
											<!-- toggle -->
											<div class="relative">
												<!-- input -->
												<input type="checkbox"  {{ ('live' == $payment->value->mode) ? 'checked="checked"' : '' }}  name="mode" value="live" id="modeOfPaypal" class="sr-only">
												<!-- line -->
												<div class="block bg-gray-600 w-14 h-8 rounded-full"></div>
												<!-- dot -->
												<div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition"></div>
											</div>
											<!-- label -->
											<div class="ml-3 text-gray-700 font-medium">Live</div>
										</label>
									</div>
								</div>	
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="fixed_charge" :value="__('Fixed Charges')" />
									<x-input id="fixed_charge" placeholder="Fixed Charges" class="block mt-1 w-full" type="text" name="fixed_charge" :value="old('fixed_charge') ?? $payment->value->fixed_charge ?? old('fixed_charge')"  required autofocus />
								</div>
							</div>
							<div class="p-4">
								<hr/>
							</div>							
							<div class="md:flex flex-row md:space-x-4 w-full text-xs">
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="sanbox_email" :value="__('Sandbox Account Email')" />
									<x-input id="sanbox_email" placeholder="Sandbox account email" class="block mt-1 w-full" type="text" name="sanbox_email" :value="old('sanbox_email') ?? $payment->value->sanbox_email ?? old('sanbox_email')" required autofocus />
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="sanbox_secret" :value="__('Sandbox Secret Key')" />
									<x-input id="sanbox_secret" placeholder="Add sanbox secret key" class="block mt-1 w-full" type="text" name="sanbox_secret" :value="old('sanbox_secret') ?? $payment->value->sanbox_secret ?? old('sanbox_secret')"  required autofocus />
								</div>								
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="sandbox_client_id" :value="__('Sandbox Client ID')" />
									<x-input id="sandbox_client_id" placeholder="Add sanbox client ID" class="block mt-1 w-full" type="text" name="sandbox_client_id" :value="old('sandbox_client_id') ?? $payment->value->sandbox_client_id ?? old('sandbox_client_id')" required autofocus />
								</div>
							</div>
							<div class="p-4">
								<hr/>
							</div>
							<div class="md:flex flex-row md:space-x-4 w-full text-xs">
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="live_email" :value="__('Live Account Email')" />
									<x-input id="live_email" placeholder="Live account email" class="block mt-1 w-full" type="text" name="live_email" :value="old('live_email') ?? $payment->value->live_email ?? old('live_email')" required autofocus />
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="live_secret" :value="__('Live Secret Key')" />
									<x-input id="live_secret" placeholder="Add live secret key" class="block mt-1 w-full" type="text" name="live_secret" :value="old('live_secret') ?? $payment->value->live_secret ?? old('live_secret')"  required autofocus />
								</div>								
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="live_client_id" :value="__('Live Client ID')" />
									<x-input id="live_client_id" placeholder="Add live client ID" class="block mt-1 w-full" type="text" name="live_client_id" :value="old('live_client_id') ?? $payment->value->live_client_id ?? old('live_client_id')" required autofocus />
								</div>
							</div>
							<p class="text-xs text-red-500 text-right my-3">Required fields are marked with an asterisk <abbr title="Required field">*</abbr></p>
							<div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
								<button class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100"> Cancel </button>
								<button class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>
