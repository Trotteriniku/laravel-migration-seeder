@extends('layouts.app')

@section('title', 'All Trains')

@section('content')
    <main>


        <div class="my-container d-flex justify-content-center  ">
            <div class="w-75 h-100 p-5 text-light rounded-4 " style="background-color:#222222 ">
                <table class="w-100 h-100 ">
                    <thead class="p-2 bg-info bg-light">
                        <tr class="fw-semibold fs-5 text-dark p-5 ">
                            <th>Agenzia</th>
                            <th>Codice Treno</th>
                            <th>Stazione di partenza</th>
                            <th>Orario di partenza</th>
                            <th>Stazione di arrivo</th>
                            <th>Orario di arrivo</th>
                            <th>Numero di carrozza</th>
                            <th>In Orario</th>
                            <th>Cancellato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($trains as $train)
                            <tr class="rounded-5 tr-hover border-end border-light border-bottom">
                                <td class="text-center border-end border-bottom  border-light fw-semibold  ">
                                    {{ $train->agency }}</td>
                                <td class="text-center">{{ $train->train_code }}</td>
                                <td class="text-center">{{ $train->departure_station }}</td>
                                <td class="text-center">{{ $train->departure_time }}</td>
                                <td class="text-center">{{ $train->arrival_station }}</td>
                                <td class="text-center">{{ $train->arrival_time }}</td>
                                <td class="text-center">{{ $train->numbero_of_carriages }}</td>
                                <td class="text-center">{{ $train->in_time }}</td>
                                <td class="text-center">{{ $train->deleted }}</td>
                            </tr>
                        @empty
                            No record Found
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>

    </main>

@endsection
