<template>
  <div>
    <the-header />
    <div class="app-wrapper">
      <app-main />
    </div>
  </div>
</template>

<script>
import { AppMain } from './components'
import TheHeader from './components/TheHeader/index'

export default {
  name: 'Layout',
  components: {
    TheHeader,
    AppMain
  }
}
</script>

<style lang="scss" scoped>
</style>
