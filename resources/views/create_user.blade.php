<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-6">Tambah User</h2>

        <form action="{{ route('user.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="nama" class="block font-medium">Nama :</label>
                <input type="text" id="nama" name="nama" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div>
                <label for="npm" class="block font-medium">NPM :</label>
                <input type="text" id="npm" name="npm" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div>
                <label for="kelas" class="block font-medium">Kelas :</label>
                <input type="text" id="kelas" name="kelas" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-blue-500" required>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600 transition">Submit</button>
        </form>
    </div>

</body>
</html>