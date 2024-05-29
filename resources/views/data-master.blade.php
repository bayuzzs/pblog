@extends('layout.dashboard')

@section('main-content')
		<div
				class="custom-scrollbar h-[calc(100vh-150px)] w-full overflow-auto rounded-2xl bg-white p-5 shadow-xl dark:bg-gray-800">
				<p class="mb-1 font-bold leading-tight tracking-tight text-gray-800 dark:text-gray-200 md:text-3xl">
						Kelola Data Master
				</p>
				{{-- Alert info start --}}
				<x-alert.alert-info>
						<span class="font-medium">Informasi!</span> Berhati-hatilah ketika melalukan perubahan pada data.
				</x-alert.alert-info>
				{{-- Alert info end --}}
				<div class="grid grid-cols-2 gap-3 px-3 py-5 lg:grid-cols-3 lg:gap-10 2xl:grid-cols-5">
						@foreach ($dataMasters as $dataMaster)
								<x-data-master-card name="{{ $dataMaster['name'] }}" value="{{ $dataMaster['value'] }}"
										route="{{ $dataMaster['route'] }}"></x-data-master-card>
						@endforeach
				</div>
		</div>
@endsection

@push('script-bawah')
		<script>
				let valueDisplays = document.querySelectorAll(".my-counter");
				let interval = 500;

				valueDisplays.forEach((valueDisplay) => {
						let startValue = 0;
						let endValue = parseInt(valueDisplay.getAttribute("data-val"));
						if (endValue == 0) {
								return;
						}

						let duration = Math.floor(interval / endValue);
						console.log(duration);
						let counter = setInterval(function() {
								startValue += 1;
								valueDisplay.textContent = startValue;
								if (startValue == endValue) {
										clearInterval(counter);
								}
						}, duration);
				});
		</script>
@endpush
