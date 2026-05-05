<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Projects | Laravel Folio</title>

    <style>
        body {
            font-family: Arial;
            margin: 0;
            background: #f4f6ff;
        }

        header {
            background: #4f46e5;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            padding: 40px;
            text-align: center;
        }

        input {
            padding: 10px;
            width: 250px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 15px;
            background: #4f46e5;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .card a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background: #4f46e5;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<header>
    <h2>My Projects</h2>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
        <a href="/projects">Projects</a>
    </nav>
</header>

<div class="container">

    <h3>Search Projects</h3>

    <form method="GET" action="/projects">
        <input type="text" name="search" placeholder="Search project..."
               value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>

    @php
        $projects = [
            ['title' => 'Laravel CRUD', 'slug' => 'laravel-crud'],
            ['title' => 'Portfolio Site', 'slug' => 'portfolio-site'],
            ['title' => 'Blog System', 'slug' => 'blog-system'],
        ];

        $search = request('search');

        if ($search) {
            $projects = array_filter($projects, function ($p) use ($search) {
                return str_contains(strtolower($p['title']), strtolower($search));
            });
        }
    @endphp

    <div class="grid">

        @forelse($projects as $project)
            <div class="card">
                <h4>{{ $project['title'] }}</h4>
                <a href="/projects/{{ $project['slug'] }}">View</a>
            </div>
        @empty
            <p>No projects found.</p>
        @endforelse

    </div>

</div>

</body>
</html>