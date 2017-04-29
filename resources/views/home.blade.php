<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>What are you doing while waiting for Composer?</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="https://cloud.typography.com/6830252/7572172/css/fonts.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu+Mono">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="//webfont.fontplus.jp/accessor/script/fontplus.js?JItqYG3JnkE%3D&box=PkIVeFGe~ik%3D&aa=1"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<blockquote>
    <pre>$ composer update</pre>
    <pre>
Loading composer repositories with package information
Updating dependencies (including require-dev)
      </pre>
</blockquote>

<div class="filler">
    <header>
        <div>
            <h1>What are you doing while waiting for <span>COMPOSER ?</span></h1>
        </div>
    </header>
</div>

<div class="container">
    <div class="filler">
        <div class="message">
            <p class="message__paragraph">
                Package management with <a href="https://getcomposer.org/" target="_blank">Composer</a> has saved our life.
                Yes, it has brought us PHP developers to the next level.
            </p>
            <p class="message__paragraph">
                Even if it is so slow, we should’t be complaining about it while waiting for it.
                Instead, close your eyes, seat back and get relaxed… no, it’s too long! What to do then?
            </p>
            <p class="message__paragraph">Look at the left top. What are you doing?</p>
        </div>
    </div>

    @if (!Auth::check())
        <div class="filler">
            <a class="connect" href="/connect">Let the world know</a>
        </div>
    @else
        <div class="filler" id="form">
            <form method="post" action="/post/store">
                {{ csrf_field() }}
                <textarea name="body" placeholder="You wouldn’t say nothing…" rows="3" required maxlength="100"></textarea>
                <button>Let the world know</button>
            </form>
        </div>
    @endif

    @foreach ($posts as $post)
        <div class="filler">
            <section class="post">
                <p class="post__body">{{ $post->body }}</p>
                <a class="post__github-link" href="https://github.com/{{ $post->user->github_username }}">{{ $post->user->github_username }}</a>
            </section>
        </div>
    @endforeach
</div>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-98166935-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
