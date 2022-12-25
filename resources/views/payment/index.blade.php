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
                            <h1 class="text-lg font-medium text-gray-900">
                                {{ __('Maklumat Tempahan') }}
                            </h1>

                        </header>
                        <div class="grid grid-cols-4 gap-4">
                            @php
                                $request = collect($request->except(['_token', '_method', 'user_id']));
                                $label = collect([
                                    'full_name' => 'Nama Penuh',
                                    'phone' => 'Nombor Telefon',
                                    'address' => 'Alamat',
                                    'email' => 'Emel',
                                    'adult_count' => 'Bilangan Dewasa',
                                    'child_count' => 'Bilangan Kanak-kanak',
                                    'check_in' => 'Check In',
                                    'check_out' => 'Check out',
                                    'price' => 'Harga',
                                ]);
                            @endphp
                            @foreach ($request as $key => $data)
                                <div>
                                    <x-input-label for="full_name" :value="__($label->get($key))" />
                                    <div class="bg-sky">{{ $data ?? '-' }}</div>
                                </div>
                            @endforeach
                        </div>



                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


