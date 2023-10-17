
@extends('layouts.entete')

@section('content')
<br>
<br>
    <h2>Liste des Employés</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>N°</th>
                <th>name</th>
                <th>email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employés as $employé)
            <tr>
                <td>{{ $employé->id }}</td>
                <td>{{ $employé->name }}</td>
                <td>{{ $employé->email }}</td>
                <td>
                    
                    <form action="{{ route('employés.destroy', $employé->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    
@endsection
