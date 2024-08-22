<x-layout>

<nav>
    <a href="/register">Register</a>
</nav>

<h1>Login</h1>
<form method="POST" action="/signin">
    @csrf

  <div>
    <label>Email</label>
    <input type="text" name="email" placeholder="test@email.com" :value="old('email')" />

    @error('email') 
      <p>{{$message}}</p>
    @enderror
  </div>

    <div>
        <label>Password</label>
        <input type="password" name="password" placeholder="123Abcd@" />

        @error('salary') 
        <p>{{$message}}</p>
        @enderror
  </div>
  
  <a href="/">Cancel</a>
  <button type="submit">Login</button>
</form>


</x-layout>