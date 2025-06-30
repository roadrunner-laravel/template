<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RR-Laravel-Template</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">

<div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
    <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
        <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] border border-[rgba(26,26,0,0.16)] dark:border-[#fffaed2d] border-r-0 rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
            <h1 class="mb-1 font-medium">Let's get started</h1>
            <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
                Laravel has an incredibly rich ecosystem.
                <br>This template helps you to start with RoadRunner.
            </p>
            <ul class="flex flex-col mb-4 lg:mb-6">
                <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:top-1/2 before:bottom-0 before:left-[0.4rem] before:absolute">
                    <span class="relative py-1 bg-white dark:bg-[#161615]">
                        <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                            <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                        </span>
                    </span>
                    <span>
                        Read the
                        <a href="https://github.com/roadrunner-server/roadrunner" target="_blank" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433] ml-1">
                            <span>RoadRunner Documentation</span>
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5">
                                <path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor" stroke-linecap="square"/>
                            </svg>
                        </a>
                    </span>
                </li>
                <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:bottom-1/2 before:top-0 before:left-[0.4rem] before:absolute">
                    <span class="relative py-1 bg-white dark:bg-[#161615]">
                        <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                            <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                        </span>
                    </span>
                    <span>
                        Read about
                        <a href="https://github.com/roadrunner-php/laravel-bridge" target="_blank" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433] ml-1">
                            <span>Laravel bridge</span>
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5">
                                <path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor" stroke-linecap="square"/>
                            </svg>
                        </a>
                    </span>
                </li>
            </ul>
            <ul class="flex gap-3 text-sm leading-normal">
                <li>
                    <a href="https://github.com/roadrunner-laravel/template/blob/main/README.md" target="_blank" class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">
                        Start now
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex items-center p-6 pb-12 lg:p-20 pl-0 lg:pl-0 bg-white dark:bg-[#161615] relative lg:-ml-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg border-left-0 aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden border border-[rgba(26,26,0,0.16)] dark:border-[#fffaed2d] border-l-0">
            <img alt="rr-bridge-logo" class="mt-[-10px]" src="{{ asset('static/rr-bridge-logo.png') }}">
        </div>
    </main>
</div>
</body>
</html>
