<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>Task Manager</title>
</head>
<body>
    <h1>Új feladat</h1>
    @if (session('status'))
        <div>
            {{session('status')}}
        </div>
    @endif
    <form method="POST" action="{{url('tasks/create')}}">
        @csrf
        <div class="mb-3">
            <label for="title">Cím:</label>
            <input type="text" name="title" class="form-control" value="{{old('title')}}">
            @error('title')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description">Leírás: </label>
            <textarea name="description" class="form-control" rows="3"> {{ old('description')}}</textarea>
            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for=""></label>
            <input type="checkbox" name="is_active" {{old('is_Active') == true ? checked:''}}>
            @error('is_active')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <button type="submit">Feltöltés</button>
        </div>
    </form>
</body>
</html>