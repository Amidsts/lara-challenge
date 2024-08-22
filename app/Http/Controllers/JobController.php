<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index() {
        // $job = Job::with('employer')->get();

        $job = Job::with('employer')->latest()->simplePaginate(3);

        return view('jobs/index', 
            [
                'jobs' => $job
            ]
        );
    }

    public function create() {
        return view('jobs/create-job');
    }

    public function show(Job $job) {
        return view('jobs/show', [
        'job' =>  $job
    ]);
    }

    public function store() {
        request()->validate([
            'title' => ['required', 'min:5'],
            'salary' => ['required']
        ]);

        Job::create(
            [
                'title' => request('title'),
                'salary' => request('salary'),
                'employer_id' => 1
            ]
        );

        return redirect('/jobs');
    }

    public function edit(Job $job) {
        Gate::define('edit-job', function (User $user, Job $job) {
            return $job->employer->user->is($user);
        });

        if(Auth::guest()){
            return redirect('/login');
        }

       

        return view('jobs/edit', [
            'job' =>  $job
        ]);
    }
    
    public function update(Job $job) {
        request()->validate([
            'title' => ['required', 'min:5'],
            'salary' => ['required']
        ]);

        $job->title = request("title");
        $job->salary = request("salary");
        $job->save();

        return redirect('/jobs/'.$job->id);
    }

    public function delete(Job $job) {
        $job->delete();
        return redirect('/jobs');
    }
}
