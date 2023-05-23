<script setup lang="ts">

</script>

<template>
  <VCard>
    <VLayout>
      <VNavigationDrawer
        expand-on-hover
        rail
      >
        <VList>
          <VListItem
            prepend-avatar="https://randomuser.me/api/portraits/women/85.jpg"
            title="Sandra Adams"
            subtitle="sandra_a88@gmailcom"
          />
        </VList>

        <VDivider />

        <VList
          density="compact"
          nav
        >
          <VListItem
            prepend-icon="mdi-folder"
            title="My Files"
            value="myfiles"
          />
          <VListItem
            prepend-icon="mdi-account-multiple"
            title="Shared with me"
            value="shared"
          />
          <VListItem
            prepend-icon="mdi-star"
            title="Starred"
            value="starred"
          />
        </VList>
      </VNavigationDrawer>

      <VMain>
        <slot />
      </VMain>
    </VLayout>
  </VCard>
</template>

<style scoped lang="scss">

</style>
