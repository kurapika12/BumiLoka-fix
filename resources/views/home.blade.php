<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BumiLoka - Beranda</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; }
        .container { max-width: 1200px; margin: 0 auto; }
        .header { text-align: center; margin-bottom: 40px; }
        .nav { margin: 20px 0; }
        .nav a { margin-right: 20px; text-decoration: none; color: #333; }
        .admin-link { position: absolute; top: 10px; right: 10px; font-size: 12px; }
    </style>
</head>
<body>
    <div class="admin-link">
        <a href="/login">Admin Login</a>
    </div>
    
    <div class="container">
        <div class="header">
            <h1>Selamat Datang di BumiLoka</h1>
            <p>Platform terbaik untuk kebutuhan Anda</p>
        </div>
        
        <nav class="nav">
            <a href="/">Beranda</a>
            <a href="/about">Tentang</a>
            <a href="/contact">Kontak</a>
        </nav>
        
        <div class="content">
            <h2>Konten Beranda</h2>
            <p>Ini adalah halaman beranda untuk user umum.</p>
            <p>Admin bisa login melalui <a href="/login">/login</a></p>
        </div>
    </div>
</body>
</html>