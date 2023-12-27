<template>
    <div>
        <div class="row clearfix" >
            <div class="col-lg-12">
                <div class="card" style="background:white">
                    <form v-on:submit.prevent="storeoperacion()" >
                        <div class="header">
                            <div class="row">
                                 <div class="col-sm-2">
                                        <label>Número de Documento: </label>
                                        <input type="texto" class="form-control" v-model="operacion.numero" required>
                                </div>
                                <div class="col-sm-2">
                                        <label>Número de Documento: </label>
                                        <input type="texto" class="form-control" v-model="operacion.anio" required>
                                </div>
                                <div class="col-sm-2">
                                        <label>F. de Emisión: </label>
                                        <input type="date" class="form-control" v-model="operacion.fecha_emision" required>
                                </div>
                                 <div class="col-sm-6">
                                        <label>Observaciones: </label>
                                        <input type="texto" class="form-control" v-model="operacion.observaciones" required>
                                </div>
                            </div>
                            <hr>
                            <h5><strong>Lista de Productoss</strong></h5>
                            <div class="col-lg-12" align="right">
                                <button type="button" class="btn btn-success btn-elevate btn-pill"
                                        @click="abrirModalDetalleProducto()">Agregar Item
                                </button>
                            </div>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover" >
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Código Producto</th>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio </th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item,index) in detallefacturacion" :key="item.id">
                                        <th scope="row">{{ index+1 }}</th>
                                        <td v-text="item.codigo"></td>
                                        <td v-text="item.nombre"></td>
                                        <td v-text="item.precio_unitario"></td>
                                        <td v-text="item.unidades"></td>
                                        <td class="text-center">
                                            <button type="button"  class="btn btn-danger btn-elevate btn-circle btn-icon btn-sm" @click="removeItemDetalleFacturacion(index)">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4" align="center" >
                                <button type="submit" class="btn btn-dark btn-block">GUARDAR</button>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                    </form>
                    <br style="margin-bottom:2%">
                </div>
            </div>
            <detalle-modal-ingreso-component></detalle-modal-ingreso-component>
        </div>
    </div>
</template>
<script>
    import VueSweetalert2 from 'vue-sweetalert2';
    Vue.use(VueSweetalert2);
    import 'sweetalert2/dist/sweetalert2.min.css';
    import axios from 'axios'
    export default {
        data(){
            return{
                detallefacturacion: [],
                operacion: {
                    fecha_emision:'',
                    observaciones:'',
                    numero:'',
                    anio:'',
                    detalle_facturacion:[]
                }
            }
        },
        methods:{
            abrirModalDetalleProducto() {
                $('#modalDetalleFacturacion').modal('show');
            },
            agregarDetallefacturacion(data) {
                let existeProducto = false;
                this.detallefacturacion.forEach((element) => {
                    if (element.nombre === data.nombre) {
                        existeProducto = true;
                    }
                });

                if (existeProducto) {
                    toastr.error('Ese producto ya se encuentra agregado!');
                }

                if (!existeProducto) {
                    this.detallefacturacion.push(JSON.parse(JSON.stringify(data)));
                }
            },
            async storeoperacion(){
                this.operacion.detalle_facturacion = this.detallefacturacion;
                if(this.operacion.detalle_facturacion.length > 0 ){
                    await axios.post('/store-ingreso-productos',this.operacion).then(({data}) => {
                        if (data) {
                            this.$swal.fire({
                                icon: 'success',
                                title: 'GUARDADO!',
                                text: "Se registro exitosamente",
                                showConfirmButton: false,
                                timer: 2500
                            })
                            window.location.href = '/operacionesListadoIngresoProductos';
                        }
                        if (!data) {
                            toastr.error('No se registro la compra, error en servidor!');
                        }
                    }).catch((error) => {
                        console.error(error.response.data); 
                    });
                    }else{
                    toastr.error('No se ingreso ningún producto!');
                }
            },
            removeItemDetalleFacturacion(index) {
                this.detallefacturacion.splice(index, 1);
                toastr.info('Producto eliminado de la Compra!');
            }
        },
        created() {
             Bus.$on("DetalleFacturacion", (data) => {
                this.agregarDetallefacturacion(JSON.parse(JSON.stringify(data)));
            });
        },
    }
</script>  
