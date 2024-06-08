<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="	">
    <nav class="bg-gray-800 " x-data="{ isOpen: false }">
        
    </div>

    <div class=" mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
          <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
              <!-- Mobile menu button-->
              <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!--
                  Icon when menu is closed.
      
                  Menu open: "hidden", Menu closed: "block"
                -->
                <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!--
                  Icon when menu is open.
      
                  Menu open: "block", Menu closed: "hidden"
                -->
                <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
              <div class="flex flex-shrink-0 items-center">
                <img class="h-8 w-auto" src="https://www.creativefabrica.com/wp-content/uploads/2023/05/08/Video-Game-Controller-Logo-Graphics-69127373-1-580x387.png" alt="Your Company">
              </div>
              <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <a href="/home" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Dashboard</a>
                </div>
              </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
      
              <!-- Profile dropdown -->
              <div class="relative ml-3">
                <div>
                  <button type="button" @click="isOpen = !isOpen" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="https://cdn.icon-icons.com/icons2/1769/PNG/512/4092564-about-mobile-ui-profile-ui-user-website_114033.png" alt="">
                  </button>
                </div>
                <div  x-show="isOpen"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                  <!-- Active: "bg-gray-100", Not Active: "" -->
                  <a href="/profile" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="isOpen" class="sm:hidden" id="mobile-menu">
          <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/home" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
          </div>
        </div>
      </nav>
    
        <div class="max-w-4xl mx-auto mt-10 p-10 shadow-lg rounded-lg w-3/5 bg-white">
          <h2 class="text-2xl font-bold text-gray-900 mb-6">Your Profile</h2>
          <div class="mt-6">
              <dl class="space-y-4">
                  <div class="bg-gray-50 p-4 rounded-md">
                      <dt class="text-sm font-medium text-gray-500">Name</dt>
                      <dd class="mt-1 text-sm text-gray-900">{{ $user->name }}</dd>
                  </div>
                  <div class="bg-white p-4 rounded-md">
                      <dt class="text-sm font-medium text-gray-500">Email address</dt>
                      <dd class="mt-1 text-sm text-gray-900">{{ $user->email }}</dd>
                  </div>
                  <div class="bg-gray-50 p-4 rounded-md">
                      <dt class="text-sm font-medium text-gray-500">Age</dt>
                      <dd class="mt-1 text-sm text-gray-900">{{ $user->age }}</dd>
                  </div>
                  <div class="bg-white p-4 rounded-md">
                      <dt class="text-sm font-medium text-gray-500">Phone Number</dt>
                      <dd class="mt-1 text-sm text-gray-900">{{ $user->phonenumber }}</dd>
                  </div>
                  <div class="bg-gray-50 p-4 rounded-md">
                      <dt class="text-sm font-medium text-gray-500">Date of Birth</dt>
                      <dd class="mt-1 text-sm text-gray-900">{{ $user->datebirth }}</dd>
                  </div>
                  <div class="bg-white p-4 rounded-md">
                      <dt class="text-sm font-medium text-gray-500">Gender</dt>
                      <dd class="mt-1 text-sm text-gray-900">{{ $user->gender }}</dd>
                  </div>
              </dl>
          </div>
          <div class="mt-6">
              <a href="{{ route('edit.profile') }}" class="text-indigo-600 hover:text-indigo-900">Edit Profile</a>
          </div>
      </div>
</body>
</html>