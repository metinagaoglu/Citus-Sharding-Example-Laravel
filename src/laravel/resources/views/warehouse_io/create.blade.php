<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('warehouses.io.store',['warehouse' => $warehouse->warehouse_id]) }}" method="POST">
                {{ @csrf_field() }}
                <div class="form-group">
                    <label>{{ __('Warehouse')  }}</label>
                    <select name="warehouse_id" class="form-control">
                        @foreach($myWarehouses as $Iwarehouse)
                            <option value="{{ $Iwarehouse->warehouse_id }}">{{ $Iwarehouse->warehouse_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>{{ __('Amount')  }}</label>
                    <input type="text" class="form-control" name="amount" max="50">
                </div>
                <br>
                <div class="form-group">
                    <label>{{ __('Transfer type')  }}</label>
                    <select name="type">
                        <option value="1">input</option>
                        <option value="2">output</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" >
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
