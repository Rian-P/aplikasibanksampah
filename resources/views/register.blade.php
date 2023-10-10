<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <meta name="description" content="">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
    .body-bg {
        background-image: linear-gradient(315deg, #6b1f1f 0%, #6e0505 74%);
    }
    </style>
</head>

<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <header class="max-w-lg mx-auto">
        <a href="#">
           
            <h1 class="text-4xl font-bold text-white text-center ">register</h1>
        </a>
    </header>

    <main class="max-w-lg mx-auto p-8 md:p-12 ">

        <section class="mt-0">
           
            <form class="flex flex-col" method="POST" action="">
                @csrf
                <div class="relative inline-block ">
                    <a class="block text-white text-sm font-bold mb-3 ml-2">Nama lengkap</a>
                    <div>
                        <input class="rounded-lg border border-gray-300 mb-3 px-2 py-2 w-full" name="nama" type="text"
                            placeholder="Tulis nama di sini" required />
                        <svg class="absolute top-10 right-4" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.36 12.2301C11.6915 12.7691 10.8587 13.063 10 13.063C9.14131 13.063 8.30849 12.7691 7.64 12.2301C7.43579 12.0604 7.17251 11.9787 6.90808 12.0031C6.64365 12.0275 6.39974 12.1559 6.23 12.3601C6.06027 12.5643 5.9786 12.8276 6.00298 13.092C6.02736 13.3565 6.15579 13.6004 6.36 13.7701C7.38134 14.6227 8.66957 15.0898 10 15.0898C11.3304 15.0898 12.6187 14.6227 13.64 13.7701C13.8442 13.6004 13.9726 13.3565 13.997 13.092C14.0214 12.8276 13.9397 12.5643 13.77 12.3601C13.686 12.259 13.5828 12.1754 13.4665 12.1142C13.3501 12.0529 13.2229 12.0152 13.0919 12.0031C12.8275 11.9787 12.5642 12.0604 12.36 12.2301ZM7 9.00012C7.19779 9.00012 7.39113 8.94147 7.55557 8.83159C7.72002 8.72171 7.8482 8.56553 7.92388 8.38281C7.99957 8.20008 8.01937 7.99901 7.98079 7.80503C7.9422 7.61105 7.84696 7.43287 7.70711 7.29302C7.56726 7.15316 7.38908 7.05792 7.19509 7.01934C7.00111 6.98075 6.80005 7.00056 6.61732 7.07624C6.43459 7.15193 6.27842 7.2801 6.16853 7.44455C6.05865 7.609 6 7.80234 6 8.00012C6 8.26534 6.10536 8.51969 6.2929 8.70723C6.48043 8.89476 6.73479 9.00012 7 9.00012ZM13 7.00012C12.8022 7.00012 12.6089 7.05877 12.4444 7.16865C12.28 7.27853 12.1518 7.43471 12.0761 7.61744C12.0004 7.80016 11.9806 8.00123 12.0192 8.19521C12.0578 8.38919 12.153 8.56738 12.2929 8.70723C12.4328 8.84708 12.6109 8.94232 12.8049 8.98091C12.9989 9.01949 13.2 8.99969 13.3827 8.924C13.5654 8.84831 13.7216 8.72014 13.8315 8.55569C13.9414 8.39124 14 8.1979 14 8.00012C14 7.73491 13.8946 7.48055 13.7071 7.29302C13.5196 7.10548 13.2652 7.00012 13 7.00012ZM10 0.00012207C8.02219 0.00012207 6.08879 0.586612 4.4443 1.68543C2.79981 2.78424 1.51809 4.34603 0.761209 6.17329C0.00433284 8.00055 -0.193701 10.0112 0.192152 11.951C0.578004 13.8908 1.53041 15.6727 2.92894 17.0712C4.32746 18.4697 6.10929 19.4221 8.0491 19.808C9.98891 20.1938 11.9996 19.9958 13.8268 19.2389C15.6541 18.482 17.2159 17.2003 18.3147 15.5558C19.4135 13.9113 20 11.9779 20 10.0001C20 8.6869 19.7413 7.38654 19.2388 6.17329C18.7363 4.96003 17.9997 3.85764 17.0711 2.92905C16.1425 2.00047 15.0401 1.26387 13.8268 0.761327C12.6136 0.25878 11.3132 0.00012207 10 0.00012207ZM10 18.0001C8.41775 18.0001 6.87104 17.5309 5.55544 16.6519C4.23985 15.7728 3.21447 14.5234 2.60897 13.0616C2.00347 11.5998 1.84504 9.99125 2.15372 8.4394C2.4624 6.88755 3.22433 5.46209 4.34315 4.34327C5.46197 3.22445 6.88743 2.46252 8.43928 2.15384C9.99113 1.84516 11.5997 2.00358 13.0615 2.60909C14.5233 3.21459 15.7727 4.23997 16.6518 5.55556C17.5308 6.87115 18 8.41787 18 10.0001C18 12.1219 17.1572 14.1567 15.6569 15.657C14.1566 17.1573 12.1217 18.0001 10 18.0001Z"
                                fill="#F2404D" />
                        </svg>
                    </div>
                </div>
                <div class="relative inline-block ">
                    <a class="block text-white text-sm font-bold mb-3 ml-2">Alamat Email</a>
                    <div>
                        <input class="rounded-lg border border-gray-300 mb-3 px-2 py-2 w-full" name="email" type="text"
                            placeholder="Tulis email di sini" required />
                        <svg class="absolute top-10 right-4" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.36 12.2301C11.6915 12.7691 10.8587 13.063 10 13.063C9.14131 13.063 8.30849 12.7691 7.64 12.2301C7.43579 12.0604 7.17251 11.9787 6.90808 12.0031C6.64365 12.0275 6.39974 12.1559 6.23 12.3601C6.06027 12.5643 5.9786 12.8276 6.00298 13.092C6.02736 13.3565 6.15579 13.6004 6.36 13.7701C7.38134 14.6227 8.66957 15.0898 10 15.0898C11.3304 15.0898 12.6187 14.6227 13.64 13.7701C13.8442 13.6004 13.9726 13.3565 13.997 13.092C14.0214 12.8276 13.9397 12.5643 13.77 12.3601C13.686 12.259 13.5828 12.1754 13.4665 12.1142C13.3501 12.0529 13.2229 12.0152 13.0919 12.0031C12.8275 11.9787 12.5642 12.0604 12.36 12.2301ZM7 9.00012C7.19779 9.00012 7.39113 8.94147 7.55557 8.83159C7.72002 8.72171 7.8482 8.56553 7.92388 8.38281C7.99957 8.20008 8.01937 7.99901 7.98079 7.80503C7.9422 7.61105 7.84696 7.43287 7.70711 7.29302C7.56726 7.15316 7.38908 7.05792 7.19509 7.01934C7.00111 6.98075 6.80005 7.00056 6.61732 7.07624C6.43459 7.15193 6.27842 7.2801 6.16853 7.44455C6.05865 7.609 6 7.80234 6 8.00012C6 8.26534 6.10536 8.51969 6.2929 8.70723C6.48043 8.89476 6.73479 9.00012 7 9.00012ZM13 7.00012C12.8022 7.00012 12.6089 7.05877 12.4444 7.16865C12.28 7.27853 12.1518 7.43471 12.0761 7.61744C12.0004 7.80016 11.9806 8.00123 12.0192 8.19521C12.0578 8.38919 12.153 8.56738 12.2929 8.70723C12.4328 8.84708 12.6109 8.94232 12.8049 8.98091C12.9989 9.01949 13.2 8.99969 13.3827 8.924C13.5654 8.84831 13.7216 8.72014 13.8315 8.55569C13.9414 8.39124 14 8.1979 14 8.00012C14 7.73491 13.8946 7.48055 13.7071 7.29302C13.5196 7.10548 13.2652 7.00012 13 7.00012ZM10 0.00012207C8.02219 0.00012207 6.08879 0.586612 4.4443 1.68543C2.79981 2.78424 1.51809 4.34603 0.761209 6.17329C0.00433284 8.00055 -0.193701 10.0112 0.192152 11.951C0.578004 13.8908 1.53041 15.6727 2.92894 17.0712C4.32746 18.4697 6.10929 19.4221 8.0491 19.808C9.98891 20.1938 11.9996 19.9958 13.8268 19.2389C15.6541 18.482 17.2159 17.2003 18.3147 15.5558C19.4135 13.9113 20 11.9779 20 10.0001C20 8.6869 19.7413 7.38654 19.2388 6.17329C18.7363 4.96003 17.9997 3.85764 17.0711 2.92905C16.1425 2.00047 15.0401 1.26387 13.8268 0.761327C12.6136 0.25878 11.3132 0.00012207 10 0.00012207ZM10 18.0001C8.41775 18.0001 6.87104 17.5309 5.55544 16.6519C4.23985 15.7728 3.21447 14.5234 2.60897 13.0616C2.00347 11.5998 1.84504 9.99125 2.15372 8.4394C2.4624 6.88755 3.22433 5.46209 4.34315 4.34327C5.46197 3.22445 6.88743 2.46252 8.43928 2.15384C9.99113 1.84516 11.5997 2.00358 13.0615 2.60909C14.5233 3.21459 15.7727 4.23997 16.6518 5.55556C17.5308 6.87115 18 8.41787 18 10.0001C18 12.1219 17.1572 14.1567 15.6569 15.657C14.1566 17.1573 12.1217 18.0001 10 18.0001Z"
                                fill="#F2404D" />
                        </svg>
                    </div>
                </div>
                
                <div class="relative inline-block ">
                    <a class="block text-white text-sm font-bold mb-3 ml-2">Nomor Hp</a>
                    <div>
                        <input class="rounded-lg border border-gray-300 mb-3 px-2 py-2 w-full" name="no_hp"
                            type="number" placeholder="Tulis nomor hp di sini" required />
                        <svg class="absolute top-10 right-4" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.36 12.2301C11.6915 12.7691 10.8587 13.063 10 13.063C9.14131 13.063 8.30849 12.7691 7.64 12.2301C7.43579 12.0604 7.17251 11.9787 6.90808 12.0031C6.64365 12.0275 6.39974 12.1559 6.23 12.3601C6.06027 12.5643 5.9786 12.8276 6.00298 13.092C6.02736 13.3565 6.15579 13.6004 6.36 13.7701C7.38134 14.6227 8.66957 15.0898 10 15.0898C11.3304 15.0898 12.6187 14.6227 13.64 13.7701C13.8442 13.6004 13.9726 13.3565 13.997 13.092C14.0214 12.8276 13.9397 12.5643 13.77 12.3601C13.686 12.259 13.5828 12.1754 13.4665 12.1142C13.3501 12.0529 13.2229 12.0152 13.0919 12.0031C12.8275 11.9787 12.5642 12.0604 12.36 12.2301ZM7 9.00012C7.19779 9.00012 7.39113 8.94147 7.55557 8.83159C7.72002 8.72171 7.8482 8.56553 7.92388 8.38281C7.99957 8.20008 8.01937 7.99901 7.98079 7.80503C7.9422 7.61105 7.84696 7.43287 7.70711 7.29302C7.56726 7.15316 7.38908 7.05792 7.19509 7.01934C7.00111 6.98075 6.80005 7.00056 6.61732 7.07624C6.43459 7.15193 6.27842 7.2801 6.16853 7.44455C6.05865 7.609 6 7.80234 6 8.00012C6 8.26534 6.10536 8.51969 6.2929 8.70723C6.48043 8.89476 6.73479 9.00012 7 9.00012ZM13 7.00012C12.8022 7.00012 12.6089 7.05877 12.4444 7.16865C12.28 7.27853 12.1518 7.43471 12.0761 7.61744C12.0004 7.80016 11.9806 8.00123 12.0192 8.19521C12.0578 8.38919 12.153 8.56738 12.2929 8.70723C12.4328 8.84708 12.6109 8.94232 12.8049 8.98091C12.9989 9.01949 13.2 8.99969 13.3827 8.924C13.5654 8.84831 13.7216 8.72014 13.8315 8.55569C13.9414 8.39124 14 8.1979 14 8.00012C14 7.73491 13.8946 7.48055 13.7071 7.29302C13.5196 7.10548 13.2652 7.00012 13 7.00012ZM10 0.00012207C8.02219 0.00012207 6.08879 0.586612 4.4443 1.68543C2.79981 2.78424 1.51809 4.34603 0.761209 6.17329C0.00433284 8.00055 -0.193701 10.0112 0.192152 11.951C0.578004 13.8908 1.53041 15.6727 2.92894 17.0712C4.32746 18.4697 6.10929 19.4221 8.0491 19.808C9.98891 20.1938 11.9996 19.9958 13.8268 19.2389C15.6541 18.482 17.2159 17.2003 18.3147 15.5558C19.4135 13.9113 20 11.9779 20 10.0001C20 8.6869 19.7413 7.38654 19.2388 6.17329C18.7363 4.96003 17.9997 3.85764 17.0711 2.92905C16.1425 2.00047 15.0401 1.26387 13.8268 0.761327C12.6136 0.25878 11.3132 0.00012207 10 0.00012207ZM10 18.0001C8.41775 18.0001 6.87104 17.5309 5.55544 16.6519C4.23985 15.7728 3.21447 14.5234 2.60897 13.0616C2.00347 11.5998 1.84504 9.99125 2.15372 8.4394C2.4624 6.88755 3.22433 5.46209 4.34315 4.34327C5.46197 3.22445 6.88743 2.46252 8.43928 2.15384C9.99113 1.84516 11.5997 2.00358 13.0615 2.60909C14.5233 3.21459 15.7727 4.23997 16.6518 5.55556C17.5308 6.87115 18 8.41787 18 10.0001C18 12.1219 17.1572 14.1567 15.6569 15.657C14.1566 17.1573 12.1217 18.0001 10 18.0001Z"
                                fill="#F2404D" />
                        </svg>
                    </div>
                </div>
                <div class="relative inline-block">
                    <a class="block text-white text-sm font-bold mb-3 ml-2">Kata Sandi</a>
                    <div class="password-container">
                        <input class="rounded-lg border border-gray-300 mb-3 px-2 py-2 w-full" type="password"
                            name="password" placeholder="Tulis katasandi di sini" required />
                        <svg class="toggle-password absolute top-10 right-4 cursor-pointer" width="20" height="20"
                            viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.36 12.2301C11.6915 12.7691 10.8587 13.063 10 13.063C9.14131 13.063 8.30849 12.7691 7.64 12.2301C7.43579 12.0604 7.17251 11.9787 6.90808 12.0031C6.64365 12.0275 6.39974 12.1559 6.23 12.3601C6.06027 12.5643 5.9786 12.8276 6.00298 13.092C6.02736 13.3565 6.15579 13.6004 6.36 13.7701C7.38134 14.6227 8.66957 15.0898 10 15.0898C11.3304 15.0898 12.6187 14.6227 13.64 13.7701C13.8442 13.6004 13.9726 13.3565 13.997 13.092C14.0214 12.8276 13.9397 12.5643 13.77 12.3601C13.686 12.259 13.5828 12.1754 13.4665 12.1142C13.3501 12.0529 13.2229 12.0152 13.0919 12.0031C12.8275 11.9787 12.5642 12.0604 12.36 12.2301ZM7 9.00012C7.19779 9.00012 7.39113 8.94147 7.55557 8.83159C7.72002 8.72171 7.8482 8.56553 7.92388 8.38281C7.99957 8.20008 8.01937 7.99901 7.98079 7.80503C7.9422 7.61105 7.84696 7.43287 7.70711 7.29302C7.56726 7.15316 7.38908 7.05792 7.19509 7.01934C7.00111 6.98075 6.80005 7.00056 6.61732 7.07624C6.43459 7.15193 6.27842 7.2801 6.16853 7.44455C6.05865 7.609 6 7.80234 6 8.00012C6 8.26534 6.10536 8.51969 6.2929 8.70723C6.48043 8.89476 6.73479 9.00012 7 9.00012ZM13 7.00012C12.8022 7.00012 12.6089 7.05877 12.4444 7.16865C12.28 7.27853 12.1518 7.43471 12.0761 7.61744C12.0004 7.80016 11.9806 8.00123 12.0192 8.19521C12.0578 8.38919 12.153 8.56738 12.2929 8.70723C12.4328 8.84708 12.6109 8.94232 12.8049 8.98091C12.9989 9.01949 13.2 8.99969 13.3827 8.924C13.5654 8.84831 13.7216 8.72014 13.8315 8.55569C13.9414 8.39124 14 8.1979 14 8.00012C14 7.73491 13.8946 7.48055 13.7071 7.29302C13.5196 7.10548 13.2652 7.00012 13 7.00012ZM10 0.00012207C8.02219 0.00012207 6.08879 0.586612 4.4443 1.68543C2.79981 2.78424 1.51809 4.34603 0.761209 6.17329C0.00433284 8.00055 -0.193701 10.0112 0.192152 11.951C0.578004 13.8908 1.53041 15.6727 2.92894 17.0712C4.32746 18.4697 6.10929 19.4221 8.0491 19.808C9.98891 20.1938 11.9996 19.9958 13.8268 19.2389C15.6541 18.482 17.2159 17.2003 18.3147 15.5558C19.4135 13.9113 20 11.9779 20 10.0001C20 8.6869 19.7413 7.38654 19.2388 6.17329C18.7363 4.96003 17.9997 3.85764 17.0711 2.92905C16.1425 2.00047 15.0401 1.26387 13.8268 0.761327C12.6136 0.25878 11.3132 0.00012207 10 0.00012207ZM10 18.0001C8.41775 18.0001 6.87104 17.5309 5.55544 16.6519C4.23985 15.7728 3.21447 14.5234 2.60897 13.0616C2.00347 11.5998 1.84504 9.99125 2.15372 8.4394C2.4624 6.88755 3.22433 5.46209 4.34315 4.34327C5.46197 3.22445 6.88743 2.46252 8.43928 2.15384C9.99113 1.84516 11.5997 2.00358 13.0615 2.60909C14.5233 3.21459 15.7727 4.23997 16.6518 5.55556C17.5308 6.87115 18 8.41787 18 10.0001C18 12.1219 17.1572 14.1567 15.6569 15.657C14.1566 17.1573 12.1217 18.0001 10 18.0001Z"
                                fill="#F2404D" fill="#F2404D" />
                        </svg>
                    </div>
                </div>
                <div>
                    <a class="block text-gray-400 text-sm font-bold mb-1 ml-2 py-2">Katasandi Minimal 8 Huruf (terdiri
                        dari huruf, angka dan karakter spesial)</a>
                </div>
                <p class="mt-4 text-center text-gray-500">Already have an account? <a href="/login"
                        class="text-indigo-500 hover:text-indigo-700 font-semibold">Login</a></p>
                <button class="bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-44 rounded-xl"
                    type="submit">Register</button>
            </form>
        </section>
    </main>
</body>
<script>
const togglePassword = document.querySelector('.toggle-password');
const passwordInput = document.querySelector('input[name="password"]');

togglePassword.addEventListener('click', function() {
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
});
</script>

</html>