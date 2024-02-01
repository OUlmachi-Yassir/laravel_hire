<nav>
    <div class="">
      <div class="flex justify-between h-16 px-10 shadow items-center">
        <div class="flex items-center space-x-8">
          <h1 class="text-xl lg:text-2xl font-bold cursor-pointer">{{config('app.name')}}</h1>
          <div class="hidden md:flex justify-around space-x-4">
            <a href="#" class="hover:text-indigo-600 text-gray-700">..</a>
          </div>
        </div>
        <div class="flex space-x-4 items-center">
        <a href="#" class="hover:text-indigo-600 text-gray-700 mr-11">Home</a>
        @auth
          <a href="{{route('logout')}}" class="bg-red-600 hover:bg-black px-4 py-2 rounded  text-white text-sm ">Log-Out</a>
        @else
          <a href="{{route('registration')}}" class="bg-indigo-600 px-4 py-2 rounded text-white hover:bg-indigo-500 text-sm">SIGNUP</a>
          <a href="{{route('login')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1.5 px-4 border border-blue-500 hover:border-transparent rounded">LOGIN</a>
        @endauth
        </div>
      </div>
    </div>
  </nav>