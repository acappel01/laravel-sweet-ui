<form action="{{ $action }}" method="POST" onsubmit="return confirmDelete(this)">
    @csrf
    @method('DELETE')
    <button type="submit" class="inline-flex items-center px-4 py-2 border border-red-700 font-medium rounded-md text-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 bg-white"
    >
        Delete
    </button>
</form>
<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this category?");
    }
</script>
