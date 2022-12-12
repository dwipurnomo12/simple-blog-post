
@extends('layout/main')

@section('container')

    <div class="container mt-5" style="min-height: 100vh">
        <div class="row justify-content-start">
            <div class="col-md-8 me-4" >
                <h1>{{ $pages->name }}</h1>

                <article my-4>
                    {!! $pages->body !!} <br><br>
                </article>
                
                <a href="/">Back</a>
            </div>
        </div>
    </div>
@endsection

