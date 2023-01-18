<template>
    <div>
        <div class="container text-center pb-50 pt-50">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5f76b1e315320754aaf60a7490c9bfbafa025f161df6459cca1a635075970ba2&amp;source=constructor" width="1200" height="500" frameborder="0"></iframe>
        </div>
    </div>
</template>

<script>
import { onMounted } from 'vue';

export default{
    name: "Index",
    mounted() {
        $(document).trigger('change')
    }
}
</script>

<style scoped>

</style>
