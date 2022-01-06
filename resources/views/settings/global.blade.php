<x-app-layout>
	@section('breadcrumb') 
		@parent
		<li class="flex items-center">
			<a href="{{ url('settings/crm')}} ">Settings</a>
			<svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
		</li>
		<li>
		<a href="javascript:void();" class="text-gray-500" aria-current="page">Global Settings</a>
		</li>
	@endsection 
	<div class="relative min-h-screen flex items-start justify-center bg-center bg-gray-50 py-9 px-9 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover">
		<div class="absolute bg-black opacity-60 inset-0 z-0"></div>
		<div class="max-w-full w-full space-y-8 p-10 bg-white rounded-lg shadow-lg z-10">
			<div class="grid  gap-8 grid-cols-1">
				<div class="flex flex-col ">
					<div class="mt-5">
						<form method="POST" action="{{ route('settings.global') }}" enctype="multipart/form-data">
							@csrf
							<div class="md:flex flex-row md:space-x-4 mb-6 w-full text-xs">
								<div class="mb-3 space-y-2 w-xs text-xs">
									<x-label for="logo" :value="__('CRM Logo')" />
									<div x-data="showImage()" class="flex items-center justify-start ">
										<div class="bg-white rounded-lg shadow-xl md:w-9/12 lg:w-full">
											<div class="m-4">
												<label class="inline-block mb-2 text-gray-500">Upload Image(jpg,png)</label>
												<div class="flex items-center justify-center w-full">
													<label
														class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
														<div class="relative flex flex-col items-center justify-center pt-7">
															
															<svg xmlns="http://www.w3.org/2000/svg"
																class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
																fill="currentColor">
																<path fill-rule="evenodd"
																	d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
																	clip-rule="evenodd" />
															</svg>
															<p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
																Select a photo</p>
														</div>
														<input type="file" name="logo" class="opacity-0" accept="image/*" @change="showPreview(event,'preview')" />
														<input type="hidden" name="uplodedlogo" value="{{ old('logo', $global->value->logo ?? '') }}" />
													</label>
													
												</div>
											</div>
											<div class="flex p-2 space-x-4">
												<img id="preview" src="{{ old('logo', $global->value->logo ?? '') }}" class="inset-0 w-full">
											</div>
										</div>
									</div>
								</div>							
								<div class="mb-3 space-y-2 w-xs text-xs">
									<x-label for="favicon" :value="__('CRM Favicon')" />
									<div x-data="showImage()" class="flex items-center justify-start ">
										<div class="bg-white rounded-lg shadow-xl md:w-9/12 lg:w-full">
											<div class="m-4">
												<label class="inline-block mb-2 text-gray-500">Upload favicon(jpg,png)</label>
												<div class="flex items-center justify-center w-full">
													<label
														class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
														<div class="relative flex flex-col items-center justify-center pt-7">
															
															<svg xmlns="http://www.w3.org/2000/svg"
																class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
																fill="currentColor">
																<path fill-rule="evenodd"
																	d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
																	clip-rule="evenodd" />
															</svg>
															<p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
																Select a photo</p>
														</div>
														<input type="file" name="favicon" class="opacity-0" accept="image/*" @change="showPreview(event,'preview1')" /> 
														<input type="hidden" name="uplodedfavicon" value="{{ old('favicon', $global->value->favicon ?? '') }}" />
													</label>
													
												</div>
											</div>
											<div class="flex p-2 space-x-4">
												<img id="preview1" src="{{ old('favicon', $global->value->favicon ?? '') }}" class="inset-0 w-full">
											</div>
										</div>
									</div>
								</div>							
							</div>
							<div class="md:flex flex-row md:space-x-4 pb-6 w-full text-xs">
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="site_name" :value="__('Site Name')" />
									<x-input id="site_name" placeholder="Site name" class="block mt-1 w-full" type="text" name="site_name" :value="old('site_name') ?? $global->value->site_name ?? old('site_name')"  required autofocus />
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="default_email" :value="__('Default Email')" />
									<x-input id="default_email" placeholder="Default Email" class="block mt-1 w-full" type="text" name="default_email" :value="old('default_email') ?? $global->value->default_email ?? old('default_email')" required autofocus />
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="pagination" :value="__('Rows Per Page')" />
									<x-input id="pagination" placeholder="Default rows per page" class="block mt-1 w-full" type="text" name="pagination" :value="old('default_email') ?? $global->value->pagination ?? old('pagination')" required autofocus />
								</div>
							</div>
							<div class="md:flex flex-row md:space-x-4  pb-6 w-full text-xs">
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="theme" :value="__('Theme')" />
									<select id="theme" name="theme" class="form-select block w-full mt-1">
										<option value="">Select Theme</option>
										@foreach (config('global.theme') as $t=>$theme)
										<option {{ ($t == $global->value->theme) ? 'selected="selected"' : '' }} value="{{ $t }}">{{ $theme}}</option>
										@endforeach
									</select>
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="currency" :value="__('Currency')" />
									<select id="currency" name="currency" class="form-select block w-full mt-1">
										<option value="">Select currency</option>
										@foreach (config('global.currency') as $c=>$currency)
										<option {{ ($c == $global->value->currency) ? 'selected="selected"' : '' }} value="{{ $c }}">{{ $currency}}</option>
										@endforeach
									</select>
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="auto_create_user" :value="__('Auto create user with new customer')" />
									<div class="flex items-center justify-start w-full mb-12">
										<label for="appToggle" class="flex items-center cursor-pointer">
											<!-- toggle -->
											<div class="relative">
												<!-- input -->
												<input type="checkbox" {{ ('yes' == $global->value->auto_create_user) ? 'checked="checked"' : '' }} name="auto_create_user" value="yes" id="appToggle" class="sr-only">
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
							<div class="md:flex flex-row md:space-x-4  pb-6 w-full text-xs">
								
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="date_format" :value="__('Date Format')" />
									<select id="date_format" name="date_format" class="form-select block w-full mt-1">
										<option value="">Select Date Format</option>
										@foreach (config('global.date_format') as $d=>$date_format)
										<option {{ ($d == $global->value->date_format) ? 'selected="selected"' : '' }} value="{{ $d }}">{{ $date_format}}</option>
										@endforeach
									</select>
								</div>
								<div class="mb-3 space-y-2 w-full text-xs">
									<x-label for="language" :value="__('Language')" />
									<select id="language" name="language" class="form-select block w-full mt-1">
										<option value="">Select Language</option>
										@foreach (config('global.language') as $l=>$language)
										<option {{ ($l == $global->value->language) ? 'selected="selected"' : '' }} value="{{ $l }}">{{ $language}}</option>
										@endforeach
									</select>
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
			showPreview(event,elementID) {
				if (event.target.files.length > 0) {
					var src = URL.createObjectURL(event.target.files[0]);
					var preview = document.getElementById(elementID);
					preview.src = src;
					preview.style.display = "block";
				}
			}
		}
	}
</script>
@endpush

</x-app-layout>
