<template>
    <div class="modal fade xd2" id="modalDetalleFacturacion"  tabindex="10000" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-list mr-1"></i> Detalle de Venta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Producto:</label>
                                <select id="2" class="form-control" v-model="selectProducto" @change="changeProducto($event)" @select="mySelectEvent2($event)" > 
                                        <option value="0">SELECCIONAR PRODUCTO</option>
                                        <option v-for="(item, index) in productos" :key="index" v-bind:value="item.id">{{item.texto}}</option>
                                </select>
                        </div>
                         <div class="col-sm-6">
                                <label>Unidades en Almacen: </label>
                                <input type="texto" class="form-control" v-model="detalle.cantidad" required>
                        </div>
                        
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                                <label>Precio Unitario: </label>
                                <input type="texto" class="form-control" v-model="detalle.precio_unitario" required>
                        </div>
                         <div class="col-sm-4">
                                <label>Unidades a Solicitar: </label>
                                <input type="texto" class="form-control" v-model="detalle.unidades" required>
                        </div>
                        <div class="col-sm-4">
                                <label>Importe: </label>
                                <input type="texto" class="form-control" v-model="detalle.importe" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-primary btn-pill"  @click="guardarDetalleFacturacion()"
                    >
                        Guardar Detalle
                    </button>
                    <button type="button" class="btn btn-secondary btn-pill"
                            data-dismiss="modal"
                    >
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
     import Select2 from 'v-select2-component';

    export default {
        data(){
            return{
                detallefacturacion: [],
                productos: [],
                
                selectProducto:'0',
                detalle: {
                    id:'',
                    nombre: '',
                    cantidad: '',
                    precio_unitario: '',
                    importe: '',
                    unidades:''
                },
            }
        },
        methods:{
            getProductos() {
                axios.get('/lista-productos-text').then(({data}) => {
                    this.productos = data;
                }).catch((error) => {
                    console.log(error);
                });
            },
            changeProducto(event) {
                let value = this.selectProducto;
                axios.get('/req_productos-api-search/' + value ).then(({data}) => {
                    self = this;
                    self.detalle.id = data.id_producto;
                    self.detalle.nombre = data.descripcion;
                }).catch((error) => {
                    console.log(error);
                });
            },
            guardarDetalleFacturacion() {
                self = this;
                // self.detalle.importe = parseFloat(this.calcularImporteDetalleProducto).toFixed(2);
                console.log(self.detalle);
                Bus.$emit("DetalleFacturacion", self.detalle);
                self.closeModalDetalleFacturacion();
            },
            
            closeModalDetalleFacturacion() {
                self = this;
                self.limpiarData();
                $('#modalDetalleFacturacion').modal('hide');
                //  $("#modalNotaCredito").modal('show');
            },
             mySelectEvent2({id,  text}){
                console.log({id, text})
            },
            limpiarData(){
                self = this;
                self.detalle.precio_unitario = '';
                self.detalle.nombre = '';
                self.detalle.unidades = '';
                self.detalle.cantidad= '';
                self.detalle.codigo = '';
                self.selectProducto = 0;
            }

        },
        created() {
            this.getProductos();
        },
        
    }
</script>
