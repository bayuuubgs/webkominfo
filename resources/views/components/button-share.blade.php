<!-- @props([
    'hoverBorderColor' => 'hover:border-[#7A74F0]',
    'hoverBgColor' => 'hover:bg-[#7A74F0]/10',
]) -->

<button 
    {{ $attributes->merge([
        'class' => "group relative p-1 border border-transparent rounded-full transition-all duration-300 $hoverBorderColor $hoverBgColor"
    ]) }}
>
    <img src="{{ asset('storage/assets/icon-button-share.png') }}" 
         alt="Share Icon" 
         class="w-6 h-6 opacity-20 transition-all duration-300 group-hover:opacity-100 group-hover:scale-125 group-hover:brightness-200">
</button>
