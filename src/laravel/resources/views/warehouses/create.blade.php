<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="{{ route('warehouses.store') }}" method="POST">
                {{ @csrf_field() }}
                <div class="form-group">
                    <label>{{ __('Warehouse name')  }}</label>
                    <input type="text" class="form-control" name="warehouse_name" max="50">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" >
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
