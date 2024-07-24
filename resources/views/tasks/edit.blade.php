<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>Task Manager</title>
</head>
<body>
    <h1>Szerkesztés</h1>
    @if (session('status'))
        <div>
            {{session('status')}}
        </div>
    @endif
    <form method="POST" action="{{url({{url ('tasks/'.$item->id.'/edit') }})}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title">Cím:</label>
            <input type="text" name="title" class="form-control" value="{{$task->title}}">
            @error('title')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description">Leírás: </label>
            <textarea name="description" class="form-control" rows="3"> {{ $task->description)}}</textarea>
            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for=""></label>
            <input type="checkbox" name="is_active" {{$task->is_active == true ? checked:''}}>
            @error('is_active')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <button type="submit">Szerkesztés</button>
        </div>
    </form>
</body>
</html>