<script setup>
    const darkMode = true;
</script>

<template>
    <div :class="[darkMode ? 'bg-primaryShade-dark' : 'bg-primaryShade-light', 'p-6', 'rounded-lg']">
        <slot></slot>
    </div>
</template>