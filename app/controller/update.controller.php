
<script>
    $(document).ready(() => {
        $("#update").click(() => {
            let id = $("#id").val()
            let nombre = $("#nombre").val()
            let telefono = $("#telefono").val()
            let email = $("#email").val()
            $.ajax({
                url: "./app/model/process/update.process.php",
                data: {
                    id,
                    nombre,
                    telefono,
                    email,
                },
                type: "POST",
                success: () => {
                    
                    Swal.fire({
                        title: 'Contacto actualizado!',
                        text: "Contacto actualizado con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok!'
                        }).then((result) => {
                            window.location = "./read"
                        })  
            },
            error:() => {
                console.log("Error")
            }
            })
        })
    })
</script>