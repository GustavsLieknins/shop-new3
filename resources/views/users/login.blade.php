<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login now</title>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="/login">
      @csrf
      <label>
          <span>Username:</span>
          <input name="username">
      </label>
      @error("username")
        <p>{{$message}}</p>
      @enderror
      <label>
          <span>Password:</span>
          <input type="password" name="password">
      </label>
      @error("password")
        <p>{{$message}}</p>
      @enderror
      <button>Submit</button>
    </form>
    
    <div x-data="{ open: true }">
 
    <div x-show="open">
    <button @click="open = false">Close</button>
    @if (session()->has("success"))
      <p>{{ session("success") }}</p>
    @endif
    </div>
</div>
</body>
</html>