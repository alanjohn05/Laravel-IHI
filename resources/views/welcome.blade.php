<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inhouse Internship Assignment — Alan John</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=DM+Mono:wght@400;500&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg:       #1A1612;
            --surface:  #231E19;
            --border:   #3A3028;
            --gold:     #D4A847;
            --gold-dim: rgba(212,168,71,0.12);
            --gold-mid: rgba(212,168,71,0.35);
            --cream:    #EDE8DF;
            --muted:    #7A6F62;
        }

        body {
            min-height: 100vh;
            background-color: var(--bg);
            font-family: 'DM Sans', sans-serif;
            color: var(--cream);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }

        /* Subtle radial warmth behind card */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background: radial-gradient(ellipse 60% 50% at 50% 50%, rgba(212,168,71,0.06) 0%, transparent 70%);
            pointer-events: none;
        }

        .card {
            position: relative;
            width: min(540px, 100%);
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 4px;
            padding: 0;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.4), 0 16px 48px rgba(0,0,0,0.6);
            animation: appear 0.5s ease both;
        }
        @keyframes appear {
            from { opacity: 0; transform: translateY(16px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        /* Gold top bar */
        .top-bar {
            height: 3px;
            background: linear-gradient(90deg, var(--gold) 0%, #a07820 100%);
        }

        .card-inner {
            padding: 40px 40px 36px;
        }

        /* Header row */
        .header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: 32px;
        }
        .eyebrow {
            font-family: 'DM Mono', monospace;
            font-size: 10px;
            font-weight: 500;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 10px;
        }
        h1 {
            font-family: 'DM Serif Display', serif;
            font-size: clamp(24px, 4.5vw, 30px);
            font-weight: 400;
            line-height: 1.2;
            color: var(--cream);
        }
        .assignment-number {
            font-family: 'DM Mono', monospace;
            font-size: 11px;
            color: var(--muted);
            border: 1px solid var(--border);
            padding: 5px 10px;
            border-radius: 2px;
            white-space: nowrap;
            margin-top: 4px;
        }

        /* Rule */
        .rule {
            height: 1px;
            background: var(--border);
            margin-bottom: 28px;
            position: relative;
        }
        .rule::before {
            content: '';
            position: absolute;
            left: 0; top: 0;
            width: 60px; height: 1px;
            background: var(--gold);
        }

        /* Info grid */
        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1px;
            background: var(--border);
            border: 1px solid var(--border);
            border-radius: 2px;
            overflow: hidden;
            margin-bottom: 24px;
        }
        .cell {
            background: var(--surface);
            padding: 16px 18px;
        }
        .cell-label {
            font-family: 'DM Mono', monospace;
            font-size: 9px;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 6px;
        }
        .cell-value {
            font-family: 'DM Sans', sans-serif;
            font-size: 15px;
            font-weight: 600;
            color: var(--cream);
        }
        .cell-value.gold { color: var(--gold); }

        /* Status row */
        .status {
            display: flex;
            align-items: center;
            gap: 12px;
            border: 1px solid rgba(120,200,100,0.2);
            background: rgba(120,200,100,0.05);
            border-radius: 2px;
            padding: 13px 16px;
            font-size: 13px;
            color: #9bcf88;
            font-weight: 500;
            margin-bottom: 32px;
        }
        .status-mark {
            width: 18px; height: 18px;
            border-radius: 50%;
            border: 1.5px solid #9bcf88;
            display: flex; align-items: center; justify-content: center;
            font-size: 10px;
            flex-shrink: 0;
        }

        /* Footer */
        .footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 20px;
            border-top: 1px solid var(--border);
        }
        .footer-left {
            font-family: 'DM Mono', monospace;
            font-size: 10px;
            color: var(--muted);
            letter-spacing: 0.06em;
        }
        .laravel-mark {
            display: flex;
            align-items: center;
            gap: 6px;
            font-family: 'DM Mono', monospace;
            font-size: 10px;
            color: var(--muted);
            letter-spacing: 0.06em;
        }
        .laravel-mark svg {
            width: 13px; height: 13px;
            color: #c0392b;
            opacity: 0.7;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="top-bar"></div>
        <div class="card-inner">

            <div class="header">
                <div>
                    <p class="eyebrow">Inhouse Internship</p>
                    <h1>Assignment One</h1>
                </div>
                <div class="assignment-number">ASN — 01</div>
            </div>

            <div class="rule"></div>

            <div class="grid">
                <div class="cell">
                    <p class="cell-label">Student Name</p>
                    <p class="cell-value">Alan John</p>
                </div>
                <div class="cell">
                    <p class="cell-label">Roll Number</p>
                    <p class="cell-value gold">5024102</p>
                </div>
                <div class="cell">
                    <p class="cell-label">Framework</p>
                    <p class="cell-value">Laravel 11</p>
                </div>
                <div class="cell">
                    <p class="cell-label">Environment</p>
                    <p class="cell-value">Laravel Herd</p>
                </div>
            </div>

            <div class="status">
                <div class="status-mark">✓</div>
                Homepage modified successfully using Laravel Herd.
            </div>

            <div class="footer">
                <span class="footer-left">2026 · Inhouse Internship Programme</span>
                <span class="laravel-mark">
                    <svg viewBox="0 0 50 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M49.626 11.564a.809.809 0 01.028.209v10.972a.8.8 0 01-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01a.814.814 0 01-.4.109.814.814 0 01-.4-.109L.401 39.944A.8.8 0 010 39.25V6.334c0-.1.017-.2.05-.292a.814.814 0 01.022-.06L.1 5.9a.825.825 0 01.182-.228.81.81 0 01.028-.026L9.716.054a.8.8 0 01.8 0l9.406 5.42a.805.805 0 01.098.068l.034.028a.804.804 0 01.174.222l.016.038c.032.089.05.183.05.28v20.92l8.008-4.616V11.773c0-.1.017-.2.05-.29a.813.813 0 01.022-.06l.028-.082a.82.82 0 01.182-.226l.028-.027 9.406-5.42a.8.8 0 01.8 0l9.408 5.42a.809.809 0 01.4.694.81.81 0 01-.046.24zm-1.354 10.49V12.56l-3.357 1.935-4.651 2.68v9.494l8.008-4.616zM39.018 39.615V30.12l-4.606 2.633-13.166 7.521v9.602l17.772-10.261zM1.601 7.009V38.56l17.772 10.261v-9.602l-9.205-5.248-.002-.003-.004-.002c-.031-.018-.061-.04-.09-.062l-.012-.012a.818.818 0 01-.064-.083l-.01-.014a.786.786 0 01-.056-.12l-.005-.017a.784.784 0 01-.024-.163V11.62L6.252 8.94 1.601 7.01v-.001zm8.807-5.026L2.401 6.334l8.005 4.616 8.006-4.616-8.006-4.351h.002zm4.204 28.559l4.65-2.68V7.367l-3.355 1.935-4.651 2.68v20.494l3.356-1.934zm24.205-17.84l-8.006 4.617 8.006 4.615 8.005-4.615-8.005-4.617zm-4.204 9.852l-4.651-2.68-3.357-1.935v9.493l4.651 2.68 3.357 1.935V22.554zm-18.01 10.27l11.993-6.85 5.994-3.428-8-4.612-9.207 5.303-8.4 4.841 9.62 4.746z" fill="currentColor"/>
                    </svg>
                    Laravel
                </span>
            </div>

        </div>
    </div>

</body>
</html>