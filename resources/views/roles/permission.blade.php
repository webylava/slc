<x-app-layout>
	@section('breadcrumb') 
		@parent
		<li>
		<a href="javascript:void();" class="text-gray-500" aria-current="page">All permissions</a>
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
                          <h3 class="font-semibold text-base text-white dark:text-gray-50">All permissions to role ({{ $role->name }})</h3>
                        </div>
						
                        <div class="relative w-full max-w-full flex-grow flex-1 text-right">
						@hasanyrole('developer|admin')
                        <a href="{{ url('permissions/create') }}" class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Add</a>
                        @endhasanyrole
						</div>
					</div>
				</div>
				<div class="p-6 bg-white">
					<form method="POST" action="{{ route('roles.permissions',$role->id) }}" enctype="multipart/form-data">
						@csrf
					  <span class="text-gray-700">Select Permissions</span>
					  <div class="mt-2">
						<div>						
						  <label class="inline-flex items-center">
							<input type="checkbox" onclick="toggleAllCheckboxes( )"  class="form-checkbox"><span class="ml-2 font-bold">Select All</span> 
						  </label>
						</div>
						@if (count($permissions) > 0)
						@foreach ($permissions as $permission)
							<div>
							  <label class="inline-flex items-center">
							  <input type="checkbox" {!! (in_array($permission->id, $granted))? "checked='checked'":"" !!} name="permission[]"  value="{{ $permission->id }}" class="form-checkbox" >
								<span class="ml-2">{{ $permission->name }}</span>
							  </label>
							</div>
						@endforeach
						@endif
					  </div>
					<div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
						<button class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100"> Cancel </button>
						<button class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Save</button>
					</div>
					</form>
				</div>			   

            </div>
          </div>
        </div>
        <!-- ./Client Table -->
		@push('app-js')
		<script>
			function toggleAllCheckboxes(elementName) {
				
				const checkboxes = document.getElementsByClassName("form-checkbox");
				console.log(checkboxes);
					Array.from(checkboxes).forEach(function (ele) {
					ele.setAttribute('checked','checked');
				});
			}
		</script>
		@endpush
	</div>
</x-app-layout>
