<template>
    <div>
        <ol>
            <li v-for="producto in productos" :key="producto.id">
                {{ producto.nombre }}
            </li>
        </ol>
    </div>
</template>

<script>
    import axios from "axios";
    export default {
        name: "ListaProductos",
        data() {
            return {
                productos: []
            };
        },
        mounted() {
            this.cargarProductos();
        },
        methods: {
            cargarProductos: function () {
                axios.get("http://lab11.test/api/producto")
                .then(response => {
                    this.productos = response.data;
                });
            }
        }
    }
</script>

<style scoped>

</style>
