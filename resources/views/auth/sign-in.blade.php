    @extends('auth.main')

    @section('content')   
    <div class="container sticky top-0 z-sticky">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 flex-0">

            </div>
        </div>
    </div>
    <main class="mt-0 transition-all duration-200 ease-in-out">
        <section>
            <div class="relative flex items-center min-h-screen p-0 overflow-hidden bg-center bg-cover">
                <div class="container z-1">
                    <div class="flex flex-wrap -mx-3">
                        <div class="flex flex-col w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                            <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none lg:py4 dark:bg-gray-950 rounded-2xl bg-clip-border">
                                @if (session()->has('success'))        
                                    <div class="alert alert-success">
                                        <span class="message">{{ session('success') }}</span>
                                        <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
                                    </div>
                                @endif
                                
                                @if (session()->has('error'))        
                                    <div class="alert alert-danger">
                                        <span class="message">{{ session('error') }}</span>
                                        <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
                                    </div>
                                @endif

                                <div class="p-6 pb-0 mb-0">
                                    <h4 class="font-bold">Sign In</h4>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="flex-auto p-6">
                                    <form action="/" method="POST">
                                        @csrf
                                        <div class="mb-4">
                                            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" autofocus
                                                class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                        </div>
                                        <div class="mb-4">
                                            <input type="password" id="password" name="password" placeholder="Password"
                                                class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                        </div>
    
                                        <div class="text-center">
                                            <button type="submit"
                                                class="inline-block w-full px-16 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-white align-middle transition-all bg-tosca border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25">
                                                Sign in</button>
                                        </div>
                                    </form>
                                </div>
                                <div
                                    class="border-black/12.5 rounded-b-2xl border-t-0 border-solid p-6 text-center pt-0 px-1 sm:px-6">
                                    <p class="mx-auto mb-6 leading-normal text-sm">Don't have an account?
                                        <a href="/sign-up" class="font-semibold text-transparent bg-clip-text bg-tosca">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="absolute top-0 right-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex">
                            <div class="relative flex flex-col justify-center h-full bg-cover px-24 m-4 overflow-hidden bg-tosca rounded-xl ">
                                <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-zinc-800 opacity-60"></span>
                                <h4 class="z-20 mt-12 font-bold text-white typing-animation">Welcome to PatrolTrack !!!</h4>
                                <p class="z-20 text-white ">
                                    The more effortless the writing looks, the more effort the
                                    writer actually put into the process.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection