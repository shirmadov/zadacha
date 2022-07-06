<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Owner</th>
                            <th scope="col">Car brand</th>
                            <th scope="col">Car model</th>
                            <th scope="col">Buying Cost</th>
                            <th scope="col">Selling Cost</th>
                            <th scope="col">Buying Date</th>
                            <th scope="col">Selling Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($car_owners as $car_owner)
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$car_owner->name}}</td>
                            <td>{{$car_owner->brand}}</td>
                            <td>{{$car_owner->model}}</td>
                            <td>{{$car_owner->buying_cost}}</td>
                            <td>{{$car_owner->selling_date===null?'':$car_owner->selling_cost}}</td>
                            <td>{{$car_owner->buying_date}}</td>
                            <td>{{$car_owner->selling_date ===null? 'Current Owner':$car_owner->selling_date}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
