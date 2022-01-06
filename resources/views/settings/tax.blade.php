<x-app-layout>
	@section('breadcrumb') 
		@parent
		<li class="flex items-center">
			<a href="{{ url('settings/crm')}} ">Settings</a>
			<svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
		</li>
		<li>
		<a href="javascript:void();" class="text-gray-500" aria-current="page">Tax Settings</a>
		</li>
	@endsection 
	<div class="relative min-h-screen flex items-start justify-center bg-center bg-gray-50 py-9 px-9 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover">
		<div class="absolute bg-black opacity-60 inset-0 z-0"></div>
		<div class="max-w-full w-full space-y-8 p-10 bg-white rounded-lg shadow-lg z-10">
			<div class="grid  gap-8 grid-cols-1">
				<div class="flex flex-col ">
					<div class="mt-5">
						<form method="POST" action="{{ route('settings.tax') }}" enctype="multipart/form-data">
							@csrf
							
							<div class="md:flex flex-row md:space-x-4 pb-6 w-full text-xs">
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="tax_name" :value="__('Tax name')" />
									<x-input id="tax_name" placeholder="Tax name" class="block mt-1 w-full" type="text" name="tax_name" :value="old('tax_name') ?? $tax->value->tax_name ?? old('tax_name')"  required autofocus />
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="percentage" :value="__('Percentage')" />
									<x-input id="percentage" placeholder="Percentage" class="block mt-1 w-full" type="number" name="percentage" :value="old('percentage') ?? $tax->value->percentage ?? old('percentage')"  required autofocus />
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="status" :value="__('Status')" />
									<div class="flex items-center justify-start w-full mb-12">
										<label for="appToggle" class="flex items-center cursor-pointer">
											<!-- toggle -->
											<div class="relative">
												<!-- input -->
												<input type="checkbox" name="status" value="active" id="appToggle"   class="sr-only" {{ ('active' == $tax->value->status) ? 'checked="checked"' : '' }} >
												<!-- line -->
												<div class="block bg-gray-600 w-14 h-8 rounded-full"></div>
												<!-- dot -->
												<div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition"></div>
											</div>
											<!-- label -->
											<div class="ml-3 text-gray-700 font-medium">Enable</div>
										</label>
									</div>
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
		</div>
	</div>
	@push('app-js')
<script>
	function showImage() {
		return {
			showPreview(event) {
				if (event.target.files.length > 0) {
					var src = URL.createObjectURL(event.target.files[0]);
					var preview = document.getElementById("preview");
					preview.src = src;
					preview.style.display = "block";
				}
			}
		}
	}
</script>
@endpush

</x-app-layout>
