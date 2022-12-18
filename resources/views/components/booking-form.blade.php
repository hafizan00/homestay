<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Tempahan penginapan di Inap Desa') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Sila isi maklumat dibawah.') }}
        </p>
    </header>

    <form method="post" action="{{ route('payment.index') }}" class="mt-6 space-y-6">
        @csrf
        @method('get')

        <div class="flex flex-row items-center gap-4">
            <div>
                <x-input-label for="full_name" :value="__('Nama Penuh')" />
                <x-text-input id="full_name" name="full_name" type="text" class="mt-1 block w-full"
                    autocomplete="full_name" />
                <x-input-error :messages="$errors->createBooking->get('full_name')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <div class="flex flex-row items-center gap-4">
            <div>
                <x-input-label for="adult_count" :value="__('Bilangan Dewasa')" />
                <x-text-input id="adult_count" name="adult_count" type="number" min="0" max="5"
                    class="mt-1 block w-full" autocomplete="adult_count" />
                <x-input-error :messages="$errors->createBooking->get('adult_count')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="child_count" :value="__('Bilangan Kanak-kanak')" />
                <x-text-input id="child_count" name="child_count" type="number" min="0" max="5"
                    class="mt-1 block w-full" autocomplete="child_count" />
                <x-input-error :messages="$errors->createBooking->get('child_count')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="check_in" :value="__('Mula')" />
                <x-text-input id="check_in" name="check_in" type="date" class="mt-1 block w-full"
                    autocomplete="check_in" />
                <x-input-error :messages="$errors->createBooking->get('check_in')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="check_out" :value="__('Akhir')" />
                <x-text-input id="check_out" name="check_out" type="date" class="mt-1 block w-full"
                    autocomplete="check_out" />
                <x-input-error :messages="$errors->createBooking->get('check_out')" class="mt-2" />
            </div>
            <div class="hidden">
                <x-input-label for="price" :value="__('Harga')" />
                <x-text-input id="price" name="price" type="number" class="mt-1 block w-full"
                    autocomplete="price" />
                <x-input-error :messages="$errors->createBooking->get('price', 100)" class="mt-2" />
            </div>
        </div>
        <div>
            <x-input-label for="purpose" :value="__('Tujuan')" />
            <x-text-input id="purpose" name="purpose" type="text" class="mt-1 block w-full"
                autocomplete="purpose" />
            <x-input-error :messages="$errors->createBooking->get('purpose')" class="mt-2" />
        </div>





        <div class="flex items-center justify-center gap-4">
            <x-primary-button>
                {{ __('Tempah Sekarang') }}
            </x-primary-button>
            @if (session('status') === 'booking-created')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
