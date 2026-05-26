<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signup UI</title>

<script src="https://cdn.tailwindcss.com"></script>

<style>
    .bg-navy { background-color: #0b1f3a; }
    .text-navy { color: #0b1f3a; }
    .btn-navy { background-color: #0b1f3a; color: white; }
    .btn-navy:hover { background-color: #102a52; }
</style>
</head>

<body class="min-h-screen flex items-center justify-center bg-white">

<!-- CENTERED CARD ONLY -->
<div class="w-full max-w-md bg-white shadow-2xl rounded-2xl p-10">

    <!-- HEADER -->
    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold text-navy">Create Account</h1>
        <p class="text-gray-500 text-sm">Sign up to get started</p>
    </div>

    <!-- FULL NAME -->
    <div class="mb-4">
        <label class="text-sm text-gray-600">Full Name</label>
        <input type="text"
               placeholder="John Doe"
               class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-[#0b1f3a] outline-none">
    </div>

    <!-- EMAIL -->
    <div class="mb-4">
        <label class="text-sm text-gray-600">Email</label>
        <input type="email"
               placeholder="you@example.com"
               class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-[#0b1f3a] outline-none">
    </div>

    <!-- PASSWORD -->
    <div class="mb-4 relative">
        <label class="text-sm text-gray-600">Password</label>

        <input type="password" id="password"
               placeholder="••••••••"
               class="w-full mt-1 p-3 border rounded-lg pr-10 focus:ring-2 focus:ring-[#0b1f3a] outline-none">

        <button type="button"
                onclick="togglePassword()"
                class="absolute right-3 top-9 text-gray-500 text-sm">
            👁️
        </button>
    </div>

    <!-- CONFIRM PASSWORD -->
    <div class="mb-6 relative">
        <label class="text-sm text-gray-600">Confirm Password</label>

        <input type="password" id="confirmPassword"
               placeholder="••••••••"
               class="w-full mt-1 p-3 border rounded-lg pr-10 focus:ring-2 focus:ring-[#0b1f3a] outline-none">

        <button type="button"
                onclick="toggleConfirmPassword()"
                class="absolute right-3 top-9 text-gray-500 text-sm">
            👁️
        </button>
    </div>

    <!-- BUTTON -->
    <button onclick="fakeSignup()"
            class="w-full btn-navy font-semibold py-3 rounded-lg transition">
        Sign Up
    </button>

    <!-- FOOTER -->
    <p class="text-center text-sm text-gray-500 mt-6">
        Already have an account?
        <a href="{{ route('login') }}" class="text-navy font-semibold hover:underline">Login</a>
    </p>

</div>

<script>
function togglePassword() {
    const pass = document.getElementById("password");
    pass.type = pass.type === "password" ? "text" : "password";
}

function toggleConfirmPassword() {
    const pass = document.getElementById("confirmPassword");
    pass.type = pass.type === "password" ? "text" : "password";
}

function fakeSignup() {
    const btn = document.querySelector("button");

    btn.innerText = "Creating account...";
    btn.disabled = true;

    setTimeout(() => {
        btn.innerText = "Sign Up";
        btn.disabled = false;
        alert("UI Only Signup 🚀");
    }, 1200);
}
</script>

</body>
</html>