<?php

namespace App\Http\Controllers;

use App\Services\InternalEventService;
use Illuminate\Http\Request;

class InternalEventsController extends Controller
{
    private InternalEventService $service;

    public function __construct()
    {
        $this -> service = new InternalEventService();
    }

    public function index()
    {
        $models = $this->service->get();
        return view('InternalEvents.index', ['models' => $models, 'title' => 'Internal events']);
    }

    public function editView($id){
        $model = $this->service->getById($id);
        return view('InternalEvents.edit', ['model' => $model, 'title' => 'Internal events']);
    }

    public function createView()
    {
        return view('InternalEvents.create', data: ['' => $this -> service]);
    }

    public function update(Request $request, $id){
        $this->service->update($request, $id);
        return redirect('InternalEvents');
    }

    public  function addToDb(Request $request){
        $this->service->addToDB($request);
        return redirect('/internal-events');
   }

   public function delete($id){
        $this->service->delete($id);
        return response();
   }






















}


