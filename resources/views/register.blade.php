<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full bg-purple-900	">
    <div class="flex min-h-full flex-row justify-center p-10 shadow-lg">
        <img class="rounded-tl-xl rounded-bl-xl w-3/4" src="{{ asset('images/bghd.webp') }}" >
        <!-- Login Kanan-->
        <div class="rounded-tr-xl rounded-br-xl bg-white w-screen flex min-h-full flex-col justify-center p-20 xl:px-24">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
              <img class="mx-auto h-10 w-auto" src="https://moogie.id/assets/images/1680512565_28bd505aa10e4d552ac2.png" >
              <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Fill Form Below </h2>
            </div>
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
              
                <form class="space-y-6" action="#" method="POST">
                    <div>
                      <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                      <div class="mt-2">
                        <input id="name" name="name" type="text" autocomplete="name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      </div>
                    </div>
                  
                    <div>
                      <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                      <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      </div>
                    </div>
                  
                    <div>
                      <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                      <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="new-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      </div>
                    </div>
                  
                    <div>
                      <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
                      <div class="mt-2">
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      </div>
                    </div>
                  
                    <div>
                      <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                    </div>
                  </form>
                  

              <p class="mt-10 text-center text-sm text-gray-500">
                Already Have an Account?
                <a href="/" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Login</a>
              </p>
            </div>
          </div>
    </div>
</body>
</html>