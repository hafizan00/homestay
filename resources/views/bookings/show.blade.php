<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('HOMESTAY INAP DESA SURIA') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @include('sweetalert::sweetalert')
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class="space-y-6">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Maklumat Tempahan') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Sini maklumat tempahan~') }}
                            </p>
                        </header>

                        <div class="container text-center">
                            <div class="row row-cols-4">
                                <div class="col">
                                    <div>
                                        <x-input-label for="full_name" :value="__('Nama Penuh')" />
                                        {{ $booking->full_name }}
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <x-input-label for="email" :value="__('Emel')" />
                                        {{ $booking->email }}
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <x-input-label for="adult_count" :value="__('Bilangan Dewasa')" />
                                        {{ $booking->adult_count }}
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <x-input-label for="check_in" :value="__('Check In')" />
                                        {{ $booking->check_in }}
                                    </div>
                                </div>
                            </div>


                            {{-- <div>
                            <div>
                                <x-input-label for="full_name" :value="__('Nama Penuh')" />
                                {{ $booking->full_name }}
                            </div>
                            <div>
                                <x-input-label for="email" :value="__('Emel')" />
                                {{ $booking->email }}
                            </div>
                            <div>
                                <x-input-label for="adult_count" :value="__('Bilangan Dewasa')" />
                                {{ $booking->adult_count }}
                            </div>
                            <div>
                                <x-input-label for="child_count" :value="__('Bilangan Kanak-kanak')" />
                                {{ $booking->child_count }}
                            </div>
                            <div>
                                <x-input-label for="check_in" :value="__('Check In')" />
                                {{ $booking->check_in }}
                            </div>
                            <div>
                                <x-input-label for="check_out" :value="__('Check Out')" />
                                {{ $booking->check_out }}
                            </div>
                            <div>
                                <x-input-label for="price" :value="__('Harga')" />
                                {{ $booking->price }}
                            </div>
                            <div>
                                <x-input-label for="purpose" :value="__('Tujuan')" />
                                {{ $booking->purpose }}
                            </div>
                        </div> --}}

                            <x-primary-button x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
                                {{ __('Pilih') }}</x-primary-button>
                            <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                <form method="post" action="{{ route('payment.online') }}" class="p-6">

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
