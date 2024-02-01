@extends('layout')
@section('title','Registration')
@section('content')
   
<div class="h-screen bg-indigo-100 flex justify-center items-center">
    <div>
        @if($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
        @endif

        @if(session()->has('error'))
            <div>{{session('error')}}</div>
        @endif
        @if(session()->has('success'))
            <div>{{session('success')}}</div>
        @endif
    </div>
	<div class="lg:w-2/5 md:w-1/2 w-2/3">
		<form action="{{route('registration.post')}}" method="POST" class="bg-white p-10 rounded-lg shadow-lg min-w-full">
            @csrf
			<h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Formregister</h1>
			<div>
				<label class="text-gray-800 font-semibold block my-3 text-md" for="name">Username</label>
				<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="name" id="name" placeholder="username" />
      </div>
				<div>
					<label class="text-gray-800 font-semibold block my-3 text-md" for="email">Email</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="email" id="email" placeholder="@email" />
      </div>
					<div>
						<label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password</label>
						<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="password" name="password" id="password" placeholder="password" />
      </div>
						
							<button type="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Register</button>
							<button type="submit" class="w-full mt-6 mb-3 bg-indigo-100 rounded-lg px-4 py-2 text-lg text-gray-800 tracking-wide font-semibold font-sans">Login</button>
		</form>
	</div>
</div>

@endsection