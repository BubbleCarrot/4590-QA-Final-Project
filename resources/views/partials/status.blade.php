@if (session('status'))
<div class="block my-2.5 bg-gray-200 border rounded border-gray-800">
    <p class="my-2.5 ml-2.5">{{ session('status') }}</p>
</div>
@endif