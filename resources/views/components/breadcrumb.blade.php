@php
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Str;
    use Carbon\Carbon;

    $routeName = Route::currentRouteName();
    $segments = explode('.', $routeName);

    // Mapping opsional untuk mengganti nama segment
    $nameMap = [
        'index' => '',
        'galerifoto' => 'Galeri Foto',
    ];
@endphp

<div
    class="w-full bg-white flex justify-between items-center px-5 md:px-16 py-4 drop-shadow-lg font-heebo md:font-jakarta text-pM lg:text-p text-gray90 capitalize">
    @foreach ($segments as $index => $segment)
        @if ($index > 0)
            &nbsp;>&nbsp;
        @endif
        {{ $nameMap[$segment] ?? Str::title(Str::replace('-', ' ', $segment)) }}
    @endforeach
    <div class="text-primary30">
        {{ Carbon::now()->locale('id')->translatedFormat('l, d F Y') }}
    </div>
</div>