<?php

namespace App\Http\Controllers\Web;

use App\AcademicLevel;
use App\Deadline;
use App\Http\Controllers\Controller;
use App\PaperType;
use App\Service;
use Illuminate\Http\Request;


class ServicesController extends Controller
{
    public function create()
    {
        $services = Service::orderBy('name', 'ASC')->get();
        // dd($services);
        return view('pages.services.index', compact('services'));
    }

    public function show($slug)
    {
        $service = Service::where(['slug' => $slug])->firstOrFail();
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::all();
        $services = Service::all();

        return view('pages.services.show', compact('service', 'paper_types', 'academic_levels', 'deadlines', 'services'));
    }

    // public function pageone()
    // {
    //     $service=Service::where('slug','cover-letter-writing')->first();
    //     return view('pages.services.show',compact('service'));
    // }

    // public function pagetwo()
    // {
    //     $service=Service::where('slug','linkedin-profile-writing')->first();
    //     return view('pages.services.show',compact('service'));
    // }

    // public function pagethree()
    // {
    //     $service=Service::where('slug','resume-editing')->first();
    //     return view('pages.services.show',compact('service'));
    // }

    // public function pagefour()
    // {
    //     $service=Service::where('slug','cv-editing')->first();
    //     return view('pages.services.show',compact('service'));
    // }

}
