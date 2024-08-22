<x-layout>

<nav>
    <a href="/">Home</a>
    <a href="/contact">Contact</a>
    <a href="/jobs">Jobs</a>
    <a href="/jobs/create">Create Job</a>
    <form method='POST' action='/logout'>
       @csrf
      <button type='submit'>Log Out</button>
    </form>
</nav>

<h1>The Job {{$job['title']}} pays {{$job['salary']}} per year</h1>

<p>
    <a href="/jobs/{{$job['id']}}/edit">Edit Job</a>

    <form method="POST" action="/jobs/{{$job['id']}}">
        @csrf
        @method('DELETE')
        
        <button type="submit">Delete Job</button>
    </form>
</p>
</x-layout>