<div>
    <h1>Editar agent</h1>
</div>

<div class="contenedor">

    <form action="{{url('api/editarAgente/'.$datos[0]->document)}}" method="POST">
    {{ method_field('PATCH')}}
        <label for="document">Documento</label>
        <input type="text" name="document" id="document" value="{{ $datos[0]->document }}">
        <br>
        <label for="name">Nombres</label>
        <input type="text" name="name" id="name" value="{{ $datos[0]->name }}">
        <br>
        <label for="lastname">Apellidos</label>
        <input type="text" name="lastname" id="lastname" value="{{ $datos[0]->lastname }}">
        <br>
        <label for="email">Correo</label>
        <input type="email" name="email" id="email" value="{{ $datos[0]->email }}">
        <br>
        <label for="address">Direccion de residencia</label>
        <input type="text" name="address" id="address" value="{{ $datos[0]->address }}">
        <br>
        <input type="submit" value="Registrar">
    </form>

</div>