<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Landing Page</title>
    <meta name="description" content="Get started with a free landing page built with Tailwind CSS and the Flowbite Blocks system.">
    <link href="{{ asset('cdd/output.css') }}" rel="stylesheet">
</head>
<body>
<section class="bg-white dark:bg-gray-900 mt-2.5">
    <div class="grid py-8 px-4 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="place-self-center mr-auto lg:col-span-7">
            <h1 class="text-3xl mb-3 md:text-5xl xl:text-6xl dark:text-white"> My System(HI ASIA)</h1>
            <h1 class="mb-4 max-w-1xl text-5xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">Ovozlarni yozib olish va saqlash tizimi</h1>
            <a href="{{ route('login') }}" class="inline-flex justify-center items-center py-3 px-5 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                Boshlash
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex sm:w-32 sm:order-none order-first sm:h-32 animate-bounce  h-20 w-20 sm:ml-10 items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
            <img src="https://cdn-flnbl.nitrocdn.com/ncnlNozzczhbtviZAyYrlAKBeJCJSoWX/assets/images/optimized/rev-e5636c9/static.voices.com/wp-mainsite/uploads/20230727083513/17-service.png" alt="mockup">
        </div>
    </div>
</section>

<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>
</html>
