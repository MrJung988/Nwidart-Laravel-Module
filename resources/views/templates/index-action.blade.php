<div class="d-flex justify-content-center">
    @if (isset($show))
        <a href="{{ route($route . 'show', $id) }}" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i></a>
    @endif

    @if (isset($edit))
        <a href="{{ route($route . 'edit', $id) }}" class="btn btn-primary btn-sm mx-1"><i class="fas fa-pen"></i></a>
    @endif

    @if (isset($delete))
        <form action="{{ route($route . 'destroy', $id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm trashBtn">
                <i class="fas fa-trash"></i>
            </button>
        </form>
    @endif
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).on('click', '#trashBtn', function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#trashForm').submit();
            }
        });
    });
</script>
