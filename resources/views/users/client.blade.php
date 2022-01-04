<x-app-layout>
	@section('breadcrumb') 
		@parent
		<li class="flex items-center">
			<a href="{{ url('users')}} ">Users</a>
			<svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
		</li>
		<li>
		<a href="javascript:void();" class="text-gray-500" aria-current="page">Create</a>
		</li>
	@endsection 
	<div class="relative min-h-screen flex items-center justify-center bg-center bg-gray-50 py-12 px-8 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center">
		<div class="absolute bg-black opacity-60 inset-0 z-0"></div>
		<div class="max-w-full w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
			<div class="grid  gap-8 grid-cols-1">
				<div class="flex flex-col ">
					<div class="mt-5">
						<form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
							@csrf
							<input type="hidden" name="role" value="client" />
							<div class="md:flex flex-row md:space-x-4 w-full text-xs">
								<div class="md:flex flex-row md:space-x-4 w-full text-xs">
									<div class="mb-3 space-y-2  text-xs">
										<x-label for="add_date" :value="__('Date')" />
										<x-input id="add_date" placeholder="" class="block mt-1 w-full" type="date" name="add_date" :value="old('add_date') ?? $user->add_date ?? old('add_date')" required autofocus />
									</div>
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="first_name" :value="__('First Name')" />
									<x-input id="first_name" placeholder="First name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name') ?? $user->first_name ?? old('first_name')" required autofocus />
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="last_name" :value="__('Last Name')" />
									<x-input id="last_name" placeholder="Last name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name') ?? $user->last_name ?? old('last_name')" required autofocus />
								</div>							
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="email" :value="__('Email')" />
									<x-input id="email" placeholder="Email" class="block mt-1 w-full" type="text" name="email" :value="old('email') ?? $user->email ?? old('email')"  required autofocus />
								</div>
								
							</div>
							<div class="md:flex flex-row md:space-x-4 w-full text-xs">
								
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="company_name" :value="__('Company Name')" />
									<x-input id="company_name" placeholder="Company name" class="search block mt-1 w-full" type="text" name="company_name" :value="old('company_name') ?? $user->company_name ?? old('company_name')"  required autofocus />
									<ul class="suggestions z-50 w-full rounded-lg mt-2 mb-3 text-blue-800">
									</ul>
									<input type="hidden" name="company_id" id="company_id" value="" />
								</div>								
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="website" :value="__('Company Website')" />
									<x-input id="website" placeholder="Company website" class="block mt-1 w-full" type="text" name="website" :value="old('website') ?? $user->website ?? old('website')"  required autofocus />
									
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="phone" :value="__('Phone')" />
									<x-input id="phone" placeholder="Phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone') ?? $user->phone ?? old('phone')"  required autofocus />
								</div>
							</div>
							
							<div class="md:flex flex-row md:space-x-4 w-full text-xs">
							
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="key_phrases" :value="__('Domains / Key Phrases')" />
									<textarea class="form-textarea mt-1 appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-300 rounded-lg px-4 block w-full" name="key_phrases" id="key_phrases" rows="3" placeholder="Domains / Key Phrases"></textarea>
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="notes" :value="__('Notes')" />
									<textarea class="form-textarea mt-1 appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-300 rounded-lg px-4 block w-full" name="notes" id="notes" rows="3" placeholder="Notes"></textarea>
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="address" :value="__('Address')" />
									<textarea class="form-textarea mt-1 appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-300 rounded-lg px-4 block w-full" name="address" id="address" rows="3" placeholder="Address"></textarea>
								</div>
							</div>
							<div class="bg-blue-700 bg-opacity-75 p-2 mt-4 mb-6 text-white"><h3>Card Details</h3></div>
							<div class="md:flex flex-row md:space-x-4 w-full text-xs">
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="nameoncard" :value="__('Name On Card')" />
									<x-input id="nameoncard" placeholder="Name on card" class="block mt-1 w-full" type="text" name="nameoncard" :value="old('nameoncard') ?? $user->nameoncard ?? old('nameoncard')" required autofocus />
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="card_number" :value="__('Card Number')" />
									<x-input id="card_number" placeholder="Name on card" class="block mt-1 w-full" type="text" name="card_number" :value="old('card_number') ?? $user->card_number ?? old('card_number')" required autofocus />
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="expiry" :value="__('Expiry')" />
									<x-input id="expiry" placeholder="Expiry" class="block mt-1 w-full" type="text" name="expiry" :value="old('expiry') ?? $user->expiry ?? old('expiry')" required autofocus />
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="cvv" :value="__('CV2 / CVS')" />
									<x-input id="cvv" placeholder="cvv" class="block mt-1 w-full" type="text" name="cvv" :value="old('cvv') ?? $user->cvv ?? old('cvv')" required autofocus />
								</div>
							</div>
							<div class="md:flex flex-row md:space-x-4 w-full text-xs">
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="account_holder" :value="__('Account Holder')" />
									<x-input id="account_holder" placeholder="Account holder" class="block mt-1 w-full" type="text" name="account_holder" :value="old('account_holder') ?? $user->account_holder ?? old('account_holder')" required autofocus />
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="account_number" :value="__('Account Number')" />
									<x-input id="account_number" placeholder="Account number" class="block mt-1 w-full" type="text" name="account_number" :value="old('account_number') ?? $user->account_number ?? old('account_number')" required autofocus />
								</div>							
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="sort_code" :value="__('Sort Code')" />
									<x-input id="sort_code" placeholder="Sort code" class="block mt-1 w-full" type="text" name="sort_code" :value="old('sort_code') ?? $user->sort_code ?? old('sort_code')" required autofocus />
								</div>							
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="registered_address" :value="__('Registered Address')" />
									<textarea class="form-textarea mt-1 appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-300 rounded-lg px-4 block w-full" name="registered_address" id="registered_address" rows="3" placeholder="Registered address"></textarea>
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