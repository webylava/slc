<x-app-layout>
	@section('breadcrumb') 
		@parent
		<li class="flex items-center">
			<a href="{{ url('settings')}} ">Settings</a>
			<svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
		</li>
		<li>
		<a href="javascript:void();" class="text-gray-500" aria-current="page">CRM</a>
		</li>
	@endsection 
	<div class="min-h-screen bg-gray-600 bg-opacity-75 py-5">
		<!-- Client Table -->
		
        <div class="mt-4 mx-4 px-4">
          <div class="w-full overflow-hidden rounded shadow-xs">
            <div class="w-full overflow-x-auto">
				<div class="text-white">
					<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
						<!-- Card -->
						<a href="{{ url('settings/global') }}">
							<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
								<div class="p-3 mr-4 text-orange-500 bg-blue-400 rounded-full dark:text-orange-100 dark:bg-orange-500">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
									</svg>
								</div>
								<div>
									<p class="text-sm font-medium text-gray-600 font-bold dark:text-gray-400"> GLOBAL SETTINGS </p>
								</div>
							</div>
						</a>
						<!-- Card -->
						<a href="{{ url('settings/payment') }}">
							<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
								<div class="p-3 mr-4 text-orange-500 bg-blue-400 rounded-full dark:text-orange-100 dark:bg-orange-500">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 9a2 2 0 10-4 0v5a2 2 0 01-2 2h6m-6-4h4m8 0a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>
								</div>
								<div>
									<p class="text-sm font-medium text-gray-600 font-bold dark:text-gray-400"> PAYMENT SETTINGS </p>
								</div>
							</div>
						</a>
						<!-- Card -->
						<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
							<div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
								<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
									<path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
								</svg>
							</div>
							<div>
								<p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"> New sales </p>
								<p class="text-lg font-semibold text-gray-700 dark:text-gray-200"> 376 </p>
							</div>
						</div>
						<!-- Card -->
						<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
							<div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
								<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
									<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
								</svg>
							</div>
							<div>
								<p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"> Pending contacts </p>
								<p class="text-lg font-semibold text-gray-700 dark:text-gray-200"> 35 </p>
							</div>
						</div>
					</div>					
					<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
						<!-- Card -->
						<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
							<div class="p-3 mr-4 text-orange-500 bg-blue-400 rounded-full dark:text-orange-100 dark:bg-orange-500">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
								</svg>
							</div>
							<div>
								<p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"> Total clients </p>
								<p class="text-lg font-semibold text-gray-700 dark:text-gray-200"> 6389 </p>
							</div>
						</div>
						<!-- Card -->
						<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
							<div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
								<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
									<path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
								</svg>
							</div>
							<div>
								<p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"> Account balance </p>
								<p class="text-lg font-semibold text-gray-700 dark:text-gray-200"> $ 46,760.89 </p>
							</div>
						</div>
						<!-- Card -->
						<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
							<div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
								<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
									<path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
								</svg>
							</div>
							<div>
								<p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"> New sales </p>
								<p class="text-lg font-semibold text-gray-700 dark:text-gray-200"> 376 </p>
							</div>
						</div>
						<!-- Card -->
						<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
							<div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
								<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
									<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
								</svg>
							</div>
							<div>
								<p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"> Pending contacts </p>
								<p class="text-lg font-semibold text-gray-700 dark:text-gray-200"> 35 </p>
							</div>
						</div>
					</div>					
				</div>
            </div>
           
          </div>
        </div>
        <!-- ./Client Table -->
	</div>
</x-app-layout>