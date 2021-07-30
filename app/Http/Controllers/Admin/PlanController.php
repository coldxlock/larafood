<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;
use illuminate\Support\Str;

class PlanController extends Controller
{
    private $repository;

    public function __construct(Plan $plan)
    {
        $this->repository = $plan;    
    }

    public function index()
    {
        // $plans = $this->repository->all();
        // $plans = $this->repository->paginate(50);
        $plans = $this->repository->latest()->paginate();
        return view('admin.pages.plans.index', [
            'plans' => $plans
        ]);
    }

    public function create()
    {
        return view('admin.pages.plans.create');
    }

    public function store(Request $request)
    {
        // dd($request->all()); //mostra o que tem no request
        $data = $request->all();
        $data['url'] = Str::kebab($request->name);
        $this->repository->create($data);
        return redirect()->route('plans.index');
    }
}
