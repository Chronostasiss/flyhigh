@extends('layouts.app')

@section('content')
<div class="mx-36 my-24">
    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Traveler Details</h5>
    
        <form action="{{route('create_booking')}}" method="POST">
            @csrf
            <input type="hidden" name="ticket_id" id="ticket_id" value="{{$data->id}}">
            <div class="mt-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <select name="title" id="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                </select>
            </div>
            <div class="mt-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" autocomplete="name" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div class="mt-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="text" autocomplete="phone" id="phone" name="phone" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div class="mt-4">
                <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                <input type="date" required autocomplete="bday" name="date_of_birth" id="date_of_birth" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div class="mt-4">
                <label for="nationality" class="block text-sm font-medium text-gray-700">Nationality</label>
                <input type="text" autocomplete="country-name" name="nationality" id="nationality" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div class="mt-4">
                <label for="chosen_seat" class="block text-sm font-medium text-gray-700">Choose Seat</label>
                <select name="chosen_seat" id="chosen_seat" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    @foreach ($data->available_seats as $seat)
                        <option value="{{$seat}}">{{$seat}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex justify-end mt-6">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Book</button>
            </div>
        </form>
    </div>
</div>
<script>
    document.getElementById('phone').addEventListener('input', function () {
        var phoneNumber = this.value;
        var pattern = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{4}[-\s\.]?[0-9]{4,6}$/;
        this.setCustomValidity('');
        if (!pattern.test(phoneNumber)) {
            this.setCustomValidity('Please enter a valid phone number');
        }
    });
</script>

@endsection