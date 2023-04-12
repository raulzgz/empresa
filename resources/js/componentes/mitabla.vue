<template>
    <div class="relative overflow-x-auto">
        <table
            class="table-auto hover:table-fixed w-full text-sm text-left text-gray-500 dark:text-gray-400"
        >
            <h1 v-html="mensaje"></h1>
            <thead class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th v-for="(campo, indice) in campos" class="px-6 py-2">
                        <div>
                            <div class="flex rounded-md shadow-sm">
                                <span
                                    class="px-4 inline-flex items-center min-w-fit rounded-l-md border border-gray-300 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"
                                >
                                    {{ campo }}
                                </span>
                                <input
                                    type="text"
                                    @keyup="filtra(campo, valor[indice])"
                                    :size="len_campo[indice]"
                                    v-model="valor[indice]"
                                    class="py-2 px-3 pr-11 block w-full border-gray-300 shadow-sm text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                />
                                <span
                                    class="px-4 inline-flex items-center min-w-fit rounded-r-md border border-gray-300 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"
                                >
                                    <button @click="ordenar(campo)">
                                        &uarr;&darr;
                                    </button>
                                </span>
                            </div>
                        </div>
                    </th>
                    <th colspan="3" class="px-6 py-2">
                        <div class="flex rounded-md shadow-sm border border-gray-300 justify-center ">
                            <span
                                class="titulo bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400 "
                            >
                                Opciones
                            </span>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="fila in filas.data"
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td v-for="valor in fila" class="px-6 py-2">{{ valor }}</td>
                    <td>
                        <button @click="editar(fila.id)" class="botones"> Editar </button>
                    </td>
                    <td>
                        <button @click="borrar(fila.id)" class="botones"> Borrar </button>
                    </td>
                    <td>
                        <button @click="consultar(fila.id)" class="botones"> Consultar </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="flex justify-center pt-1 text-blue-700 text-4xl">
            <TailwindPagination
                :data="filas"
                @pagination-change-page="getResults"
            />
        </div>
    </div>
    <br />
</template>

<script>
import axios from "axios";
import { TailwindPagination } from "laravel-vue-pagination";

export default {
    name: "mitabla",
    components: {
        TailwindPagination,
    },
    props: ["filas_serializadas", "campos_serializados", "tabla"],
    data() {
        return {
            filas: Array,
            campos: Array,
            ascendente: true,
            valor: Array,
            len_campo: Array,
            mensaje: String,
        };
    },
    created() {
        this.filas = JSON.parse(this.filas_serializadas);
        this.campos = JSON.parse(this.campos_serializados);
        this.campos = JSON.parse(this.campos_serializados);
        this.mensaje = "";
    },
    methods: {
        ordenar: function (campo) {
            this.filas.data = this.filas.data.sort((a, b) => {
                let retorno;
                if (a[campo] > b[campo]) retorno = this.ascendente ? 1 : -1;
                else retorno = this.ascendente ? -1 : 1;
                return retorno;
            });
            this.ascendente = !this.ascendente;
        },
        filtra: function (campo, valor) {
            this.filas = JSON.parse(this.filas_serializadas);
            this.filas.data = this.filas.data.filter((fila) => {
                var texto = new String(fila[campo]);
                if (texto.indexOf(valor) > -1) return fila;
            });
        },
        editar: function (id) {
            let url = window.location.href;
            if (url.endsWith("/")) {
                url = url.slice(0, -1);
            }
            url = url + "/" + id + "/edit";
            window.location.href = url;
        },
        borrar: function (id) {
            let url = window.location.href;
            if (url.endsWith("/")) {
                url = url.slice(0, -1);
            }
            url = url + "/" + id;
            console.log(url);
            axios
                .delete(url)
                .then((response) => {
                    this.filas = response.data;
                    this.mensaje =
                        "Se ha borrado en la tabla  " +
                        this.tabla +
                        " la fila de id " +
                        id;
                })
                .catch((e) => {
                    this.mensaje =
                        "<span style='color:red'>Error borrando en la tabla " +
                        this.tabla +
                        " " +
                        "la fila de id " +
                        id +
                        "</span>";
                });
        },
        consultar: function (id) {
            let url = window.location.href;
            if (url.endsWith("/")) {
                url = url.slice(0, -1);
            }
            url = url + "/" + id ;
            window.location.href = url;
        },
        getResults(page = 1) {
            let url = window.location.href;
            if (url.endsWith("/")) {
                url = url.slice(0, -1);
            }

            let self = this;
            axios
                .get(url + "/paginate?page=" + page)
                .then(function (response) {
                    self.filas = response.data;
                    console.log("Respuesta " + response.data);
                })
                .catch(function (error) {
                    console.error("ERROR" + error);
                });
        },
    },
};
</script>

<style scoped>
.titulo{
    @apply text-amber-400
}

.botones{
    @apply px-4 inline-flex items-center min-w-fit rounded-md border border-gray-300 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400
}

</style>
