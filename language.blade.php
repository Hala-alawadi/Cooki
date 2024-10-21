<!DOCTYPE html>
<html>
<head>
    <title>Language Selection</title>
</head>
<body>
    <form action="{{ route('set.language') }}" method="POST">
        @csrf
        <label for="language">Choose Language:</label>
        <select name="language" id="language">
            <option value="en">Arabic</option>
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="es">Spanish</option>
        </select>

        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember me</label>

        <button type="submit">Save</button>
    </form>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</body>
</html>