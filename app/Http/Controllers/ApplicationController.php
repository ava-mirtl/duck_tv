<?php

namespace App\Http\Controllers;
use App\Http\Requests\ApplicationRequest;
use App\Repositories\ApplicationRepository;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    protected $applicationRepository;

    public function __construct(ApplicationRepository $applicationRepository)
    {
        $this->applicationRepository = $applicationRepository;
    }

    public function store(ApplicationRequest $request)
    {
        $this->applicationRepository->create($request->validated());

        return redirect()->route('main_page')->with('success', 'Ваша заявка успешно отправлена!');
    }
}
