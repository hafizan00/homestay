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
                            {{-- {{ dd(App\Models\Booking::all()->toArray()) }} --}}
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Tempahan Anda') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Senarai Tempahan') }}
                            </p>
                        </header>


                    </section>

                </div>
            </div>
        </div>
        @foreach ($bookings as $booking)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <section class="space-y-6">
                            <header>
                                <h2 class="text-lg font-medium text-gray-900">
                                    {{ $booking->full_name }}
                                </h2>

                                <p class="mt-1 text-sm text-gray-600">
                                    {{ $booking->email }}
                                </p>
                            </header>
                            <p class="mt-1 text-sm text-gray-600">
                                {{ $booking->address }}
                            </p>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ $booking->ic_no }}
                            </p>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ $booking->adult_count }}
                            </p>
                            <p class="mt-1 text-sm text-gray-600">
                                {{ $booking->check_in->format('H:g A d M Y') }}
                            </p>
                            <p class="mt-1 text-sm text-gray-600">
                                {{ $booking->check_out->format('H:g A d M Y') }}
                            </p>
                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Senarai Tempahan') }}
                            </p>


                        </section>

                    </div>
                </div>
            </div>
        @endforeach

    </div>
</x-app-layout>
