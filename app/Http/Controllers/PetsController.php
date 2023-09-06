<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PetsController extends Controller
{
    public function index(): View
    {
        return view('pets.index');
    }

    public function create(): View
    {
        return view('pets.create');
    }

    public function save(Request $request): RedirectResponse
    {
        Pet::validate($request);
        Pet::create($request->only('name', 'type', 'score'));

        session()->flash('success', 'Created Offer!');

        return back();
    }

    public function list(): View
    {
        $viewData = [];
        $viewData['pets'] = Pet::orderBy('score', 'DESC')->get();

        return view('pets.list')->with('viewData', $viewData);
    }

    public function statistics(): View
    {
        $viewData = [];
        $viewData['numDogs'] = Pet::where('type', 'Dog')->count();
        $viewData['numCats'] = Pet::where('type', 'Cat')->count();
        $viewData['averageScore'] = Pet::avg('score');

        return view('pets.statistics')->with('viewData', $viewData);
    }
}
