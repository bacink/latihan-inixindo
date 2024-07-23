@extends('layouts.app')
 
@section('title', 'Latihan Laravel')
 
 
@section('content')
<section
class="relative bg-[url(https://images.unsplash.com/photo-1616071906060-1f425a639465?q=80&w=1466&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)] bg-cover bg-center bg-no-repeat"
>
<div
  class="absolute inset-0 bg-gray-900/75 sm:bg-transparent sm:from-gray-900/95 sm:to-gray-900/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l"
></div>

<div
  class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8"
>
  <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
    <h1 class="text-3xl font-extrabold text-white sm:text-5xl">
        MEMBUAT APLIKASI WEB
      <strong class="block font-extrabold text-rose-500"> LARAVEL </strong>
    </h1>

    <p class="mt-4 max-w-lg text-white sm:text-xl/relaxed">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
      numquam ea!
    </p>

    <div class="mt-8 flex flex-wrap gap-4 text-center">
      <a
        href="#"
        class="block w-full rounded bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto"
      >
        Get Started
      </a>

      <a
        href="#"
        class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-rose-600 shadow hover:text-rose-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto"
      >
        Learn More
      </a>
    </div>
  </div>
</div>
</section>
@endsection