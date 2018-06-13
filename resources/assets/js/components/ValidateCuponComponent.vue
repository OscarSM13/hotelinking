<template>
    <button @click="validateCupon" class="float-right d-inline btn" v-if="!activated">Activar</button>
    <button class="float-right d-inline btn btn-success btn-disabled" disabled v-else>Activado</button>
</template>

<script>
    import axios from 'axios'
    export default {
        name: "ValidateCuponComponent",
        props: ['cupon'],
        data: function () {
            return {
                activated: this.cupon.status
            }
        },
        methods: {
            validateCupon() {
                let that = this
                axios.post('/api/validateCupon', {cupon: this.cupon}
                ).then(function (response) {
                    that.activated = true;
                    alert(response.data)
                }).catch(function (error) {
                    console.error(error)
                    alert('Error al validar tu código')
                });
            }
        }
    }
</script>

<style scoped>

</style>