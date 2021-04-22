@if(request()->is('/'))
<div>
    <div class="px-4 sm:px-6 lg:max-w-7xl lg:mx-auto lg:px-8">
        <div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
            <div class="flex-1 min-w-0">
                <!-- Profile -->
                <div class="flex items-center">
                    <img class="hidden h-16 w-16 rounded-full sm:block"
                        src="{{ auth()->user()->avatar }}"
                        alt="{{ auth()->user()->name }}">
                    <div>
                        <div class="flex items-center">
                            <img class="h-16 w-16 rounded-full sm:hidden"
                                src="{{ auth()->user()->avatar }}"
                                alt="{{ auth()->user()->name }}">
                            <h1 class="ml-3 text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">
                                {{ $welcome }} {{ auth()->user()->name }}
                            </h1>
                        </div>
                        <dl class="mt-6 flex flex-col sm:ml-3 sm:mt-1 sm:flex-row sm:flex-wrap">
                            <dt class="sr-only">Date</dt>
                            <dd
                                class="flex items-center text-sm text-gray-500 font-medium sm:mr-6">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Today is {{ now()->format('F jS, Y') }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
