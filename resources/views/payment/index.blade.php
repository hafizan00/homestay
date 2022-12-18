<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('HOMESTAY INAP DESA SURIA') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class="space-y-6">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Payment Method') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Sila pilih jenis pembayaran') }}
                            </p>
                        </header>

                        {{-- {{ dd($request) }} --}}

                        <div>
                            <div>
                                <x-input-label for="full_name" :value="__('Nama Penuh')" />
                                {{ $request->get('full_name') }}
                            </div>
                            <div>
                                <x-input-label for="email" :value="__('Emel')" />
                                {{ $request->get('email') }}
                            </div>
                            <div>
                                <x-input-label for="adult_count" :value="__('Bilangan Dewasa')" />
                                {{ $request->get('adult_count') }}
                            </div>
                            <div>
                                <x-input-label for="child_count" :value="__('Bilangan Kanak-kanak')" />
                                {{ $request->get('child_count') }}
                            </div>
                            <div>
                                <x-input-label for="check_in" :value="__('Check In')" />
                                {{ $request->get('check_in') }}
                            </div>
                            <div>
                                <x-input-label for="check_out" :value="__('Check Out')" />
                                {{ $request->get('check_out') }}
                            </div>
                            <div>
                                <x-input-label for="price" :value="__('Harga')" />
                                {{ $request->get('price') }}
                            </div>
                            <div>
                                <x-input-label for="purpose" :value="__('Tujuan')" />
                                {{ $request->get('purpose') }}
                            </div>
                        </div>

                        <x-primary-button x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
                            {{ __('Pilih') }}</x-primary-button>

                        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                            <form method="post" class="p-6">
                                {{-- action="{{ route('payment.online') }}" --}}
                                @csrf
                                @method('post')

                                <h2 class="text-lg font-medium text-gray-900">
                                    {{ __('Sila sahkan maklumat tempahan?') }}
                                </h2>

                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('Sila pilih jenis bayaran.') }}
                                </p>

                                <div class="mt-6">
                                    <x-primary-button x-on:click="$dispatch('close')">
                                        {{ __('Online') }}
                                    </x-primary-button>
                                    <x-primary-button x-on:click="$dispatch('close')">
                                        {{ __('Cash') }}
                                    </x-primary-button>
                                </div>

                                <div class="mt-6 flex justify-end">
                                    <x-secondary-button x-on:click="$dispatch('close')">
                                        {{ __('Cancel') }}
                                    </x-secondary-button>
                                </div>
                            </form>
                        </x-modal>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
