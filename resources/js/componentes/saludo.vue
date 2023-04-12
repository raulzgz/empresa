<template>
    <h1> Hola desde un componente vue </h1>
    <h2>He recibido el valor {{nombre}}</h2>
    <h2>He recibido el valor {{nombre_interno}}</h2>


</template>

<script>
export default {
    name: "saludo",
    props:['nombre'],
    data(){
        return{
            nombre_interno: "( texto: nombre_interno )"
        }
    },
}
</script>

<style scoped>


</style>
