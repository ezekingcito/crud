
<script>

    $(document).ready(() => {


        $("#crear").click(() => {
            let nombre = $("#nombre").val()
            let telefono = $("#telefono").val()
            let email = $("#email").val()


            if (!nombre) {
                Swal.fire({
                    icon: "error",
                    text: "No has ingresado un nombre :(",
                    timer: 2000
                })
                return false
            }


            if (!telefono) {
                Swal.fire({
                    icon: "error",
                    text: "No ingresaste un telefono :(",
                    timer: 2000
                })
                return false
            }
            if (!email) {
                Swal.fire({
                    icon: "error",
                    text: "No ingresaste un email :(",
                    timer: 2000
                })
                return false
            }


            $.ajax({
                url: "./app/model/process/create.process.php",
                data: {
                    nombre,
                    telefono,
                    email,
                },
                type: "POST",
                success: () => {
                    Swal.fire({
                        title: 'Contacto guardado!',
                        text: "Contacto guardado con exito!",
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