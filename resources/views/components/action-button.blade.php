@props(['action', 'button', 'method' => 'POST', 'confirm' => 'Are you sure you want to perform this action?'])
<form action="{{ $action }}" method="{{ $method }}" onsubmit="return confirmArchive(this)">
    @csrf
    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900" role="menuitem"
    >
        {{ $button }}
    </button>
</form>
<script>
    function confirmArchive() {
        return confirm("{{ $confirm }}");
    }
</script>
