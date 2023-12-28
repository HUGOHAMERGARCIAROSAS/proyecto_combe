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
                                        <option v-for="item in productos" :key="item.id" v-bind:value="item.id">{{item.texto}}</option>
                                </select>
                        </div>
                         <div class="col-sm-6">
                                <label>Unidades en Almacen: </label>
                                <input type="number" class="form-control" v-model="detalle.cantidad" >
                        </div>
                        
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                                <label>Precio Unitario: </label>
                                <input type="number" class="form-control" v-model="detalle.precio_unitario" >
                        </div>
                         <div class="col-sm-4">
                                <label>Unidades a Solicitar: </label>
                                <input type="number" class="form-control" v-model="detalle.unidades" >
                        </div>
                        <div class="col-sm-4">
                                <label>Importe: </label>
                                <input type="number" class="form-control" v-model="detalle.importe" >
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
    import Swal from 'sweetalert2';
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
                axios.get('/req_productos-api-search/' + value )
                .then(({data}) => {
                    this.detalle.id = data.id_producto;
                    this.detalle.nombre = data.descripcion;
                }).catch((error) => {
                    console.log(error);
                });
            },
            guardarDetalleFacturacion() {
                // self.detalle.importe = parseFloat(this.calcularImporteDetalleProducto).toFixed(2);
                if(this.selectProducto ==='0'){
                    Swal.fire({
                        icon:'error',
                        title:'Por favor selecciona un producto',
                    });
                    return
                }
                if(
                    this.detalle.cantidad===''||
                    this.detalle.precio_unitario===''||
                    this.detalle.unidades===''||
                    this.detalle.importe===''
                ) {
                    Swal.fire({
                        icon:'error',
                        title:'Por favor completa todos los campos',
                    });
                    return;
                }
                console.log(this.detalle);
                Bus.$emit("DetalleFacturacion", this.detalle);
                this.closeModalDetalleFacturacion();
            },
            
            closeModalDetalleFacturacion() {
                this.limpiarData();
                $('#modalDetalleFacturacion').modal('hide');
                //  $("#modalNotaCredito").modal('show');
            },
             mySelectEvent2({id,  text}){
                console.log({id, text})
            },
            limpiarData(){
                this.detalle.precio_unitario = '';
                this.detalle.nombre = '';
                this.detalle.unidades = '';
                this.detalle.cantidad= '';
                this.detalle.codigo = '';
                this.selectProducto = 0;
            }

        },
        created() {
            this.getProductos();
        },
        
    }
</script>
