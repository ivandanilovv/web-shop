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
    name: "Create",
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
