<template>
    <div>
        <form @submit.prevent="submit">
            <input type="text" name="name" v-model="form.name">
            <button type="submit">
                Submit
            </button>
        </form>
    </div>
</template>

<script>
export default {
    name: "Edit",
    props: {
        category: Object,
    },
    data() {
        return {
            form: this.$inertia.form({
                name: this.category.name,
            })
        }
    },
    methods: {
        submit() {
            this.$inertia.put(route('categories.update', this.category), this.form);
        }
    }
}
</script>

<style scoped>

</style>
