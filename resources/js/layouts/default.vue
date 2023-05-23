<script lang="ts" setup>
import DefaultLayoutWithVerticalNav from './components/DefaultLayoutWithVerticalNav.vue'
</script>

<template>
  <VApp>
    <DefaultLayoutWithVerticalNav>
      <slot />
    </DefaultLayoutWithVerticalNav>
  </VApp>
</template>

<style lang="scss">
@use "@layouts/styles/default-layout";
</style>
