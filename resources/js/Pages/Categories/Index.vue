<template>
    <div class="container row">
        <div class="col-3 p-3 bg-light">
            <custom-sidebar/>
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1 class="fs-2 fw-bold bg-light p-4">
                    Add new category
                    <span>
                        <Link :href="route('categories.create')"
                              class="btn bg-primary text-white ms-3 fw-bold">
                            Add
                        </Link>
                    </span>
                </h1>
            </div>
            <table class="table table-striped table-hover table-responsive">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Edit category</th>
                    <th scope="col">Delete category</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="category in categories">
                    <th scope="row" class="align-middle">{{category.id}}</th>
                    <td class="align-middle fs-4 text-primary">{{category.name}}</td>
                    <td class="align-middle">
                        <Link :href="route('categories.edit', category.id)"
                              class="btn bg-primary text-white mb-2">
                            Edit
                        </Link>
                    </td>
                    <td class="align-middle">
                        <Link :href="route('categories.destroy', category.id)" method="DELETE"
                              class="btn bg-secondary text-white mb-2">
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
    components: {CustomSidebar},
    props: {
        categories: Array,
    }
}
</script>

<style scoped>

</style>
