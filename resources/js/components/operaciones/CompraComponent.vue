<template>
    <div>
        <div class="row clearfix" >
            <div class="col-lg-12">
                <div class="card" style="background:white">
                    <form  >
                        <div class="header">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Seleccionar Áreas: </label>
                                    <select class="form-control form-control-sm" v-model="operacion.id_area" required>
                                            <option value="0">SELECCIONAR AREA</option>
                                            <option v-for="(area,index) in areas" :value="area.id"  :key="index" >{{area.descripcion}}</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label>Seleccionar Solicitante: </label>
                                    <select class="form-control form-control-sm" v-model="operacion.id_solicitante" required>
                                            <option value="0">SELECCIONAR SOLICITANTE</option>
                                            <option v-for="(solicitante,index) in solicitantes" :value="solicitante.id"  :key="index" >{{solicitante.texto}}</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label>Contratista: </label>
                                     <select class="form-control form-control-sm" v-model="operacion.id_contratista" required>
                                            <option value="0">SELECCIONAR CONTRATISTA</option>
                                            <option v-for="(contratista,index) in contratistas" :value="contratista.id"  :key="index" >{{contratista.texto}}</option>
                                    </select>
                                </div>
                            </div> 
                            <br>
                            <div class="row">
                                <div class="col-sm-3">
                                        <label>F. de Emisión: </label>
                                        <input type="date" class="form-control" v-model="operacion.fecha_emision" required>
                                </div>
                                 <div class="col-sm-2">
                                        <label>Mina: </label>
                                        <input type="texto" class="form-control" v-model="operacion.mina" required>
                                </div>
                                <div class="col-sm-2">
                                        <label>Nivel: </label>
                                        <input type="texto" class="form-control" v-model="operacion.nivel" required>
                                </div>
                                 <div class="col-sm-5">
                                        <label>Labor: </label>
                                        <input type="texto" class="form-control" v-model="operacion.labor" required>
                                </div>
                            </div>
                            <hr>
                            <h5><strong>Lista de productos</strong></h5>
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
                                        <th>Cantidad</th>
                                        <th>Medida</th>
                                        <th>Descripción</th>
                                        <th>Precio Unitario</th>
                                        <th>Importe</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item,index) in detallefacturacion" :key="item.id">
                                        <th scope="row">{{ index+1 }}</th>
                                        <td v-text="item.cantidad"></td>
                                        <td >UNIDADES</td>
                                        <td v-text="item.nombre"></td>
                                        <td v-text="item.precio_unitario"></td>
                                        <td v-text="item.importe"></td>
                                        <td class="text-center">
                                            <button type="button"
                                                    class="btn btn-danger btn-elevate btn-circle btn-icon btn-sm"
                                                    >
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                    </form>
                </div>
            </div>
            <facturacion-detalle-modal-compra-component></facturacion-detalle-modal-compra-component>
        </div>
    </div>
</template>
<script>
    // import Vue from 'vue';
    import VueSweetalert2 from 'vue-sweetalert2';
    Vue.use(VueSweetalert2);
    import 'sweetalert2/dist/sweetalert2.min.css';
    import axios from 'axios'
    // import Select2 from 'v-select2-component';
    // import Vue from 'vue/types/umd';
    export default {
        
        data(){
            return{
                detallefacturacion: [],
                areas:[],
                solicitantes:[],
                contratistas:[],
                operacion: {
                    id_area: '0',
                    id_solicitante:'0',
                    id_contratista:'0',
                    fecha_emision:'',
                    nivel:'',
                    mina:'',
                    labor:'',
                    detalle_facturacion:[]
                }
            }
        },
        methods:{
            getAreas() {
                axios.get('/lista-areas-text').then(({data}) => {
                    this.areas = data;
                }).catch((error) => {
                    console.log(error);
                });
            },
            getSolicitantes() {
                axios.get('/lista-solicitante-text').then(({data}) => {
                    this.solicitantes = data;
                    console.log(data);
                }).catch((error) => {
                    console.log(error);
                });
            },
            getContratistas() {
                axios.get('/lista-contratista-text').then(({data}) => {
                    this.contratistas = data;
                    console.log(data);
                }).catch((error) => {
                    console.log(error);
                });
            },
            abrirModalDetalleProducto() {
                $('#modalDetalleFacturacion').modal('show');
            },
            agregarDetallefacturacion(data) {
                // console.log("hola");
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
                this.clearProducto();
            }

        },
        created() {
            this.getAreas();
            this.getSolicitantes();
            this.getContratistas();
             Bus.$on("DetalleFacturacion", (data) => {
                this.agregarDetallefacturacion(JSON.parse(JSON.stringify(data)));
            });
        },
    }
</script>
