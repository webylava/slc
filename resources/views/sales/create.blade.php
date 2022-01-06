<x-app-layout>
	@section('breadcrumb') 
		@parent
		<li class="flex items-center">
			<a href="{{ url('sales')}} ">{{ __('Sales') }}</a>
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
						<form method="POST" action="{{ route('sales.store') }}" enctype="multipart/form-data">
							@csrf
							<div class="md:flex flex-row md:space-x-4 w-full text-xs">
							
								
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="title" :asterisk="true" :value="__('Invoice Title')" />
									<x-input id="title" placeholder="Invoice title" class="block mt-1 w-full" type="text" name="title" required autofocus />
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="user_id" :asterisk="true" :value="__('Select Client')" />
									<select id="user_id" name="user_id" class="w-full">
									<option value="">--- Select client ---</option>
									@foreach ($clients as $key => $value)
									<option value="{{ $value->id }}" >{{ $value->name }}</option>
									@endforeach
									</select>
								</div>
							</div>
							<div class="md:flex flex-row md:space-x-4 w-full text-xs">
								<div class="mb-0 space-y-1 w-full text-xs">
									<div class="mb-0 space-y-1 w-full text-right text-xs">
									<a
									  class="inline-flex justify-end px-3 py-0 text-sm font-light leading-2 text-white transition-colors duration-150 bg-gray-600 border border-transparent active:bg-gray-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-gray"
									  href="{{ url('users/create', 'client') }}"
									>								  
									  <span>Add new client &RightArrow;</span>
									</a>
								</div>
								</div>
							</div>
							
							<p class="text-xs text-red-500 text-right my-3">Required fields are marked with an asterisk <abbr title="Required field">*</abbr></p>
							<div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
								<button class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100"> Cancel </button>
								<button class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Save</button>
							</div>
						</form>
						@if( request()->get('user_id') )
						<form method="POST" action="{{ route('sales.create') }}" enctype="multipart/form-data">
							@csrf
							<div class="md:flex flex-row md:space-x-4 w-full text-xs">
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="invoice_date" :value="__('Date')" />
									<x-input id="invoice_date" placeholder="" class="block mt-1 w-full" type="date" name="invoice_date" :value="old('invoice_date') ?? $user->invoice_date ?? old('invoice_date')" required autofocus />
								</div>

								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="price" :value="__('Price')" />
									<x-input id="price" placeholder="Price" class="block mt-1 w-full" type="text" name="price" :value="old('price') ?? $user->price ?? old('price')"  required autofocus />
								</div>	
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="reference_number" :value="__('Reference Number')" />
									<x-input id="reference_number" placeholder="Reference number" class="block mt-1 w-full" type="text" name="reference_number" :value="old('reference_number') ?? $user->reference_number ?? old('reference_number')"  required autofocus />
									<button class=" border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">
									Cancel
									</button>
								</div>
							
							</div>
							
							<p class="text-xs text-red-500 text-right my-3">Required fields are marked with an asterisk <abbr title="Required field">*</abbr></p>
							<div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
								<button class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100"> Cancel </button>
								<button class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Save</button>
							</div>
						</form>
						@endif
					</div>
				</div>
			</div>
			@push('app-js')
			<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
			<script type="text/javascript">
			 
				const endpoint = "{{ route('companies.autocomplete') }}";
				let companies = []

				fetch(endpoint)
					.then(blob => blob.json())

					.then(data => companies.push(...data)) // use spread operator
				console.log(companies)

				function findMatches(wordToMatch, companies) {

					return companies.filter(company => {

						const regex = new RegExp(wordToMatch, 'gi') //g = global, i = insensitive
						return company.name.match(regex) || company.website.match(regex)
					})
				}

				function displayMatches() {

					const matchArray = findMatches(this.value, companies)

					const html = matchArray.map(company => {
						const regex = new RegExp(this.value, 'gi')

						const companyName = company.name.replace(regex, `<span class="hl">${this.value}</span>`)
						const website = company.website.replace(regex, `<span class="hl">${this.value}</span>`)
						
						return `<li onclick="selectedCompany(this)" class="bg-blue-700 sug text-white p-1 mb-1 flex" id="${company.id}">
							<svg xmlns="http://www.w3.org/2000/svg"  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
							</svg>
						  <span class="ml-2">${companyName}</span>, ${website}
						</li>`
					}).join('')
					suggestions.innerHTML = html
					document.getElementById('website').disabled = false;
					document.getElementById('phone').disabled = false;					
				}
				
				const searchInput = document.querySelector('.search')
				const suggestions = document.querySelector('.suggestions')
				
				selectedCompany = (e) => {
					document.querySelectorAll('.sug').forEach(elem => elem.style.backgroundColor = '');
					e.style.backgroundColor = 'red';
					document.getElementById('company_id').value = e.id;
					document.getElementById('website').disabled = true;
					document.getElementById('phone').disabled = true;
					suggestions.innerHTML = '';
					document.getElementById('company_name').value = e.childNodes[3].textContent;
					console.log(e.childNodes);
				}

				searchInput.addEventListener('change', displayMatches)
				searchInput.addEventListener('keyup', displayMatches)
				suggestions.addEventListener('mouseover', function(event) {
					document.activeElement.blur()
				});

				
			</script>
			@endpush

		</div>
</x-app-layout>