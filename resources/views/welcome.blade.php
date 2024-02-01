@extends('layout')
@section('title','Home page')
@section('content')
<br><br>

    @auth
    {{auth()->user()->name}}
    @endauth
    <br>
    <button id="add" type="button" class="flex justify-end text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800 ">Ajouter des des services</button>
    <div id="info-popup" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
<div class="lg:w-2/5 md:w-1/2 w-2/3">
		<form action="{{route('service')}}" method="POST" class="bg-white p-10 rounded-lg shadow-lg min-w-full">
			@csrf
            @method('post')
            <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Service</h1>
			<div>
				<label class="text-gray-800 font-semibold block my-3 text-md" for="name">Title</label>
				<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="title" id="title" placeholder="title" />
            </div>
            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="name">Discreption</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="discreption" id="title" placeholder="discreption" />
            </div>
            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="name">category</label>
                <select name="categoryId" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->titre}}</option>
                    @endforeach
                </select>
            </div>
				
            <button id="close-modal" type="button"  class="py-2 px-4 w-full text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 sm:w-auto hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>		
			<button id="confirm-button" type="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Add</button>
		</form>
	</div>
</div>
<div class="flex flex-wrap justify-center items-center gap-8">
@foreach($services as $service)
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $service->title }}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    @endforeach
</div>





@endsection
