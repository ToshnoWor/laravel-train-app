@extends('layout')

@section('title')Comments
@endsection

@section('main_content')
    <div class="mx-auto p-2" style="width: 400px;">
        <h1>Comment form</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error  }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/review/check" method="post">
            @csrf
            <input type="email" name="email" id="email" placeholder="Entre email" class="form-control"><br>
            <input type="text" name="subject" id="subject" placeholder="Entre subject" class="form-control"><br>
            <textarea name="message" id="message" placeholder="Enter comment" class="form-control"></textarea><br>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
        <br>
        <h1>All comments</h1>
        @foreach($reviews as $el)
            <div class="alert alert-warning">
                <h3>{{ $el->subject }}</h3>
                <b>{{ $el->email }}</b>
                <p>{{ $el->message }}</p>
            </div>
        @endforeach
    </div>
@endsection
