<script>
    window.addEventListener('load', function() {
        var loadingOverlay = document.getElementById('loading-overlay');
        loadingOverlay.style.display = 'none';
    });
</script>


<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="{{ asset('js/dataTables.js') }}"></script>
<script src="{{ asset('js/bootstrap5.2.3.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('js/scripts.js') }}"></script>


<!--este script miesta los mensajes de error y existo de de laravel -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        @if ($errors->any())
            const errorMessages = [
                @foreach ($errors->all() as $error)
                    "{{ $error }}",
                @endforeach
            ];

            Swal.fire({
                title: 'Error',
                html: errorMessages.join('<br>'),
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            });
        @endif
    });
    @if (session('success'))
        Swal.fire({
            title: 'Éxito',
            text: "{{ session('success') }}",
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        });
    @endif
</script>

<script>
    function confirmarEliminar(itemId) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'Esta acción no se puede deshacer',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Si se confirma la eliminación, envía el formulario
                document.getElementById('delete' + itemId).submit();
            }
        });
    }
</script>


<script>
    $(document).ready(function() {
        $('#datatablesSimple').DataTable({
            "language": {
                "lengthMenu": "MENU filas por pagina.",
                "zeroRecords": "No se encontraron datos.",
                "info": "Mostrando la pagina PAGE de PAGES.",
                "infoEmpty": "No hay datos disponibles.",
                "infoFiltered": "(filtered from MAX total records)",
                "search": "Buscar",
                "paginate": {
                    "first": "Primera",
                    "last": "Ultima",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
            }
        });
    });
</script>