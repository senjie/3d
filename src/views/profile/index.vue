<template>
  <div class="personal-container">
    <h4 class="title">个人信息</h4>
    <component :is="currentComponent" @toggleComponent="toggleComponent" />
  </div>
</template>

<script>
import personalInfo from '@/views/profile/components/personalInfo'
import changePassword from '@/views/profile/components/changePassword'
export default {
  name: 'Profile',
  components: { personalInfo, changePassword },
  data() {
    return {
      currentComponent: 'personalInfo'
    }
  },
  methods: {
    /**
     * 切换显示的组件
     * @param {string} 组件名
     */
    toggleComponent(val) {
      this.currentComponent = val
    }
  }
}
</script>

<style lang="scss" scoped>
  .personal-container {
    .title {
      font-size: 16px;
    }
  }
</style>
