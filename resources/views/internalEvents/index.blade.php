@extends('main')

@section('content')
    <div class="container">
        <div class="row gy-3">
            @foreach($models as $model)
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title h5">{{ $model->Title }}</p>
                            <p><strong>{{ $model->ShortDescription }}</strong></p>
                            {!! $model->ContentHTML !!}
                        </div>
                        <div class="d-flex justify-content-center gap-2 mt-3">
                            <a href="{{ url()->current() }}/edit/{{ $model->Id }}" class="btn btn-primary btn-sm" style="width: 100px">Edit</a>
                            <span  class="btn btn-danger btn-sm delete" data-event-id="{{ $model->Id }}" style="width: 100px">Delete</span>
                        </div>
                        <br>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function deleteModel(){
            console.log(this.dataset.eventId);
            $.ajax({
               url:'/internal-events/delete/'+this.dataset.eventId,
                method:'DELETE',
                data:{
                   _token:'{{ csrf_token() }}'


                },
                success:function(){
                   console.log(this);
                   document.getElementById('event-' + button.dataset.eventId).remove();
                }
            });
        }
        $('.delete').on('click', deleteModel);
    </script>

@endsection
