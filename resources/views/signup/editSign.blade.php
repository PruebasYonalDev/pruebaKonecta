<div>
    <h1>Editar user</h1>
</div>

<div class="contenedor">

    <form action="{{url('api/editarUsuario/'.$datos[0]->id)}}" method="POST">
    {{ method_field('PATCH')}}
        <br>
        <label for="name">Nombres</label>
        <input type="text" name="name" id="name" value="{{$datos[0]->name}}">
        <br>
        <label for="email">Correo</label>
        <input type="email" name="email" id="email" value="{{$datos[0]->email}}">
        <br>
        <label for="rol">Rol</label>
        <input type="text" name="rol" id="rol" value="{{$datos[0]->rol}}">
        <br>
        <input type="submit" value="Registrase">
    </form>

</div>