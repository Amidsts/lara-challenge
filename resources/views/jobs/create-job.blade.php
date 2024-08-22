<x-layout>

<nav>
    <a href="/">Home</a>
    <a href="/contact">Contact</a>
    <a href="/jobs/create">Create Job</a>
    <form method='POST' action='/logout'>
       @csrf
      <button type='submit'>Log Out</button>
    </form>
</nav>

<h1>Create a New Job</h1>
<form method="POST" action="/jobs">
    @csrf

  <div>
    <label>Title</label>
    <input type="text" name="title" placeholder="Shift Leader" />

    @error('title') 
      <p>{{$message}}</p>
    @enderror
  </div>

  <div>
    <label>Salary</label>
    <input type="text" name="salary" placeholder="$50,000 per year" />

    @error('salary') 
      <p>{{$message}}</p>
    @enderror
  </div>

  <button type="button">Cancel</button>
  <button type="submit">Save</button>
</form>


</x-layout>