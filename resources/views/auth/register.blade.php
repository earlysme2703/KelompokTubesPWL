<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Platform As A Service</title>
    <!-- Tailwind CSS dan Flowbite CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>
<body class="min-h-screen bg-[#002633] bg-[url('https://ucarecdn.com/8d7efd17-34ea-4322-92c8-ff28c58fc2e1/1732449892814picsay1.png')] bg-repeat bg-[length:360px_640px] bg-[position:center]">
    <div class="absolute inset-0 bg-[#002633]/90"></div>

    <div class="relative">
    <div class="absolute top-4 left-4">
        <button class="text-white flex items-center">
            <img src="https://ucarecdn.com/fdc656a3-fce4-442b-8fe2-560beb9c6246/1732279541536.png" alt="EN" class="w-6 h-6 mr-2">
            Platform as a Service
        </button>
    </div>

    <!-- Main content -->
    <div class="min-h-screen flex flex-col items-center justify-center">
        <!-- Register form -->
        <div class="w-full max-w-md px-6">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-semibold text-white mb-2">Register</h1>
            </div>

            <form action="{{ route('register') }}" method="POST" class="space-y-4">
                @csrf
                
                <div>
                    <input type="text" name="name" 
                        class="bg-[#003344] border-0 text-white text-sm rounded-lg focus:ring-[#00ff9d] focus:border-[#00ff9d] block w-full p-3 placeholder-gray-400"
                        placeholder="Nama Lengkap" required>
                </div>

                <div>
                    <input type="email" name="email" 
                        class="bg-[#003344] border-0 text-white text-sm rounded-lg focus:ring-[#00ff9d] focus:border-[#00ff9d] block w-full p-3 placeholder-gray-400"
                        placeholder="Alamat Email" required>
                </div>

                <div>
                    <select name="role" 
                        class="bg-[#003344] border-0 text-white text-sm rounded-lg focus:ring-[#00ff9d] focus:border-[#00ff9d] block w-full p-3" required>
                        <option value="" disabled selected>Pilih Role</option>
                        <option value="Kasir">Kasir</option>
                        <option value="Supervisor">Supervisor</option>
                        <option value="Manajer">Manajer</option>
                        <option value="Gudang">Gudang</option>
                    </select>
                </div>
                

                <div>
                    <input type="password" name="password" 
                        class="bg-[#003344] border-0 text-white text-sm rounded-lg focus:ring-[#00ff9d] focus:border-[#00ff9d] block w-full p-3 placeholder-gray-400"
                        placeholder="Password" required>
                </div>

                <div>
                    <input type="password" name="password_confirmation" 
                        class="bg-[#003344] border-0 text-white text-sm rounded-lg focus:ring-[#00ff9d] focus:border-[#00ff9d] block w-full p-3 placeholder-gray-400"
                        placeholder="Konfirmasi Password" required>
                </div>

                <button type="submit" 
                    class="w-full text-white bg-[#00ff9d] hover:bg-[#00dd85] focus:ring-4 focus:ring-[#00ff9d]/50 font-medium rounded-lg text-sm px-5 py-3 text-center mt-6">
                    Daftar
                </button>

                <div class="text-center text-sm text-white">
                    Sudah punya account? 
                    <a href="{{ route('login') }}" class="text-[#00ff9d] hover:underline">Login disini</a>
                </div>
            </form>
        </div>
    </div>
    </div>

    <!-- Flowbite JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
