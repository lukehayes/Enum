<template>
    <div>
        <p>Text: {{ text }}</p>
        <button>Inc.</button>
    </div>
</template>

/*----------------------------------------*/
<script>

export default
{
    props: ['text'],

    data:
    {

    },

    mounted()
    {
        console.log("Text Component Mounted");
    },

}

</script>
