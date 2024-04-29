@extends('layouts.app')

@section('content')
    <section class="treni py-5">
        <div class="container  py-5">
            <table class="table table-success">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Azienda</th>
                        <th scope="col">Treno</th>
                        <th scope="col">Stazione Partenza</th>
                        <th scope="col">Stazione Arrivo</th>
                        <th scope="col">Orario Partenza</th>
                        <th scope="col">Orario Arrivo</th>
                        <th scope="col">Durata</th>
                        <th scope="col">Carrozza</th>
                        <th scope="col">Fermate</th>
                        <th scope="col">Cambi</th>
                        <th scope="col">In orario</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($trainsToday as $train)
                        <tr class="lh-lg">
                            <th scope="row"> {{ $train->id }} </th>
                            <td>{{ $train->azienda }}</td>
                            <td>{{ $train->codice_treno }}</td>
                            <td>{{ $train->stazione_partenza }}</td>
                            <td>{{ $train->stazione_arrivo }}</td>
                            <td>{{ $train->orario_partenza }}</td>
                            <td>{{ $train->orario_arrivo }}</td>
                            <td>{{ $train->durata_totale }}</td>
                            <td>{{ $train->carrozza }}</td>
                            <td>{{ $train->quantita_fermate }}</td>
                            <td>{{ $train->quantita_cambi }}</td>
                            <td>{{ $train->in_orario }}</td>
                        </tr>

                    @empty
                        <div class="col-12">
                            <p>
                                Sorry no trains yet ☺
                            </p>
                        </div>
                    @endforelse
                </tbody>
            </table>

        </div>

    </section>
@endsection
