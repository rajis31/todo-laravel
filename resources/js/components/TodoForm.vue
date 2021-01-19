<template>
    <div class="container border-2 border-gray-300 border-opacity-50 mx-auto w-96  h-96 shadow rounded">
        <h3 class="text-4xl tracking-wider"> Todo App </h3>
        <form @submit.prevent="" class="flex flex-col">
            <input placeholder="Enter Item" />
            <button type="submit"> Submit </button>
        </form>

    </div>

</template>

<script>
export default {
    name: "TodoForm",
    data(){
        return {
            item:"",
        }
    }
}
</script>

<style scopesd>

</style>