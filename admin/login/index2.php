<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    
    <h2 class="text-center text-2xl font-semibold mb-4 uppercase mt-10 bg-gradient-to-br from-blue-700 to-blue-100 bg-clip-text text-transparent">LOGIN ADMIN / PETUGAS</h2>
    <div class="p-6 rounded-md shadow-md w-full max-w-sm mx-auto">

        <div class="flex justify-center mb-4">
            <img src="./logo-spp.png" alt="" class="w-72 rounded-md shadow">
        </div>

        <hr class="text-slate-200">

        <form action="">

            <div class="mb-4 mt-5">
                <label for="username" class="block text-sm text-slate-700">Username</label>
                <input type="Username" placeholder="Masukan Username Anda.." class="mt-1 w-full px-3 py-2 border border-slate-300 rounded-md focus:outline-none focus:ring focus:ring-blue-600">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm text-slate-700">Password</label>
                <input type="password" id="password" placeholder="Masukan Password Anda.." class="mt-1 w-full px-3 py-2 border border-slate-300 rounded-md focus:outline-none focus:ring focus:border-blue-600">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">LOGIN</button>

        </form>

        <div class="mt-3 text-center">
            <a href="index.php" class="text-sm text-blue-600 hover:underline">Login Sebagai Siswa</a>
        </div>
    </div>

</body>
</html>