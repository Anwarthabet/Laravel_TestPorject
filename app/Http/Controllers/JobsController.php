<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobsController extends Controller
{
  //
  public function index()
  {
    $job = Job::with('employeer')->latest()->simplePaginate(10);

    return view('jobs.index', ['Jobs' => $job]);
  }
  public function show(Job $job)
  {
    return view('jobs/show', ['job' => $job]);
  }
  public function create()
  {
    return view('jobs/create');
  }
    public function store()
  {
      request()->validate([
        'title' => 'required|string|min:3',
        'salary' => 'required|numeric|min:0',
      ]);

      Job::create([

        'title' => request("title"),
        'salary' => Request('salary'),
        'nationality' => 'Suadi',
        'employeer_id' => 1


      ]);
       return redirect("/jobs");
  }
   public function edit(Job $job)
  {
    return view('jobs/edit', ['job' => $job]);
  }
  public function update(Job $job)
   {

      request()->validate([
      'title' => 'required|string|min:3',
      'salary' => 'required|numeric|min:0',
    ]);

         $job=Job::findOrFail($job->id);

          $job->update([

              'title'=>request("title"),
              'salary'=>Request('salary'),
          ]);

    return redirect("/jobs/" . $job->id);
   }
  public function delete(Job $job)
  {
    $job->delete();
    return redirect("/jobs");
  }
}
