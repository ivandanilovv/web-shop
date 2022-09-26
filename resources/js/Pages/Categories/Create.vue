<template>
    <div class="container row">
        <div class="col-3 p-3 bg-light">
            <custom-sidebar/>
        </div>
        <div class="col-9 d-flex flex-column justify-content-center align-items-center bg-light">
            <div>
                <p class="fs-3 fw-bold">
                    Enter the details for the new category
                </p>
            </div>
            <form @submit.prevent="submit">
                <label for="name" class="fw-bold fst-italic">
                    Name
                </label><br/>
                <input type="text" name="name" id="name" v-model="form.name" class="bg-light">
                <button type="submit" class="btn bg-success text-white rounded-3 ms-3">
                    Submit
                </button>
                <a onclick="history.back();return false;" class="btn btn-danger text-white rounded-3 ms-3">
                    Cancel
                </a>
            </form>
        </div>
    </div>
</template>

<script>
import CustomSidebar from "../../Components/CustomSidebar.vue";

export default {
    name: "Create",
    components: {CustomSidebar},
    data() {
        return {
            form: this.$inertia.form({
                name: '',
            })
        }
    },
    methods: {
        submit() {
            return this.$inertia.post(route('categories.store'), this.form);
        }
    }
}
</script>

<style scoped>

</style>
