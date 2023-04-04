<template>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption>{{tabla}}</caption>
            <thead class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th v-for="(campo) in campos" class="px-6 py-2"><button @click='ordenar(campo)'> {{campo}} </button></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(fila) in filas" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td v-for="(valor) in fila" class="px-6 py-2">{{valor}}</td>

            </tr>
            </tbody>
        </table>
    </div>
    <br>

</template>

<script>
export default {
    name: "mitabla",
    props:['filas_serializadas', 'campos_serializados', 'tabla'],
    data(){
        return{
            filas:Array,
            campos:Array,
        }
    },
    created(){
        this.filas = JSON.parse(this.filas_serializadas)
        this.campos = JSON.parse(this.campos_serializados)
    },
    methods:{
        ordenar:function (campo){
            this.filas = this.filas.sort((a,b)=>{
                if (a[campo]>b[campo])
                    return 1;
                else
                    return -1;
            });
        }
    }
}
</script>

<style scoped>

</style>
