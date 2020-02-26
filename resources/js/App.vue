<!--
 * @Description:
 * @Author: LMG
 * @Date: 2020-02-26 10:57:18
 * @LastEditors: LMG
 * @LastEditTime: 2020-02-26 12:08:35
 -->
<template>
    <div id="app">
        <p>{{ msg }}</p>
        <example></example>
    </div>
</template>
<script>
import Example from "./components/ExampleComponent.vue";

export default {
    name: "app",
    data() {
        return {
            msg: "App组件"
        };
    },
    components: {
        Example
    }
};
</script>
<style scoped>
/* Add scoped styles */
#app {
    padding: 20px;
}
</style>
