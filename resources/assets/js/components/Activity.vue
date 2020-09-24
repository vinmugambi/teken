<template>
    <div class="p-2">
     <h5 class="text-lg font-bold">{{content.cardTitle}}</h5>
     <p>{{content.cardText}}</p>
    </div>
</template>

<script>
export default {
    props: ["content"]
}
</script>