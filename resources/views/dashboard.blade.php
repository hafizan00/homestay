<x-app-layout>

    @if (auth()->user()->is_admin)
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('HOMESTAY INAP DESA SURIA') }}
            </h2>
        </x-slot>

        <div class="flex items-center justify-center gap-4">
            <div class="py-12 text-center">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6">

                            <div class="relative rounded-xl overflow-auto">
                                <div class="shadow-sm overflow-hidden my-8">
                                    <div class="table border-collapse table-auto w-full text-sm">
                                        <div class="table-header-group">
                                            @php
                                                $label = collect([
                                                    'id' => '#',
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
                                            <div class="table-row">
                                                @foreach ($label as $key => $header)
                                                    <div @class([
                                                        'table-cell',
                                                        'text-slate-500',
                                                        'text-gray-900',
                                                        'text-left' => true,
                                                        'font-medium',
                                                        // 'p-4 pl-8',
                                                        'p-4 pl-8',
                                                        'pt-0 pb-3',
                                                        'border-b border-slate-600',
                                                        'dark:border-slate-700' => false,
                                                    ])>
                                                        {{ $header }}</div>
                                                @endforeach
                                            </div>

                                        </div>
                                        <div class="table-row-group bg-white">
                                            @foreach ($resource as $key => $booking)
                                                <div class="table-row">
                                                    @foreach ($label as $key => $row)
                                                        <div @class([
                                                            'table-cell',
                                                            'text-slate-500',
                                                            'border-slate-100',
                                                            'text-gray-900' => false,
                                                            'font-medium',

                                                            'text-left' => true,
                                                            'border-b',
                                                            'p-4 pl-8',
                                                            'pt-0 pb-3',
                                                            // 'p-4 pl-8 pt-0 pb-3',
                                                            'dark:border-slate-700' => false,
                                                            'border-b border-slate-600',
                                                            'dark:border-slate-700' => false,
                                                        ])>
                                                            {{ $booking->{$key} }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endif
    @if (!auth()->user()->is_admin)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        @include('sweetalert::sweetalert')

                        @include('components.booking-form')
                    </div>
                </div>
            </div>
        </div>
    @endif

</x-app-layout>

