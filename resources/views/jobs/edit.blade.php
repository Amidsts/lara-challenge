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

<h1>Edit Job: {{$job->title}}</h1>
<form method="POST" action="/jobs/{{$job->id}}">
    @csrf
    @method('PATCH')
    
  <div>
    <label>Title</label>
    <input type="text" name="title" placeholder="Shift Leader" value="{{$job->title}}" />

    @error('title') 
      <p>{{$message}}</p>
    @enderror
  </div>
 
  <div>
    <label>Salary</label>
    <input type="text" name="salary" placeholder="$50,000 per year" value="{{$job->salary}}" />

    @error('salary') 
      <p>{{$message}}</p>
    @enderror
  </div>

  <a href="/jobs/{{$job->id}}">Cancel</a>
  <button type="submit">Save</button>
</form>


</x-layout>