@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading"><h1>Etxeen zerrenda <h1></div>
             
                 
                    <table class="table">
                        <tr>
                            <th>Izena</th>
                            <th>Etxe bizitxa helbidea</th>
                          
                        </tr>
                        @foreach ($alokailua as $alokatu)
                            <tr>
                                <td>{{ $alokatu->izena }}</td>
                               
                                <td>{{ $alokatu->etxea->helbidea  }}</td>
                                 <td><a href="{{ route('alokailua.edit', $alokatu->id) }}"  class="btn btn-info">Editar</a></td> 
                                 <td><form action="{{ route('delete-alokailua', $alokatu->id) }}" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning" onclick="return confirm('¿Estás seguro de eliminar?')">Eliminar</button>
                                </form></td> 
                            </tr>
                        @endforeach
                      
                    </table>
              
                   
            </div>
          
           

        </div>
    </div>
</div>

@endsection