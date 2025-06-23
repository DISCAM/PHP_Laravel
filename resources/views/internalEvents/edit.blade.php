@extends('main')

@section('content')
    {{--    <div class="container">--}}
    {{--        <form method="POST" action="/internal-events/update/{{ $model->Id }}">--}}
    {{--            @csrf--}}
    {{--            <div class="row gy-3">--}}
    {{--                <div class="col-md-12 col-lg-6 col-xxl-4">--}}
    {{--                    <div class="input-group">--}}
    {{--                        <label class="input-group-text">--}}
    {{--                            <i class="material-icons-round align-middle">label</i>--}}
    {{--                            Title--}}
    {{--                        </label>--}}
    {{--                        <input name="Title" class="form-control validate" value="{{ $model->Title }}">--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-12 col-lg-6 col-xxl-4">--}}
    {{--                    <div class="input-group">--}}
    {{--                        <label class="input-group-text">--}}
    {{--                            <i class="material-icons-round align-middle">link</i>--}}
    {{--                            Link--}}
    {{--                        </label>--}}
    {{--                        <input name="Link" class="form-control validate" value="{{ $model->Link }}">--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </form>--}}
    {{--    </div>--}}

    <div class="container">
        <form method="POST">

            <input type="hidden" name="Id" value="">

            <div class="input-group mb-3">
                <label class="input-group-text">
                    <i class="material-icons-round align-middle">label</i>
                    Title
                </label>
                <input name="Title" class="form-control validate" type="text" value="{{ $model->Title  }}">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text">
                    <i class="material-icons-round align-middle">link</i>
                    Link
                </label>
                <input name="Link" class="form-control validate" type="text" value="{{ $model->Link  }}">
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input validate" type="checkbox" name="IsPublic" value="{{ $model->IsPublic }}">
                <label class="form-check-label">
                    <i class="material-icons-round align-middle">public</i>
                    Public
                </label>
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input validate" type="checkbox" name="IsCancelled" value="{{ $model->IsCancelled }}">
                <label class="form-check-label">
                    <i class="material-icons-round align-middle">cancel</i>
                    Cancelled
                </label>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text">
                    <i class="material-icons-round palette-accent-text-color align-middle">event</i>
                    Event Date
                </label>
                <input type="date" name="EventDateTime" class="form-control validate" value="{{ $model->EventDateTime }}">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text">
                    <i class="material-icons-round palette-accent-text-color align-middle">today</i>
                    Publish Date
                </label>
                <input type="date" name="PublishDateTime" class="form-control validate" value="{{ $model->PublishDateTime }}">
            </div>

            <div class="mb-3">
                <label class="form-label">
                    <i class="material-icons-round palette-accent-text-color align-middle">description</i>
                    Short Description
                </label>
                <textarea name="ShortDescription" class="form-control validate"> {{ $model->ShortDescription }}   </textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    <i class="material-icons-round palette-accent-text-color align-middle">newspaper</i>
                    Content
                </label>
                <textarea name="ContentHTML" class="form-control validate">    </textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    <i class="material-icons-round palette-accent-text-color align-middle"></i>
                    Meta Description
                </label>
                <textarea name="MetaDescription" class="form-control validate">   </textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    <i class="material-icons-round palette-accent-text-color align-middle">subtitles</i>
                    Meta Tags
                </label>
                <textarea name="MetaTags" class="form-control validate"> </textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    <i class="material-icons-round palette-accent-text-color align-middle">notes</i>
                    Notes
                </label>
                <textarea name="Notes" class="form-control validate"></textarea>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-warning" name="">Save changes</button>
            </div>
        </form>
    </div>

@endsection
