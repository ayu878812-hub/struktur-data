<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Structure Lab</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav class="navbar">
    <div class="logo">⚡ DataStructure<span>Lab</span></div>
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="array.php">Array</a>
        <a href="linked-list.php">Linked List</a>
        <a href="stack.php">Stack</a>
    </div>
</nav>

<section class="hero">
    <div class="hero-content">
        <div class="badge">🚀 PHP Interactive Project</div>

        <h1>
            Belajar Struktur Data
            <span>Secara Interaktif</span>
        </h1>

        <p>
            Eksplorasi cara kerja Array, Linked List, dan Stack
            melalui simulasi visual yang interaktif.
        </p>

        <div class="hero-buttons">
            <a href="array.php" class="btn primary">Mulai Belajar →</a>
            <a href="#structures" class="btn secondary">Lihat Struktur</a>
        </div>
    </div>

    <div class="hero-visual">
        <div class="floating-card card-one">Array</div>
        <div class="floating-card card-two">Linked List</div>
        <div class="floating-card card-three">Stack</div>

        <div class="code-window">
            <div class="window-top">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <pre>
<span class="purple">$data</span> = [
    <span class="green">"PHP"</span>,
    <span class="green">"Array"</span>,
    <span class="green">"Stack"</span>
];

<span class="purple">echo</span> <span class="green">"Learn!"</span>;
            </pre>
        </div>
    </div>
</section>

<section id="structures" class="structures">
    <div class="section-title">
        <span>LEARNING MODULE</span>
        <h2>3 Struktur Data Linear</h2>
        <p>Pilih struktur data untuk mulai melakukan simulasi.</p>
    </div>

    <div class="structure-grid">

        <a href="array.php" class="structure-card blue">
            <div class="icon">📦</div>
            <h3>Array</h3>
            <p>
                Kumpulan data yang disimpan secara berurutan
                dan dapat diakses menggunakan indeks.
            </p>
            <div class="learn">Pelajari Array →</div>
        </a>

        <a href="linked-list.php" class="structure-card purple-card">
            <div class="icon">🔗</div>
            <h3>Linked List</h3>
            <p>
                Struktur data yang terdiri dari node yang
                saling terhubung menggunakan pointer.
            </p>
            <div class="learn">Pelajari Linked List →</div>
        </a>

        <a href="stack.php" class="structure-card orange">
            <div class="icon">📚</div>
            <h3>Stack</h3>
            <p>
                Struktur data dengan prinsip LIFO,
                yaitu data terakhir masuk akan keluar pertama.
            </p>
            <div class="learn">Pelajari Stack →</div>
        </a>

    </div>
</section>

<footer>
    <p>© 2026 DataStructureLab — PHP Data Structure Project</p>
</footer>

</body>
</html>
