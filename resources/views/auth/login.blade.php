<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Platform As A Service</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>
<body class="min-h-screen bg-[#002633] bg-[url('https://ucarecdn.com/8d7efd17-34ea-4322-92c8-ff28c58fc2e1/1732449892814picsay1.png')] bg-repeat bg-[length:360px_640px] bg-[position:center]">
    <div class="absolute inset-0 bg-[#002633]/90"></div>

    <div class="relative">
    <div class="absolute top-4 left-4">
        <button class="text-white flex items-center">
            <img src="https://ucarecdn.com/fdc656a3-fce4-442b-8fe2-560beb9c6246/1732279541536.png" alt="EN" class="w-8 h-8 mr-2">
            Platform as a Service
        </button>
    </div>

    <div class="min-h-screen flex flex-col items-center justify-center">

        {{-- <div class="mb-8">
            <h1 class="text-white text-3xl font-bold">Platform as a Service</h1>
        </div> --}}
        <img src="https://ucarecdn.com/fdc656a3-fce4-442b-8fe2-560beb9c6246/1732279541536.png" alt="Descriptive Alt Text" class="mb-4 w-32 h-32">
        <!-- Login form -->
        <div class="w-full max-w-md px-6">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-semibold text-white mb-2">Login</h1>
                {{-- <p class="text-gray-300">gatau lah</p> --}}
            </div>

            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf
                
                <div>
                    <input type="email" name="email" 
                    class="bg-[#003344] border-0 text-white text-sm rounded-lg focus:ring-[#00ff9d] focus:border-[#00ff9d] block w-full p-3 placeholder-gray-400"
                    placeholder="Email" required>
                </div>

                <div>
                    <input type="password" name="password" 
                        class="bg-[#003344] border-0 text-white text-sm rounded-lg focus:ring-[#00ff9d] focus:border-[#00ff9d] block w-full p-3 placeholder-gray-400"
                        placeholder="Password" required>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" type="checkbox" 
                            class="w-4 h-4 rounded bg-[#003344] border-gray-600 text-[#00ff9d] focus:ring-[#00ff9d]">
                        <label for="remember" class="ml-2 text-sm text-white">Ingat saya</label>
                    </div>
                    <a href="#" class="text-[#00ff9d] text-sm hover:underline">Lupa password?</a>
                </div>

                <button type="submit" 
                    class="w-full text-white bg-[#00ff9d] hover:bg-[#00dd85] focus:ring-4 focus:ring-[#00ff9d]/50 font-medium rounded-lg text-sm px-5 py-3 text-center mt-6">
                    Login
                </button>
            </form>
        </div>

        <div class="text-center text-sm text-white mt-3">
            Belum punya akun? 
            <a href="{{ route('register') }}" class="text-[#00ff9d] hover:underline">Daftar disini</a>
        </div>
    </div>
        {{-- <div class="mt-8 text-center text-gray-400 text-sm">
            <p>Nyoba halaman login, buat kelompok cc</p>
            <p>Designed by asep bensin</p>
        </div> --}}
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>