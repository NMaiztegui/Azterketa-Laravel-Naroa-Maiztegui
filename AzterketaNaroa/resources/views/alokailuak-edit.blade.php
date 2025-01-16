@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Etxe bat editatu</h1>
            <form action="{{ route('alokailua.update', $alokailua->id) }}"  method="post">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="izena">Izena:</label>
                    <input type="text" class="form-control" name="izena" value="{{ old('izena', $alokailua->izena) }}" required>
                </div>
                <div class="form-group">
                    <label for="etxea_id">Etxea:</label>
                    <select class="form-control" id="etxea_id" name="etxea_id">
                        @foreach($etxeak as $etxea)
                            <option value="{{ $etxea->id }}">{{ $etxea->helbidea }}</option>
                        @endforeach
                    </select>
                   
                </div>
               
                 
                
                <button type="submit" class="btn btn-warning">actualizar</button>
            </form>
            <a href="{{ route('alokatzaileak.zerrenda') }}">
                <button type="button" class="btn btn-info">Volver al Inicio</button>
            </a>
        </div>
    </div>
@endsection
