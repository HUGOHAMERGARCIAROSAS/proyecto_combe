<template>
    <div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card" style="background: white">
                    <form v-on:submit.prevent="storeoperacion()">
                        <div class="header">
                            <h5><strong>DATOS DEL SOLICITANTE</strong></h5>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Solicitante: </label>
                                    <select
                                        v-model="operacion.solicitante"
                                        id="solicitante"
                                        class="form-control"
                                    >
                                        <option value="0">Seleccionar</option>
                                        <option v-for="solicitante in solicitantes" :key="solicitante.id" :value="solicitante.id">{{ solicitante.texto }}</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label>F. de Emisión: </label>
                                    <input
                                        type="date"
                                        class="form-control"
                                        v-model="operacion.fecha_emision"
                                        required
                                    />
                                </div>
                            </div>
                            <br />
                            <h5><strong>DETALLE DE LA COTIZACIÓN</strong></h5>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label
                                        >Descripción de la cotización:
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model="operacion.nombre_cotizacion"
                                        required
                                    />
                                </div>
                                <div class="col-sm-4">
                                    <label>Seleccionar Producto: </label>
                                    <select
                                        v-model="operacion.producto"
                                        class="form-control"
                                        @change="changeProducto($event)"
                                    >
                                        <option value="0">Seleccionar</option>
                                        <option v-for="producto in productos" :key="producto.id" :value="producto.id">{{ producto.texto }}</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <label>UM: </label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model="detalle_producto.unidad"
                                        required
                                        readonly
                                    />
                                </div>
                                <div class="col-sm-2">
                                    <label>Cantidad: </label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        v-model.number="detalle_producto.cantidad" min="1"
                                    />
                                </div>
                            </div>
                            <br />
                            <h5><strong>LISTA DE PRODUCTOS</strong></h5>
                            <div class="row">
                                <div class="col-lg-12" align="right">
                                    <button
                                        type="button"
                                        class="btn btn-success btn-elevate btn-pill"
                                        @click="guardarProductoDetalle()"
                                    >
                                        Agregar Producto
                                    </button>
                                </div>
                            </div>
                            <div class="body table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Código Producto</th>
                                            <th>Producto</th>
                                            <th>unidad</th>
                                            <th>Cantidad</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="(
                                                item, index
                                            ) in list_productos"
                                            :key="item.id"
                                        >
                                            <th scope="row">{{ index + 1 }}</th>
                                            <td v-text="item.codigo"></td>
                                            <td v-text="item.nombre"></td>
                                            <td v-text="item.unidad"></td>
                                            <td v-text="item.cantidad"></td>
                                            <td class="text-center">
                                                <button
                                                    type="button"
                                                    class="btn btn-danger btn-elevate btn-circle btn-icon btn-sm"
                                                    @click="
                                                        removeItemDetalleProducto(
                                                            index
                                                        )
                                                    "
                                                >
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Proveedor: </label>
                                    <select
                                        key="proveedor"
                                        v-model="operacion.proveedor"
                                        class="form-control"
                                        @change="changeProveedor($event)"
                                    >
                                        <option value="0">Seleccionar</option>
                                        <option v-for="proveedor in proveedores" :key="proveedor.id" :value="proveedor.id">{{ proveedor.razon_social }}</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label> Correo: </label>
                                    <input type="email" class="form-control" v-model="detalle_proveedor.email" readonly/>
                                </div>
                                <div class="col-sm-4">
                                    <label> RUC: </label>
                                    <input type="text" class="form-control" v-model="detalle_proveedor.ruc" readonly/>
                                </div>
                            </div>
                            <br />
                            <h5><strong>LISTA DE PROVEEDORES</strong></h5>
                            <div class="row">
                                <div class="col-lg-12" align="right">
                                    <button
                                        type="button"
                                        class="btn btn-success btn-elevate btn-pill"
                                        @click="guardarProveedorDetalle()"
                                    >
                                        Agregar Item
                                    </button>
                                </div>
                            </div>
                            <div class="body table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Proveedor</th>
                                            <th>Correo</th>
                                            <th>Celular</th>
                                            <th>Estado</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="(
                                                item, index
                                            ) in listProveedores"
                                            :key="item.id"
                                        >
                                            <th scope="row">{{ index + 1 }}</th>
                                            <td v-text="item.razon_social"></td>
                                            <td v-text="item.email"></td>
                                            <td v-text="item.celular"></td>
                                            <td >PENDIENTE</td>
                                            <td class="text-center">
                                                <button
                                                    type="button"
                                                    class="btn btn-danger btn-elevate btn-circle btn-icon btn-sm"
                                                    @click="
                                                        removeItemDetalleProveedor(
                                                            index
                                                        )
                                                    "
                                                >
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4" align="center">
                                <button
                                    type="submit"
                                    class="btn btn-dark btn-block"
                                >
                                    GUARDAR
                                </button>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                    </form>
                    <br style="margin-bottom: 2%" />
                </div>
            </div>
            <detalle-modal-ingreso-component></detalle-modal-ingreso-component>
        </div>
    </div>
</template>
<script>
import VueSweetalert2 from "vue-sweetalert2";
Vue.use(VueSweetalert2);
import "sweetalert2/dist/sweetalert2.min.css";
import axios from "axios";
export default {
    data() {
        return {
            //OPERACION
            operacion: {
                fecha_emision: "",
                solicitante: "0",
                producto: "0",
                proveedor: "0",
                nombre_cotizacion: "",
                lista_productos: [],
                lista_proveedores: []
            },

            //COMBOS
            solicitantes: [],
            productos: [],
            proveedores:[],

            //DETALLE PRODUCTOS
            list_productos: [],
            detalle_producto:{
                id_producto: "0",
                cantidad: "",
                unidad: "",
                nombre: "",
                codigo: ""
            },

            //DETALLE PROVEEDORES
            listProveedores:   [],
            detalle_proveedor:{
                id_proveedor:'0',
                email:'',
                ruc:'',
                celular:'',
                razon_social:''
            }
        };
    },
    methods: {
        async storeoperacion() {

            if(this.operacion.solicitante === '0'){
                toastr.error('No se selecciono el solicitante!');
                return;
            }

            if(this.list_productos.length === 0){
                toastr.error('No se agrego ningun producto!');
                return;
            }

            if(this.listProveedores.length === 0){
                toastr.error('No se agrego ningun proveedor!');
                return;
            }

            this.operacion.lista_productos = this.list_productos;
            this.operacion.lista_proveedores = this.listProveedores;

            console.log(this.operacion);
            await axios
                .post("/store-ingreso-cotizacion", this.operacion)
                .then(({ data }) => {
                    if (data) {
                        this.$swal.fire({
                            icon: "success",
                            title: "GUARDADO!",
                            text: "Se registro exitosamente",
                            showConfirmButton: false,
                            timer: 2500,
                        });
                        window.location.href =
                            "/cotizaciones_list";
                    }
                    if (!data) {
                        toastr.error(
                            "No se registro la cotización, error en servidor!"
                        );
                    }
                })
                .catch((error) => {
                    console.error(error.response.data);
                });
        },
        removeItemDetalleProducto(index) {
            this.list_productos.splice(index, 1);
            toastr.info("Producto eliminado!");
        },
        removeItemDetalleProveedor(index) {
            this.listProveedores.splice(index, 1);
            toastr.info("Proveedor eliminado!");
        },


        getUsuarios() {
            axios.get("/lista-solicitante-text").then(({ data }) => {
                this.solicitantes = data;
            })
        },
        getProductos(){
            axios.get('/lista-productos-text').then(({data}) => {
                this.productos = data;
            })
        },
        getProveedores(){
            axios.get('/lista-proveedores-text').then(({data}) => {
                this.proveedores = data;
            })
        },
        changeProducto(event) {
            let value = this.operacion.producto;
             if(value === '0'){
                this.detalle_producto.id_producto = '0';
                this.detalle_producto.unidad = '';
                this.detalle_producto.codigo = '';
                this.detalle_producto.nombre = '';
                return;
             };
            axios.get('/producto-api-search/' + value ).then(({data}) => {
                this.detalle_producto.unidad = data[0].unidad;
                this.detalle_producto.codigo = data[0].codigo;
                this.detalle_producto.nombre = data[0].texto;
                this.detalle_producto.id_producto = data[0].id;
                this.detalle_producto.cantidad = data[0].cantidad;
            })
        },
        changeProveedor(event) {
            let value = this.operacion.proveedor;
            if(value === '0'){
                this.detalle_proveedor.id_proveedor = '0';
                this.detalle_proveedor.email = '';
                this.detalle_proveedor.ruc = '';
                this.detalle_proveedor.celular = '';
                this.detalle_proveedor.razon_social = '';
                return
            } 
            axios.get('/proveedor-api-search/' + value ).then(({data}) => {
                this.detalle_proveedor.id_proveedor=data[0].id;
                this.detalle_proveedor.email=data[0].email;
                this.detalle_proveedor.ruc=data[0].ruc;
                this.detalle_proveedor.celular=data[0].telefono;
                this.detalle_proveedor.razon_social=data[0].razon_social;
            })            
        },
        guardarProductoDetalle() {
            let existeProducto = false;

            if(this.detalle_producto.id_producto === '0') return toastr.error("Debe seleccionar un producto!");
            if(this.detalle_producto.cantidad === undefined) return toastr.error("Debe Ingresar Cantidad!");

            

            this.list_productos.forEach((element) => {
            if (element.nombre === this.detalle_producto.nombre) {
                existeProducto = true;
            }
            });

            if (existeProducto) {
                toastr.error("Ese producto ya se encuentra agregado!");
            }

            if (!existeProducto) {
                this.list_productos.push(JSON.parse(JSON.stringify(this.detalle_producto)));
                this.limpiarDetalleProducto();
            }
        },
        limpiarDetalleProducto() {
            this.detalle_producto = {
                id_producto: "0",
                cantidad: "",
                unidad: "",
                nombre: "",
                codigo: ""
            },
            this.operacion.producto = "0"
        },
        guardarProveedorDetalle() {
            let existeProveedor = false;

        
            
            if(this.detalle_proveedor.id_proveedor === '0') return toastr.error("Debe seleccionar un proveedor!");

            this.listProveedores.forEach((element) => {
            if (element.razon_social === this.detalle_proveedor.razon_social) {
                existeProveedor = true;
            }
            });

            if (existeProveedor) {
                toastr.error("Ese proveedor ya se encuentra agregado!");
            }

            if (!existeProveedor) {
                this.listProveedores.push(JSON.parse(JSON.stringify(this.detalle_proveedor)));
                this.limpiarDetalleProveedor();
            }

        },
        limpiarDetalleProveedor(){
            this.detalle_proveedor = {
                id_proveedor:'0',
                email:'',
                ruc:'',
                celular:'',
                razon_social:''
            },
            this.operacion.proveedor = '0'
        }
    },
    created() {
        this.getUsuarios();
        this.getProductos();
        this.getProveedores();
        Bus.$on("DetalleFacturacion", (data) => {
            this.agregarDetallefacturacion(JSON.parse(JSON.stringify(data)));
        });
    },
};
</script>
