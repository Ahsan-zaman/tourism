@if (session()->has('message'))
<div class="text-green-700 mb-4 leading-loose border border-green-700 p-2 text-center mt-2 rounded">
    {!! session('message') !!}
</div>
@endif
@if (session()->has('error'))
<div class="text-red-700 mb-4 leading-loose border border-red-700 p-2 text-center mt-2 rounded">
    {{ session('error') }}
</div>
@endif