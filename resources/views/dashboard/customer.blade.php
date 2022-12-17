<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                This is customer dashboard
            </div>

            @foreach ($bookings as $booking)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('components.input-label', ['value' => $booking->id])
                    </div>
                    <div class="max-w-xl">
                        @include('components.input-label', ['value' => $booking->name])
                    </div>
                    <div class="max-w-xl">
                        @include('components.input-label', ['value' => $booking->email])
                    </div>
                    <div class="max-w-xl">
                        @include('components.input-label', ['value' => $booking->created_at])
                    </div>
                    <div class="max-w-xl">
                        @include('components.input-label', ['value' => $booking->updated_at])
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
