<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>{{ __('Warehouse id')  }}</th>
                    <th>{{ __('Warehouse name')  }}</th>
                    <td>{{ __('Action') }}</td>
                </tr>
                </thead>
                <tbody>
                    @foreach($myWarehouses as $warehouse)
                        <tr>
                            <td>{{ $warehouse->warehouse_id  }}</td>
                            <td>{{ $warehouse->warehouse_name  }}</td>
                            <td>
                                <a href="#">{{ __('Detail')  }}</a>
                                <a href="{{ route('warehouses.io.create',['warehouse' => $warehouse->warehouse_id]) }}">{{ __('Transaction')  }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $myWarehouses->links() }}
        </div>
    </div>
</x-app-layout>
