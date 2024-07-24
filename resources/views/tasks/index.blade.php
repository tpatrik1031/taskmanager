<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>Task Manager</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Cím</th>
                <th>Leírás</th>
                <th>Aktív</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->description}}</td>
                <td>
                    @if($item->is_active)
                        Kész
                    @else
                        Nincs kész
                    @endif
                </td>
                <td>
                    <a href="{{url ('tasks/'.$item->id.'/edit') }}">Edit</a>
                    <a href="{{url ('tasks/'.$item->id.'/delete') }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>