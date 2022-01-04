<x-app-layout>
	@section('breadcrumb') 
		@parent
		<li>
		<a href="javascript:void();" class="text-gray-500" aria-current="page">{{ __('Clients') }}</a>
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
						<a href="{{ url('users/create', 'client') }}">
							<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
								<div class="p-3 mr-4 text-orange-500 bg-blue-400 rounded-full dark:text-orange-100 dark:bg-orange-500">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
									</svg>
								</div>
								<div>
									<p class="text-sm font-medium text-gray-600 font-bold dark:text-gray-400"> {{ __('Add Client') }} </p>
								</div>
							</div>
						</a>
						<!-- Card -->
						<a href="{{ url('users/all') }}">
							<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
								<div class="p-3 mr-4 text-orange-500 bg-blue-400 rounded-full dark:text-orange-100 dark:bg-orange-500">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
									</svg>

								</div>
								<div>
									<p class="text-sm font-medium text-gray-600 font-bold dark:text-gray-400">{{ __('List Client') }}</p>
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