<template>
    <div class="container row">
        <div class="col-3 p-3 bg-light">
            <custom-sidebar/>
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1 class="fs-2 fw-bold bg-light p-4">
                    Add new product
                    <span>
                        <Link :href="route('products.create')"
                              class="btn bg-success text-white ms-3 fw-bold">
                            Add
                        </Link>
                    </span>
                </h1>
            </div>
            <table class="table table-striped table-hover table-responsive">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product Description</th>
                    <th scope="col">Edit product</th>
                    <th scope="col">Delete product</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="product in products">
                    <th scope="row" class="align-middle">{{ product.id }}</th>
                    <td class="align-middle">{{ product.name }}</td>
                    <td class="align-middle">{{ product.price }}</td>
                    <td class="align-middle" style="width: 400px">{{ product.description }}</td>
                    <td class="align-middle">
                        <Link :href="route('products.edit', product.id)"
                              class="btn bg-warning text-white mb-2">
                            Edit
                        </Link>
                    </td>
                    <td class="align-middle">
                        <Link :href="route('products.destroy', product.id)" method="DELETE"
                              class="btn bg-danger text-white mb-2">
                            Delete
                        </Link>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import CustomSidebar from "../../Components/CustomSidebar.vue";

export default {
    name: "Index",
    components: {
        CustomSidebar
    },
    props: {
        products: Array,
        categories: Array,
    }
}
</script>

<style scoped>

</style>
