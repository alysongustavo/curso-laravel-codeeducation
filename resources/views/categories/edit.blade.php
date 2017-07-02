@extends('app')

@section('content')
    <div class="container">
        <h1>Edit category: {{ $category->name }}</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
         @endif

        {!! Form::open(['route'=> ['categories.update',$category->id],'method' => 'post']) !!}

          <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name', $category->name, ['class'=>'form-control']) !!}
          </div>

        <div class="form-group">
            {!! Form::label('description','Description:') !!}
            {!! Form::textarea('description', $category->description, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Save category',['class' => 'btn btn-primary form-control']) !!}
        </div>


        {!! Form::close() !!}



    </div>


@endsection