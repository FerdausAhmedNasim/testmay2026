<!doctype html>
<html lang="bn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>স্কুল ম্যানেজমেন্ট</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --primary: #1a3c5e;
            --primary-light: #2563a8;
            --accent: #f59e0b;
            --danger: #dc2626;
            --success: #16a34a;
            --bg: #f0f4f8;
            --card: #ffffff;
            --text: #1e293b;
            --muted: #64748b;
            --border: #e2e8f0;
            --shadow: 0 4px 24px rgba(26,60,94,0.10);
        }

        body {
            font-family: 'Hind Siliguri', sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
        }

        nav {
            background: var(--primary);
            padding: 0 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 64px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.18);
        }

        .nav-brand {
            font-size: 1.3rem;
            font-weight: 700;
            color: #fff;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .nav-brand span { font-size: 1.6rem; }
        .nav-links { display: flex; gap: 1rem; }

        .nav-links a {
            color: rgba(255,255,255,0.82);
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            padding: 6px 16px;
            border-radius: 6px;
            transition: background 0.2s, color 0.2s;
        }

        .nav-links a:hover { background: rgba(255,255,255,0.13); color: #fff; }

        main { max-width: 1100px; margin: 0 auto; padding: 2.5rem 1.5rem; }

        .alert {
            padding: 14px 20px;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            font-weight: 500;
            font-size: 0.97rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert-success { background: #dcfce7; color: var(--success); border-left: 4px solid var(--success); }
        .alert-error { background: #fee2e2; color: var(--danger); border-left: 4px solid var(--danger); }

        .card {
            background: var(--card);
            border-radius: 16px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .card-header {
            background: linear-gradient(135deg, var(--primary) 60%, var(--primary-light));
            padding: 1.5rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .card-header h2 { color: #fff; font-size: 1.25rem; font-weight: 700; }
        .card-body { padding: 2rem; }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 9px 20px;
            border-radius: 8px;
            font-family: inherit;
            font-size: 0.92rem;
            font-weight: 600;
            cursor: pointer;
            border: none;
            text-decoration: none;
            transition: all 0.18s;
        }

        .btn-primary { background: var(--primary-light); color: #fff; }
        .btn-primary:hover { background: var(--primary); transform: translateY(-1px); }
        .btn-accent { background: var(--accent); color: #fff; }
        .btn-accent:hover { background: #d97706; }
        .btn-danger { background: var(--danger); color: #fff; }
        .btn-danger:hover { background: #b91c1c; }
        .btn-outline { background: transparent; color: var(--primary-light); border: 2px solid var(--primary-light); }
        .btn-outline:hover { background: var(--primary-light); color: #fff; }
        .btn-sm { padding: 6px 14px; font-size: 0.84rem; }

        .table-wrap { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; font-size: 0.95rem; }
        thead tr { background: var(--primary); }
        thead th { color: #fff; padding: 13px 16px; font-weight: 600; text-align: left; }
        tbody tr { border-bottom: 1px solid var(--border); transition: background 0.15s; }
        tbody tr:hover { background: #f8fafc; }
        tbody td { padding: 13px 16px; vertical-align: middle; }

        .badge {
            display: inline-block;
            padding: 3px 12px;
            border-radius: 20px;
            font-size: 0.82rem;
            font-weight: 600;
            background: #dbeafe;
            color: var(--primary-light);
        }

        .form-group { margin-bottom: 1.4rem; }

        .form-group label {
            display: block;
            font-weight: 600;
            font-size: 0.92rem;
            color: var(--primary);
            margin-bottom: 6px;
        }

        .form-control {
            width: 100%;
            padding: 11px 14px;
            border: 2px solid var(--border);
            border-radius: 9px;
            font-family: inherit;
            font-size: 0.97rem;
            color: var(--text);
            transition: border-color 0.2s, box-shadow 0.2s;
            background: #f8fafc;
            outline: none;
        }

        .form-control:focus { border-color: var(--primary-light); box-shadow: 0 0 0 3px rgba(37,99,168,0.12); background: #fff; }
        .form-control.is-invalid { border-color: var(--danger); }
        .invalid-feedback { color: var(--danger); font-size: 0.83rem; margin-top: 4px; }
        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0 1.5rem; }
        .form-actions { display: flex; gap: 12px; margin-top: 0.5rem; }

        .detail-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1.2rem; }
        .detail-item { background: #f8fafc; border-radius: 10px; padding: 1rem 1.2rem; border-left: 4px solid var(--primary-light); }
        .detail-label { font-size: 0.8rem; font-weight: 600; color: var(--muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .detail-value { font-size: 1.05rem; font-weight: 600; color: var(--text); }

        .empty-state { text-align: center; padding: 3rem 1rem; color: var(--muted); }
        .empty-state .icon { font-size: 3.5rem; margin-bottom: 1rem; }
        .empty-state p { font-size: 1rem; }

        @media(max-width:640px) {
            .form-grid { grid-template-columns: 1fr; }
            .detail-grid { grid-template-columns: 1fr; }
            .card-body { padding: 1.2rem; }
            main { padding: 1.2rem 0.7rem; }
            nav { padding: 0 1rem; }
            .nav-links { gap: 0.4rem; }
            .nav-links a { padding: 6px 8px; font-size: 0.85rem; }
        }
    </style>
</head>
<body>

<nav>
    <a href="{{ route('schools.index') }}" class="nav-brand">
        <span>🏫</span> স্কুল ম্যানেজমেন্ট
    </a>
    <div class="nav-links">
        <a href="{{ route('schools.index') }}">সব স্কুল</a>
        <a href="{{ route('schools.create') }}">+ নতুন যোগ করুন</a>
    </div>
</nav>

<main>
    @if(session('success'))
        <div class="alert alert-success">✅ {{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-error">❌ {{ session('error') }}</div>
    @endif

    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
@stack('scripts')
</body>
</html>
