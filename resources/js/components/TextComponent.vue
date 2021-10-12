<template>
    <p>Text: {{ text }}</p>
</template>

/*----------------------------------------*/
<script>

export default
{
    props: ['text'],

    mounted()
    {
        console.log("Text Component Mounted");
    }
}

</script>
