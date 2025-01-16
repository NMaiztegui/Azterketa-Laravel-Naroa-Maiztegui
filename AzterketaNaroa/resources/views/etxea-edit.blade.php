@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Etxe bat editatu</h1>
            <form action="{{ route('etxea.update', $etxea->id) }}"  method="post">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="helbidea">Helbidea:</label>
                    <input type="text" class="form-control" name="helbidea" value="{{ old('helbidea', $etxea->helbidea) }}" required>
                </div>
            
                <div class="form-group">
                    <label for="logela_kopurua">Logela Kopurua:</label>
                    <input type="number" class="form-control" name="logela_kopurua" value="{{ old('logela_kopurua', $etxea->logela_kopurua) }}" required>
                </div>
                <div class="form-group">
                    <label for="eraikuntza_urtea">Eraikuntza data:</label>
                    <input type="date" class="form-control" name="eraikuntza_urtea" value="{{ old('eraikuntza_urtea', $etxea->eraikuntza_urtea) }}" required>
                 
                
                <button type="submit" class="btn btn-warning">actualizar</button>
            </form>
            <a href="{{ route('etxea.zerrenda') }}">
                <button type="button" class="btn btn-info">Volver al Inicio</button>
            </a>
        </div>
    </div>
@endsection
