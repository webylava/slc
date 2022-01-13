<x-app-layout>
	@section('breadcrumb') 
		@parent
		<li class="flex items-center">
			<a href="{{ url('sales')}} ">Sales</a>
			<svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
		</li>
		<li>
		<a href="javascript:void();" class="text-gray-500" aria-current="page">Create</a>
		</li>
	@endsection 
	<div class="relative min-h-screen flex items-start justify-center bg-center bg-gray-50 py-9 px-9 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover">
	<div class="absolute bg-black opacity-60 inset-0 z-0"></div>
		<div class="max-w-full w-full space-y-8 p-10 bg-white rounded-lg shadow-lg z-10">
			<div class="grid  gap-8 grid-cols-1">
				<div class="flex flex-col ">
					<div class="mt-5">
						<form method="POST" action="{{ route('sales.update',$sale->id) }}" >
							@method('PUT')
							@csrf
							
							<div class="w-full text-xs">
								<div class="flex justify-end ">
								<button
								class="p-1 flex text-sm font-medium leading-5 text-white transition-colors duration-150 bg-yellow-400 border border-transparent active:bg-yellow-400 hover:bg-yellow-400 focus:outline-none focus:shadow-outline-yellow uppercase"
								>
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
								</svg>
								{{ $sale->status }}
								</button>
								</div>
								<div class="grid gap-6 mb-8 md:grid-cols-2">
								  <div class="min-w-0 p-4 text-white bg-gray-600 shadow-xs">
									<h3 class="mb-4 uppercase font-semibold">Client Information</h3>
									<div class="flex mb-2">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
										</svg>
										<span class="px-2 py-0 mt-1">{{ $sale->user->name }}</span>
									</div>
									<div class="flex mb-2">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
										</svg>
										<span class="px-2 py-0 mt-1">{{ $sale->user->email }}</span>  
									</div>
									<div class="flex mb-2">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
										</svg>
										<span class="px-2 py-0 mt-1">
											{{ $sale->user->getmeta('registered_address') }}
										</span>
									</div>
									<div class="flex mb-2">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
										</svg>
										<span class="px-2 py-0 mt-1">
											{{ $sale->user->getmeta('phone') }}
										</span>
									</div>
									<div class="flex mb-2">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
										</svg>
										<span class="px-2 py-0 mt-1">
											{{ $sale->user->getmeta('company_name') }}
										</span>
									</div>
								  </div>
								  <div class="min-w-0 p-4 text-white bg-purple-600 shadow-xs">
									<h3 class="mb-4 uppercase font-semibold">Invoice Information</h3>
									<div class="flex mb-2">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
										</svg>
										<span class="px-2 py-0 mt-1">
											{{ $sale->invoice_no }}
										</span>
									</div>
									<div class="flex mb-2">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
										</svg>
										<span class="px-2 py-0 mt-1">
											{{ $sale->invoice_date }}
										</span>
									</div>
									<div class="flex mb-2">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
										</svg>
										<span class="px-2 py-0 mt-1 uppercase font-bold">
											{{ $sale->status }}
										</span>
									</div>
									<div class="flex mb-2">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 9a2 2 0 10-4 0v5a2 2 0 01-2 2h6m-6-4h4m8 0a9 9 0 11-18 0 9 9 0 0118 0z" />
										</svg>
										<span class="px-2 py-0 mt-1 uppercase">
											{{ $sale->notes }}
										</span>
									</div>
									<div class="flex mb-2">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
										</svg>
										<span class="px-2 py-0 mt-1 uppercase">
											{{ $sale->notes }}
										</span>
									</div>
									
								  </div>
								</div>							
							</div>
							<div class="md:flex flex-row md:space-x-4 w-full text-xs mb-4">
								<div class="w-full overflow-x-auto">
									<div class="bg-gray-800 text-white">
										<div class="flex flex-wrap items-center px-4 py-3">
											<div class="relative w-full max-w-full flex-grow flex-1">
											  <h3 class="font-semibold text-base text-white dark:text-gray-50">Invoice Items</h3>
											</div>
										</div>
									</div>
									
									  <table class="w-full" id="invoice">
										<thead>
										  <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
											<th class="px-4 py-3">Title</th>
											<th class="px-4 py-3">Qty</th>
											<th class="px-4 py-3">Amount</th>
											<th class="px-4 py-3">Action</th>
										  </tr>
										</thead>
										<tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
										  <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
												<td class="px-4 py-3 text-sm">
													<x-input id="title" placeholder="Item title" class="block mt-1 w-full txttitle" type="text" data-tname="invoiceitems[title]" required autofocus />
												</td>
												<td class="px-4 py-3 text-sm">
													<x-input id="qty" placeholder="Quantity" class="block mt-1 w-full" type="text" data-tname="invoiceitems[qty]" :value="empty(old('qty'))? $sale->qty:old('qty')" required autofocus />
												</td>
												<td class="px-4 py-3 text-sm"><x-input id="amount" placeholder="Amount" class="block mt-1 w-full" type="text" data-tname="invoiceitems[amount]" :value="empty(old('amount'))? $sale->amount:old('amount')" required autofocus /></td>
												<td class="px-4 py-3">
												  <div class="flex items-center space-x-4 text-sm">
													<a href="javascript:void(0);" class="flex items-center justify-between  py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray add-item">
														<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
														</svg>
													</a> 
													<a href="javascript:void(0);" class="flex items-center justify-between  py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray del-item">
														<svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
															<path
															  fill-rule="evenodd"
															  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
															  clip-rule="evenodd"
															></path>
														  </svg>
													</a> 
												  </div>
												  </td>
											  </tr>
										  </tbody>
									  </table>
								</div>							
							</div>
							<div class="md:flex flex-row md:space-x-4 w-full text-xs">
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="details" :value="__('Details')" />
									<textarea class="form-textarea mt-1 appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-300 rounded-lg px-4 block w-full" name="details" id="details" rows="3" placeholder="details">{{ empty(old('details'))? $sale->details:old('details') }}</textarea>
								</div>
							</div>

							<p class="text-xs text-red-500 text-right my-3">Required fields are marked with an asterisk <abbr title="Required field">*</abbr></p>
							<div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
								<a href="{{url()->previous()}}" class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100"> Cancel </a>
								<button class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		@push('app-js')
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<script type="text/javascript">
			function genrateName(){
				$("#invoice tr").each(function(i) {
					$(this).find(':input').each(function(j) {
						$(this).attr('name', $(this).data('tname') + '['+i+']');
					});
				});
			}
			$(document).ready(function(){
				$(document).on("click", "a.add-item" , function() {
					$('#invoice tr:last').after($(this).closest ('tr').clone().find("input:text").val("").end());
					$(this).hide();
					genrateName();
				});
				$(document).on("click", "a.del-item" , function() {
					if($('#invoice tr').length > 2){
						$(this).closest ('tr').remove();
						$('#invoice tr:last').find("a.add-item").show();
						
					}
					if($('#invoice tr').length <=2)
						$("a.add-item").show(); 
					
					genrateName();
				});
				genrateName();
				
			});
		</script>
		@endpush
	</div>
</x-app-layout>