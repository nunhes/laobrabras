<!-- compoñente tooltip -->
<div class="relative flex inline-flex flex-col items-center group">
            <span class="items-center mt-3"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                </path>
              </svg></span>

    <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
              <span
                  class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">{{ __('Back') }}</span>
        <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
    </div>
</div>
<!-- end tooltip -->
