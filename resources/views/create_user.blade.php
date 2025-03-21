<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-md border border-gray-200">
        <h2 class="text-3xl font-bold text-center text-blue-600 mb-6">Tambah User</h2>

        <form action="{{ route('user.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="nama" class="block font-semibold text-gray-700">Nama :</label>
                <input type="text" id="nama" name="nama"
                    class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-blue-500 focus:outline-none focus:border-blue-500 transition-shadow shadow-sm">

                @foreach ($errors->get('nama') as $msg)
                    <p class="text-red-500 text-sm mt-1">{{ $msg }}</p>
                @endforeach
            </div>

            <div>
                <label for="npm" class="block font-semibold text-gray-700">NPM :</label>
                <input type="text" id="npm" name="npm" 
                    class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-blue-500 focus:outline-none focus:border-blue-500 transition-shadow shadow-sm">

                @foreach ($errors->get('npm') as $msg)
                    <p class="text-red-500 text-sm mt-1">{{ $msg }}</p>
                @endforeach
            </div>

            <div>
                <label for="kelas_id" class="block font-semibold text-gray-700">Kelas:</label>
                <select name="kelas_id" id="kelas_id" 
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm bg-white text-gray-700 focus:ring-blue-500 focus:border-blue-500 focus:outline-none transition">
                    
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>

                @foreach ($errors->get('kelas_id') as $msg)
                    <p class="text-red-500 text-sm mt-1">{{ $msg }}</p>
                @endforeach
            </div>

            <button type="submit" 
                class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600 transition-all duration-200 transform hover:scale-105 shadow-md">
                Submit
            </button>
        </form>
    </div>

</body>
</html>