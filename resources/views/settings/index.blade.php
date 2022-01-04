<x-app-layout>
	@section('breadcrumb') 
		@parent
		<li>
		<a href="javascript:void();" class="text-gray-500" aria-current="page">CRM Settings</a>
		</li>
	@endsection 
	<div class="min-h-screen bg-gray-600 bg-opacity-75 py-5">
		<!-- Client Table -->
		
        <div class="mt-4 mx-4 px-4">
          <div class="w-full overflow-hidden rounded shadow-xs">
            <div class="w-full overflow-x-auto">
				<a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-dark-100 bg-white rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="javascript:void();">
				<div class="flex items-center">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
					</svg> <span>Global Setting</span> </div>
				</a>
				<div class="text-white">
					<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
						<!-- Card -->
						<a href="{{ url('settings/crm') }}">
							<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
								<div class="p-3 mr-4 text-orange-500 bg-blue-400 rounded-full dark:text-orange-100 dark:bg-orange-500">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
									</svg>
								</div>
								<div>
									<p class="text-sm font-medium text-gray-600 dark:text-gray-400"> CRM Settings </p>
								</div>
							</div>
						</a>
						<!-- Card -->
						<!-- Card -->
						<a href="{{ url('countries') }}">
							<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
								<div class="p-3 mr-4 text-orange-500 bg-blue-400 rounded-full dark:text-orange-100 dark:bg-orange-500">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
	  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
	</svg>
								</div>
								<div>
									<p class="text-sm font-medium text-gray-600 dark:text-gray-400"> Country Settings </p>
								</div>
							</div>
						</a>
						<!-- Card -->
						<a href="{{ url('settings/users') }}">
							<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
								<div class="p-3 mr-4 text-orange-500 bg-blue-400 rounded-full dark:text-orange-100 dark:bg-orange-500">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
</svg>
								</div>
								<div>
									<p class="text-sm font-medium text-gray-600 dark:text-gray-400"> Users Settings </p>
								</div>
							</div>
						</a>
						<!-- Card -->
						
					</div>					
				</div>
            </div>
           
          </div>
        </div>
        <!-- ./Client Table -->
	</div>
</x-app-layout>