<script src="https://cdn.tailwindcss.com"></script>
<div class="container">
    @foreach ($clientes as $user)
        {{ $user->name }}
    @endforeach
</div>
 
{{ $clientes->links() }}