<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($eventos as $evento)
    <tr>
        <td>{{ $evento ->nome }}</td>
        <td>{{ $evento ->local }}</td>
        <td>{{ $evento -> data }}</td>   
        <td>{{ $evento -> preco }}</td>
        <td>
            
        </td>
    </tr>
    
    @endforeach
</body>
</html>