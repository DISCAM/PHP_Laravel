<?php

namespace App\Services;
use App\Models\InternalEvent;
use Illuminate\Http\Request;

class InternalEventService
{
    public function get(){
        return InternalEvent::where('IsActive', '='  , true)->get();
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'Title' => 'required',
            'Link' => 'required',
            'ContentHTML' => 'required',
            'EventDateTime' => 'required',
            'IsPublic' => 'required'
        ]);
        $model = InternalEvent::find($id);
        $model->Title = $request->input('Title');
        $model->Link = $request->input('Link');
        $model->IsPublic = $request->input('IsPublic') == 'on';
        $model->IsCancelled = $request->input('IsCancelled') == 'on';
        $model->EventDateTime = $request->input('EventDateTime');
        $model->EditDateTime = date('y-m-d h:i:s');
        $model->PublishDateTime = $request->input('PublishDateTime');
        $model->ShortDescription = $request->input('ShortDescription');
        $model->ContentHTML = $request->input('ContentHTML');
        $model->MetaDescription = $request->input('MetaDescription');
        $model->MetaTags = $request->input('MetaTags');
        $model->Notes = $request->input('Notes');
        $model->save();

    }

    public function getById($id)
    {
        return InternalEvent::find($id);
    }

    public function addToDB(Request $request)
    {
        $internalEvent = new InternalEvent();

        $internalEvent->Title = $request->input('Title');
        $internalEvent->Link = $request->input('Link');
        $internalEvent->IsPublic = $request->input('IsPublic') == 'on';
        $internalEvent->IsCancelled = $request->input('IsCancelled') == 'on';
        $internalEvent->EventDateTime = $request->input('EventDateTime');
        $internalEvent->CreationDateTime = date('y-m-d h:i:s');
        $internalEvent->EditDateTime = date('y-m-d h:i:s');
        $internalEvent->PublishDateTime = $request->input('PublishDateTime');
        $internalEvent->ShortDescription = $request->input('ShortDescription');
        $internalEvent->ContentHTML = $request->input('ContentHTML');
        $internalEvent->MetaDescription = $request->input('MetaDescription');
        $internalEvent->MetaTags = $request->input('MetaTags');
        $internalEvent->Notes = $request->input('Notes');
        $internalEvent->IsActive = true;
        $internalEvent->save();


    }


    public function delete($id){
        $targetEvent = InternalEvent::find($id);
        $targetEvent->IsActive = false;
        $targetEvent->save();
    }




























}
