<a href="save">Registrar Usuarios</a>
<br>
<a href="agent">Registrar Cliente</a>

<div>
<div><h1>Usuarios</h1></div>
<table border="1px">
    <thead>
        <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>rol</th>
        <th>Editar</th>
        <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data2 as $d)
        <tr>
        <td>{{$d->name}}</td>
        <td>{{$d->email}}</td>
        <td>{{$d->rol}}</td>
        <td><a href="editUser/{{$d->id}}">editar</a></td>
        <td>
            <form action="deleteUser/{{$d->id}}" method="post">
            {{ method_field('DELETE')}}
                <button type="submit">Borrar</button>
            </form>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

<div>
<div><h1>Clientes</h1></div>
<table border="1px">
    <thead>
        <tr>
        <th>Documento</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Correo</th>
        <th>Direccion</th>
        <th>Editar</th>
        <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
        <td>{{$d->document}}</td>
        <td>{{$d->name}}</td>
        <td>{{$d->lastname}}</td>
        <td>{{$d->email}}</td>
        <td>{{$d->address}}</td>
        <td><a href="editAgent/{{$d->document}}">editar</a></td>
        <td>
            <form action="deleteAgent/{{$d->document}}" method="post">
            {{ method_field('DELETE')}}
                <button type="submit">Borrar</button>
            </form>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
