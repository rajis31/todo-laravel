<template>
    <ul v-if="items.length>0">
        <li v-for="item in items" :key="item.id"> {{ item.description }} </li>
    </ul>
</template>

<script>
export default {
    name: "TodoItems",
    props: {
        "items": Array,
    },
    watch:{
        items: function(newVal,oldVal){
            console.log(oldVal+", "+newVal);
        }
    }

}
</script>