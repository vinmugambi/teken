<template>
    <div class="p-2">
     <h5 class="text-lg  uppercase text-green-500 font-light">{{content.cardTitle}}</h5>
     <p>{{content.cardText}}</p>
    </div>
</template>

<script>
export default {
    props: ["content"]
}
</script>