@extends('layout')

@section('content')
    <section class="hero is-primary is-fullheight">
        @include('partials._nav')
        <div class="hero-content">
            <div class="container">
                <h1 class="title">
                    jamosaur
                </h1>
                <h2 class="subtitle">
                    whoa
                </h2>
            </div>
        </div>
        <div class="hero-footer">
            <div class="container">
                <p class="is-right">
                    <small>find me on github!</small>
                <span class="icon large">
                    <a href="https://github.com/jamosaur" target="_blank">
                        <i class="fa fa-github"></i>
                    </a>
                </span>
                </p>
            </div>
        </div>
    </section>

    <section class="hero is-info is-fullheight work">
        <div class="hero-content">
            <div class="container" style="width:100%">
                <h1 class="title">
                    What am i working on?
                </h1>
                <h2 class="subtitle">
                    a few things!
                </h2>
                @foreach($repos->chunk(4) as $chunk)
                    <div class="columns">
                        @foreach($chunk as $repo)
                            <div class="column is-quarter">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="media">
                                            <div class="media-content">
                                                <p class="title is-6">{{ $repo['full_name'] }}</p>
                                                <span class="tag is-primary">{{ $repo['language'] }}</span>
                                            </div>
                                        </div>

                                        <div class="content">

                                            <small>
                                                {{ $repo['description'] }}
                                            </small>
                                            <br>
                                            <small class="timestamp">
                                                {{ \Carbon\Carbon::parse($repo['updated_at'])->toDateTimeString() }}
                                            </small>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
        <div class="hero-footer">
            <div class="container">
                <p class="is-right">
                    <small>find me on github!</small>
                    <span class="icon large">
                        <a href="https://github.com/jamosaur" target="_blank">
                            <i class="fa fa-github"></i>
                        </a>
                    </span>
                </p>
            </div>
        </div>
    </section>
@endsection