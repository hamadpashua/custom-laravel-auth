@if(session('success'))
    {{-- <div class=" container alert alert-success">
        {{ session('success') }}
    </div> --}}

    @push('scripts')

        <script>
            Swal.fire({
                timerProgressBar: true,
                position: 'center',
                icon: 'success',
                title: "{{ session('success') }}",
                showConfirmButton: true,
                confirmButtonColor: "#3085d6",
                timer: 2000
            })
        </script>
    @endpush
    
@endif