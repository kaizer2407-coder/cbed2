<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login UI</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .bg-navy { background-color: #0b1f3a; }
        .text-navy { color: #0b1f3a; }
        .btn-navy { background-color: #0b1f3a; color: white; }
        .btn-navy:hover { background-color: #102a52; }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center bg-white">

<div class="w-full max-w-6xl bg-white shadow-2xl rounded-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2">

    <!-- LEFT IMAGE -->
    <div class="hidden md:block bg-navy">
        <img src="{{ asset('images/logo.png') }}"
             alt="Login Image"
             class="w-full h-full object-cover opacity-90">
    </div>

    <!-- RIGHT LOGIN -->
    <div class="flex items-center justify-center p-10 bg-white">

        <div class="w-full max-w-md">

            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-navy">Welcome</h1>
                <p class="text-gray-500 text-sm">Login to continue</p>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="text-sm text-gray-600">Email</label>
                <input type="email"
                       placeholder="you@example.com"
                       class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-[#0b1f3a] outline-none">
            </div>

            <!-- Password -->
            <div class="mb-4 relative">
                <label class="text-sm text-gray-600">Password</label>

                <input type="password" id="password"
                       placeholder="••••••••"
                       class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-[#0b1f3a] outline-none pr-10">

                <button type="button"
                        onclick="togglePassword()"
                        class="absolute right-3 top-9 text-gray-500 text-sm">
                    👁️
                </button>
            </div>

            <!-- Options -->
            <div class="flex justify-between items-center text-sm mb-6">
                <label class="flex items-center text-gray-600">
                    <input type="checkbox" class="mr-2">
                    Remember me
                </label>

                <a href="#" class="text-navy hover:underline">
                    Forgot password?
                </a>
            </div>

            <!-- Button -->
            <button onclick="fakeLogin()"
                    class="w-full btn-navy font-semibold py-3 rounded-lg transition">
                Login
            </button>

            <!-- Footer -->
            <p class="text-center text-sm text-gray-500 mt-6">
                Don’t have an account?
                <a href="{{ route('signup') }}" class="text-navy font-semibold hover:underline">Sign up</a>
            </p>

        </div>
    </div>

</div>

<script>
    function togglePassword() {
        const pass = document.getElementById("password");
        pass.type = pass.type === "password" ? "text" : "password";
    }

    function fakeLogin() {
        const btn = document.querySelector("button");

        btn.innerText = "Logging in...";
        btn.disabled = true;

        setTimeout(() => {
            btn.innerText = "Login";
            btn.disabled = false;
            alert("UI Only Login Page 🚀");
        }, 1200);
    }
</script>

</body>
</html>