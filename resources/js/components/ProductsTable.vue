<template>
    <div>
        <table class="table is-hoverable is-striped is-fullwidth">
            <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>category_name</td>
                <td>tags</td>
            </tr>
            </thead>
            <tbody v-if="products.length">
                <tr style="cursor: pointer;" v-for="product in products" @click='showModal(product)'>
                    <td>{{product.id}}</td>
                    <td>{{product.name}}</td>
                    <td>{{product.category.name}}</td>
                    <td>
                        <span class="product-tag" v-for="tag in product.tags">{{tag.name}}</span>
                    </td>
                </tr>
            </tbody>
            <tbody v-else>
            <tr>
                <td colspan="4">Empty</td>
            </tr>
            </tbody>
        </table>

        <modal v-if="selectedProduct" :header="selectedProduct.name" @close="closeModal()">
            <p>descr: {{selectedProduct.descr}}</p>
            <p>category: <b>c{{selectedProduct.category.name}}</b></p>
            <p>tags: <b><span class="product-tag" v-for="tag in selectedProduct.tags">{{tag.name}}</span></b></p>

            <button slot="footer" class="button is-success" @click="closeModal()">Save changes</button>
        </modal>
    </div>
</template>

<script>
    export default {
        props: {
            'products': {
                type: Array,
                default: []
            },
        },
        data () {
            return {
                selectedProduct: null,
            }
        },
        methods: {
            showModal: function(product) {
                this.selectedProduct = product;
            },
            closeModal: function() {
                this.selectedProduct = null;
            },
        }
    }
</script>

<style scoped>
    .product-tag + .product-tag:before {
        content: ", ";
    }
</style>
