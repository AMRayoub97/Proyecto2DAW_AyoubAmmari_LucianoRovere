@extends('plantilla')

@section('titulo', 'Estadisticas')

@section('contenido')
    @vite(['resources/sass/estadisticas/index.scss'])

    <table>
        <h1>Estadisticas de Equipos</h1>
        <thead>
            <th>Equipo</th>
            <th>Tiros2</th>
            <th>Tiros3</th>
            <th>Tiros libres</th>
            <th>Rebotes</th>
            <th>Faltas Personales</th>
            <th>Perdidas</th>
            <th>Robos</th>
            <th>Victorias</th>
            <th>Derrotas</th>
        </thead>

        <tbody>
            @forelse($estadisticas as $estadistica)
                <tr>
                    <th><img src="{{ asset('images/equipos/'. $estadistica->equipo?->foto) }}" alt=""><a href="{{ route('equipos.show',$estadistica->equipo?->id) }}">{{ $estadistica->equipo?->nombre }}</a></th>
                    <td>{{ $estadistica->tiros_2_anotados }} / {{ ($estadistica->tiros_2_anotados + $estadistica->tiros_2_fallidos) }}</td>
                    <td>{{ $estadistica->tiros_3_anotados }} / {{ ($estadistica->tiros_3_anotados + $estadistica->tiros_3_fallidos) }}</td>
                    <td>{{ $estadistica->tiros_libres_anotados }} / {{ ($estadistica->tiros_libres_anotados + $estadistica->tiros_libres_fallidos) }}</td>
                    <td>{{ $estadistica->rebotes_ofensivos }} / {{ ($estadistica->rebotes_ofensivos + $estadistica->rebotes_defensivos) }}</td>
                    <td>{{ $estadistica->faltas_personales }} </td>
                    <td>{{ $estadistica->perdidas }}</td>
                    <td>{{ $estadistica->robos}}</td>
                    <td>{{ $estadistica->victorias }}</td>
                    <td>{{ $estadistica->derrotas }}</td>
                </tr>
            @empty
                <h2>No hay Datos</h2>
            @endforelse
        </tbody>
    </table>
@endsection
