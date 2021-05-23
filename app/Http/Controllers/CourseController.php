<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::with('user')->withCount('episodes')->get();
        return Inertia::render('Courses/index', compact('courses'));
    } 

    public function show(int $id){
        $course = Course::where('id',$id)->with('episodes')->first();

    return Inertia::render('Courses/show', compact('course'));
    }

    public function toggleProgress(Request $request){

    $id = $request->input('episodeId');
    $user = auth()->user();
    $user->episodes()->toggle($id);
    return $user->episodes;
    return $request->input('episodeId');
    }
    
}
