<form action="{{ route('toggle.bool') }}" method="POST">
    @csrf
    <button type="submit">Toggle Bool</button>
</form>
