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
    <style>
        html {
            height: 100%;
        }
        body,
        header {
            height: 100%;
        }

        body {
            font-family: "Didot 16 A", "Didot 16 B", "Ryumin Regular KL", serif;
            font-style: normal;
            font-weight: 300;
            background: #000;
            color: #fff;
            text-align: center;
        }

        header {
            display: flex;
            justify-content: center;
            align-items: center;
        }


        h1 {

            font-size: 1.5vw;
            letter-spacing: 0.05vw;
            margin: 0 0 2vw;
        }

        h1 > span {
            display: block;

            font-size: 8vw;

            font-family: "Didot 64 A", "Didot 64 B";
            font-style: italic;
            font-weight: 300;
            letter-spacing: 0.7vw;
        }

        blockquote {
            left: 0;
            margin: 0;
            position: fixed;
            text-align: left;
            top: 0;
        }
        blockquote > pre {
            margin: 0;
            font-family: 'Ubuntu Mono', monospace;
        }
        blockquote > pre:last-child {
            color: #00c120;
        }

        .container {
            margin: 0 auto;
            width: 50vw;
        }

        form {
            margin: -16vw 0 15vw;
        }

        textarea {
            display: block;
            background: #222;
            color: #fff;
            border: none;
            box-sizing: border-box;
            text-align: center;
            width: 100%;

            font-family: "Didot 24 A", "Didot 24 B", "Ryumin Regular KL", serif;
            font-style: normal;
            font-weight: 300;
            font-size: 2.5vw;
            letter-spacing: .05em;

            line-height: 1.5;

            padding: 1vw;

            outline: 0;
        }

        button {
            font-family: "Didot 24 A", "Didot 24 B", "Ryumin Regular KL", serif;
            font-style: normal;
            font-weight: 300;
            display: block;
            color: #fff;
            width: 100%;
            border: none;
            border-radius: 0;
            background: #333;
            letter-spacing: .05em;
            -webkit-appearance: none;
            outline: 0;
            transition-duration: .5s;
            font-size: 2vw;
            padding: 1vw;
        }
        button:hover {
            background: #444;
        }

        section {
            margin-bottom: 15vw;
        }

        section p {
            font-family: "Didot 24 A", "Didot 24 B", "Ryumin Regular KL", serif;
            font-style: normal;
            font-weight: 300;
            font-size: 2.5vw;
            letter-spacing: .05em;
            line-height: 1.5;
            margin: 0 0 2vw;
        }

        section div {
            font-family: "Didot 16 A", "Didot 16 B";
            font-style: normal;
            font-weight: 300;
            font-size: 1.5vw;
            letter-spacing: .05em;
        }
        section div a {
            color: #666;
            text-decoration: none;
            border-bottom: 1px solid #555;
        }

        section div {
            font-family: "Didot 16 A", "Didot 16 B";
            font-style: normal;
            font-weight: 300;
            font-size: 1.5vw;
            letter-spacing: .05em;
        }

        .connect {
            margin-top: -40vh;
            display: block;
            background: #333;
            color: #fff;
            letter-spacing: .05em;
            transition-duration: .5s;
            font-size: 2vw;
            padding: 1vw 4vw;
            text-decoration: none;
        }
    </style>
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

<header>
    <div>
        <h1>What are you doing while waiting for <span>Composer ?</span></h1>
    </div>
</header>

<div class="container">
    @if (!Auth::check())
        <a class="connect" href="/connect">Let the world know</a>
    @else
        <form method="post" action="/post/store">
            {{ csrf_field() }}
            <textarea name="body" placeholder="You wouldn’t say nothing…" rows="3" required maxlength="100"></textarea>
            <button>Let the world know</button>
        </form>
    @endif

    @foreach ($posts as $post)
        <section>
            <p>{{ $post->body }}</p>
            <div><a href="https://github.com/{{ $post->user->github_username }}">{{ $post->user->github_username }}</a></div>
        </section>
    @endforeach
</div>
</body>
</html>
