<x-app-layout>
	@section('breadcrumb') 
		@parent
		<li class="flex items-center">
			<a href="{{ url('settings')}} ">Settings</a>
			<svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
		</li>
		<li>
		<a href="javascript:void();" class="text-gray-500" aria-current="page">All companies</a>
		</li>
	@endsection 
	<div class="min-h-screen bg-gray-600 bg-opacity-75 py-5">
		<!-- Client Table -->
		
		<div class="mt-4 mx-4 px-4">
		  <div class="w-full overflow-hidden rounded shadow-xs">
			<div class="w-full overflow-x-auto">
				<div class="bg-gray-800 text-white">
					<div class="flex flex-wrap items-center px-4 py-3">
						<div class="relative w-full max-w-full flex-grow flex-1">
						  <h3 class="font-semibold text-base text-white dark:text-gray-50">All companies</h3>
						</div>
						<div class="relative w-full max-w-full flex-grow flex-1 text-right">
						@hasanyrole('developer|admin')
						<a href="{{ url('companies/create') }}" class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Add</a>
						@endhasanyrole
						</div>
					</div>
				</div>
			  <table class="w-full">
				<thead>
				  <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
					<th class="px-4 py-3">ID</th>
					<th class="px-4 py-3">Name</th>
					<th class="px-4 py-3">Website</th>
					<th class="px-4 py-3">Phone</th>
					<th class="px-4 py-3">Address</th>
					<th class="px-4 py-3">Action</th>
				  </tr>
				</thead>
				<tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
				  @if (count($companies) > 0)
				  @foreach ($companies as $company)
				  <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
					<td class="px-4 py-3 text-sm">{{ $company->id }}</td>
					<td class="px-4 py-3 text-sm">{{ $company->name }}</td>
					<td class="px-4 py-3 text-sm">{{ $company->website }}</td>
					<td class="px-4 py-3 text-sm">{{ $company->phone }}</td>
					<td class="px-4 py-3 text-sm">{{ $company->address }}</td>
					<td class="px-4 py-3">
					  <div class="flex items-center space-x-4 text-sm">
						<a href="{{ route('companies.edit',$company->id) }}" class="flex items-center justify-between  py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray">
						  <svg
							class="w-5 h-5"
							aria-hidden="true"
							fill="currentColor"
							viewBox="0 0 20 20"
						  >
							<path
							  d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
							></path>
						  </svg>
						</a>
						<form action="{{ route('companies.destroy',$company->id) }}" method="POST" class="d-inline single_form">
						@csrf
						@method('DELETE')
						<button onclick="return confirm('Are you sure you want to delete this item?');"
						  class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
						  aria-label="Delete"
						>
						  <svg
							class="w-5 h-5"
							aria-hidden="true"
							fill="currentColor"
							viewBox="0 0 20 20"
						  >
							<path
							  fill-rule="evenodd"
							  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
							  clip-rule="evenodd"
							></path>
						  </svg>
						</button>
						</form>
					  </div>
					  </td>
				  </tr>
				  @endforeach
				@else
			  <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
			  <td colspan="6" class="px-4 py-3 text-sm">No records available</td>
			  </tr>                    
				@endif
				</tbody>
			  </table>
			</div>
			<div class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
			  {{ $companies->links() }}
			</div>
		  </div>
		</div>
        <!-- ./Client Table -->
	</div>
</x-app-layout>