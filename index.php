<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - SDP Tracker System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
  .button-container {
    display: flex;
    justify-content: center; 
    margin-top: 20px; 
}

.login-btn {
    background-color: #fff;
    color: black;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 15px;
    transition: background-color 0.3s ease;

}

.login-btn:hover {
    background-color: #2779bd; 
}


</style>
<body class="bg-white flex items-center justify-center min-h-screen">
    <div class="flex flex-col items-center">
        <img alt="CDO logo" class="mb-4 rounded-full -mt-12" height="200" src="student/CSO-logo.png" width="200">
        <div class="diamond-container">
            <h1 class="diamond-text text-xl font-semibold" style="font-family: 'Dancing Script', cursive;">
                Cagayan de Oro City Scholar Management with Student Development Program Tracker
            </h1>
        </div>
    </div>
    <div class="ml-10 p-8 bg-blue-900 rounded-lg shadow-lg w-80">
        <h2 class="text-white text-xl mb-4">Login</h2>
        <form method="post" action="student/Student_dashboard.php">
            <div class="mb-4">
                <label class="block text-gray-300 mb-2" for="username">Username</label>
                <div class="relative">
                    <input class="w-full px-3 py-2 text-gray-700 bg-gray-200 rounded" id="username" name="username" placeholder="Username" type="text" required autofocus>
                    <i class="fas fa-user absolute right-3 top-3 text-gray-500"></i>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-300 mb-2" for="password">Password</label>
                <div class="relative">
                    <input class="w-full px-3 py-2 text-gray-700 bg-gray-200 rounded" id="password" name="password" placeholder="Password" type="password" required>
                    <i class="fas fa-lock absolute right-3 top-3 text-gray-500"></i>
                </div>
            </div>
            <div class="mb-4 text-right">
                <a class="text-gray-300 text-sm" href="forgot_password.php">Forgot password?</a>
            </div>
            <div class="button-container">
    <button class="login-btn" type="submit" href="student/Student_dashboard.php">Login</button>
</div>

        </form>
    </div>
</body>
</html>
