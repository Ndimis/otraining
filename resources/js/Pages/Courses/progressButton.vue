<template>
    <button class="bg-green-500 rounded text-white px-2 py-2" >Términé ?</button>
</template>

<script>
export default {
    props: [
        'episodeId'
    ],

    methods: {
        toggleProgress(){
            axios.post('/toggleProgress', {
                episodeId: this.episodeId,
            })
            .then(response => console.log(response))
            .catch(error => console.log(error));
        }
    }
    
}
</script>