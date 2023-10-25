
@section('title', 'USUARIOS')

@section('content_header')
    <h1>Roles</h1>
@stop

@section('content')
<main>
    <div class="container py-4">
        <h2>{{$msg}}</h2>
        <a href="{{url('roles')}}" class="btn btn-secondary">Regresar</a>
    </div>    
</main>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
