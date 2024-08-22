<x-layout>

<nav>
    <a href="/login">Login</a>
</nav>

<h1>Register</h1>
<form method="POST" action="/signup">
    @csrf

  <div>
    <label>Name</label>
    <input type="text" name="name" placeholder="John" />

    @error('name') 
      <p>{{$message}}</p>
    @enderror
  </div>

  <div>
    <label>Email</label>
    <input type="text" name="email" placeholder="test@email.com" />

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

  <div>
        <label>Confirm Password</label>
        <input type="password" name="password_confirmation" placeholder="123Abcd@" />

        @error('salary') 
        <p>{{$message}}</p>
        @enderror
  </div>
  
  <a href="/">Cancel</a>
  <button type="submit">Register</button>
</form>


</x-layout>