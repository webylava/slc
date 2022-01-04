<x-app-layout>
	@section('breadcrumb') 
		@parent
		<li>
		<a href="javascript:void();" class="text-gray-500" aria-current="page">{{ __('Sales') }}</a>
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
						<a href="{{ url('sales/create') }}">
							<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
								<div class="p-3 mr-4 text-orange-500 bg-blue-400 rounded-full dark:text-orange-100 dark:bg-orange-500">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
									</svg>
								</div>
								<div>
									<p class="text-sm font-medium text-gray-600 font-bold dark:text-gray-400"> {{ __('Add Invoice') }} </p>
								</div>
							</div>
						</a>
						<!-- Card -->
						<a href="{{ url('users/all') }}">
							<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
								<div class="p-3 mr-4 text-orange-500 bg-blue-400 rounded-full dark:text-orange-100 dark:bg-orange-500">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
									</svg>
								</div>
								<div>
									<p class="text-sm font-medium text-gray-600 font-bold dark:text-gray-400">{{ __('List Invoice') }}</p>
								</div>
							</div>
						</a>
					</div>					
				</div>
            </div>
           
          </div>
        </div>
        <!-- ./Client Table -->
	</div>
</x-app-layout>