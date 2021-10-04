<?php

namespace App\Http\Middleware;

use App\Models\course;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $request->validate([
            'courseid' => ['required', 'string', 'max:50'],
            'coursename' => ['required', 'string', 'max:50'],
            'start_day' => ['required'], 'start_month' => ['required'], 'start_year' => ['required'],
            'end_day' => ['required'], 'end_month' => ['required'], 'end_year' => ['required'],
            'courseinfo' => ['required', 'string', 'max:100']
        ]);
        return $next($request);
    }

}

