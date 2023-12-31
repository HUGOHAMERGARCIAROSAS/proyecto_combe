<template>
    <div class="modal fade xd2" id="modalDetalleFacturacion" tabindex="10000" role="dialog" 
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
             <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-list mr-1">Detalle de Producto</i></h5>
                <button type="button" class="close" data-dismmis="modal" aria-label="Close"></button>
             </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <label>Producto:</label>
                        <select id="3" class="form-control" v-model="selectProducto" @change="changeProducto($event)" @select="mySelectEvent2($event)">
                            <option v-for="(item,index) in productos" :key="index" v-bind:value="item.id">{{ item.texto }}</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label>Código de Producto:</label>
                        <input type="text" class="form-control" readonly v-model="detalle.codigo" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Cantidad: </label>
                        <input type="number" class="form-control" v-model="detalle.unidades" required>
                    </div>
                    <div class="col-sm-6">
                        <label>Precio: </label>
                        <input type="text" class="form-control" v-model="detalle.precio_unitario" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-pill" @click="guardarDetalleFacturacion()">
                    Guardar Detalle
                </button>
                <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">
                    Cancelar
                </button>
            </div>
        </div>
    </div>
</div>
</template>
<script>
    import axios from 'axios';
    import Select2 from 'v-select2-component';

    export default {
        data() {
            return {
                detallefacturacion:[],
                productos:[],

                selectProducto:'',
                detalle:{
                    id:'',
                    codigo:'',
                    nombre:'',
                    precio_unitario:'',
                    unidades:''
                },
            }
        },
        methods: {
            getProductos(){
                axios.get('/lista-productos-text').then(({data}) => {
                    this.productos = data;
                }).catch((error) => {
                    console.log(error);
                });
            },
            changeProducto(event){
                let value = this.selectProducto;
                axios.get('/productos-api-search/' + value).then(({data})=>{
                    this.detalle.id = data.id_producto;
                    this.detalle.codigo = data.codigo;
                    this.detalle.nombre = data.descripcion;
                }).catch((error) =>{
                    console.log(error);
                });
            },
            guardarDetalleFacturacion(){
                console.log(this.detalle);
                Bus.$emit("DetalleFacturacion",this.detalle);
                this.closeModalDetalleFacturacion();
            },
            closeModalDetalleFacturacion(){
                this.limpiarData();
                $('#modalDetalleFacturacion').modal('hide');
            },
            mySelectEvent2({id,text}){
                console.log({id,text})
            },
            limpiarData(){
                this.detalle.precio_unitario = '';
                this.detalle.nombre = '';
                this.detalle.unidades = '';
                this.detalle.codigo='';
                this.selectProducto=0;
            }
        },
        created(){
            this.getProductos();
        },
    }
</script>