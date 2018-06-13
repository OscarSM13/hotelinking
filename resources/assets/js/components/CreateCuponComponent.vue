<template>
    <div class="col-md-6">
        <h3>Haga click para obtener una codigo promocional</h3>
        <!-- Con axios creo el metodo creteCupon el cual envia al servidor  -->
        <button @click.prevent="createCupon" type="button" class="btn btn-primary">Crear Cupón</button>
    </div>
</template>

<script>
    import axios from 'axios'

    export default {
        name: "CreateCuponComponent",
        props: ['user'],
        methods: {
            createCupon() {
                axios.post('/api/generateCupon', {user: this.user}
                ).then(function (response) {
                    console.log(response);
                    alert('¡Tu cupón ha sido generado correctamente! Accede a tu listado de cupones para verlo. El código es: ' + response.data.uuid)
                }).catch(function (error) {
                    alert('Error al generar tu código')
                });
            }
        }
    }
</script>

<style scoped>

</style>