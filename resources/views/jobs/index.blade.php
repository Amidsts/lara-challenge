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

<h1>Hello From the Jobs Page</h1>

<div class="space-y-4">
    @foreach ($jobs as $job)
        <a href="/jobs/{{$job['id']}}">
        
            <div>
                <strong>{{$job['title']}}</strong> Pays {{$job['salary']}} Per Year
            </div>
            
        </a>
        
    @endforeach

    <div>
        {{ $jobs->links() }}
    </div>
</div>

</x-layout>