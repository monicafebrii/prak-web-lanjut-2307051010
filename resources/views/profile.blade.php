<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/asset/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-center">

        <div class="flex justify-center mb-3">
            <img src="/img/d1b8733d-e1fa-4d74-b472-77962fe9383f.jpg" 
            alt="Profile" 
            class="w-60 h-60 rounded-full border-4 border-gray-300 object-cover">
        </div>
        <div class="space-y-5 text-left px-6 py-3">
            <div class="bg-gray-200 py-3 px-4 rounded-md font-semibold">Nama : <?= $nama ?></div>
            <div class="bg-gray-200 py-3 px-4 rounded-md font-semibold">Kelas : <?= $kelas ?></div>
            <div class="bg-gray-200 py-3 px-4 rounded-md font-semibold">NPM : <?= $npm ?></div>
        </div>
        
    </div>
</body>
</html>