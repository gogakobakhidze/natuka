
<template>
    <div class="container">
        <Link class="nav-link" href="/">Go Back!</Link>
    </div>
    <slot></slot>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3'; 
</script>

<style>
.container {
    text-align: center;
    padding-top: 30%;
    font-size: 18px;
    text-decoration: underline;
    cursor: pointer;
}
</style>
                                                                                        
                                                                                    