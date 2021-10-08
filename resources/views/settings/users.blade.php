<x-app-layout>
	@section('breadcrumb') 
		@parent
		<li class="flex items-center">
			<a href="{{ url('settings')}} ">Settings</a>
			<svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
		</li>
		<li>
		<a href="javascript:void();" class="text-gray-500" aria-current="page">User</a>
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
						<a href="{{ url('roles') }}">
							<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
								<div class="p-3 mr-4 text-orange-500 bg-blue-400 rounded-full dark:text-orange-100 dark:bg-orange-500">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path d="M12 14l9-5-9-5-9 5 9 5z" />
									<path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
									</svg>
								</div>
								<div>
									<p class="text-sm font-medium text-gray-600 dark:text-gray-400"> Roles Settings </p>
								</div>
							</div>
						</a>
						<!-- Card -->
						<a href="{{ url('permissions') }}">
							<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
								<div class="p-3 mr-4 text-orange-500 bg-blue-400 rounded-full dark:text-orange-100 dark:bg-orange-500">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
									</svg>
								</div>
								<div>
									<p class="text-sm font-medium text-gray-600 dark:text-gray-400"> Permissions Settings </p>
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