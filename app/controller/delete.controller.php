
<script>
    const eliminar = (id) => {

        Swal.fire({

            title: 'Va a eliminar.... ¿Seguro?',
            text: "Esta accion es irreversible",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ELIMINADO'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "./app/model/process/delete.process.php",
                    data: {
                        id
                    },
                    type: "POST",
                    success: () => {
                        Swal.fire({
                            title: 'Contacto eliminado',
                            text: "El contacto se elimino correctamente",
                            icon: 'success',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'okey'
                            }).then((result) => {
                                location.reload()
                            })
                    },

                    error: () => {
                        Swal.fire({
                            title: 'No se pudo eliminar el contacto',
                            text: "COntactanos......",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'ok'
                            })
                    }
                })
            }
            })
    }
</script>