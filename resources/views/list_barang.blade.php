<html>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $dataku)
            <tr>
                <td>{{ $dataku['id'] }}</td>
                <td>{{ $dataku['nama'] }}</td></tr>
                <td>{{ $dataku['harga'] }}</td>
            </tr>
            @endforeach
        </tbody>
</table>
</html>
