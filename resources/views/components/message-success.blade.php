
@if (isset($success))
    <div {{ $attributes }}>
        <ul class="mt-3 text-green-600 font-bold text-8xl text-lg">
            <li>{{ $success }}</li>
        </ul>
    </div>
@endif
