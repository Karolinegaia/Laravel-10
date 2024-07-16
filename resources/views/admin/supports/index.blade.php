<h1>Listagem de Suporte</h1>
<a href="{{route ('supports.create') }}">Criar Dúvida</a>
<table>
    <thead>
        <th>assunto</th>
        <th>status</th>
        <th>descrição</th>
    </thead>
</table>
<tbody>
@foreach($supports as $support)
    <tr>
        <td>{{$support->subject}}</td>
        <td>{{$support->status}}</td>
        <td>{{$support->body}}</td>
        <td> 
            <a href="{{route('supports.show', $support->id)}}">ir</a> 
        </td>
    </tr>
@endforeach
</tbody>
