<template>
  <div class="header">
    <div class="header-left">
      <el-image
        style="width: 27px; height: 27px"
        src="https://assets.forucdn.com/business-logo.svg"
        fit="fit"
      />
      <h4 class="web-title">国内FORU分销系统</h4>
    </div>
    <div class="right-menu">
      <template v-if="device!=='mobile'">
        <search id="header-search" class="right-menu-item" />

        <error-log class="errLog-container right-menu-item hover-effect" />

        <screenfull id="screenfull" class="right-menu-item hover-effect" />

      </template>

      <el-dropdown class="align-items right-menu-item hover-effect" trigger="click">
        <div class="avatar-wrapper">
          <el-image
            style="width: 45px; height: 45px"
            src="https://wpimg.wallstcn.com/f778738c-e4f8-4870-b634-56703b4acafe.gif?imageView2/1/w/80/h/80"
            fit="fit"
          />
        </div>
        <el-dropdown-menu slot="dropdown">
          <router-link to="/profile/index">
            <el-dropdown-item>Profile</el-dropdown-item>
          </router-link>
          <el-dropdown-item divided @click.native="logout">
            <span style="display:block;">Log Out</span>
          </el-dropdown-item>
        </el-dropdown-menu>
      </el-dropdown>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import Screenfull from '@/components/Screenfull'
import Search from '@/components/HeaderSearch'

export default {
  components: {
    Screenfull,
    Search
  },
  computed: {
    ...mapGetters([
      'sidebar',
      'avatar',
      'device'
    ])
  },
  methods: {
    async logout() {
      await this.$store.dispatch('user/logout')
      this.$router.push(`/login?redirect=${this.$route.fullPath}`)
    }
  }
}
</script>

<style lang="scss" scoped>
.header {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 78px;
  background: #ffffff;
  display: flex;
  justify-content: space-between;
  z-index: 1000;
  border-bottom: 1px solid #dfdfeb;
  &-left {
    display: flex;
    align-items: center;
    margin-left: 10px;

    .web-title {
      font-size: 26px;
      font-weight: bold;
      margin-left: 10px;
    }
  }

  .errLog-container {
    display: inline-block;
    vertical-align: top;
  }

  .right-menu {
    float: right;
    height: 100%;
    line-height: 78px;

    &:focus {
      outline: none;
    }

    .right-menu-item {
      display: inline-block;
      padding: 0 8px;
      height: 100%;
      font-size: 18px;
      color: #5a5e66;
      vertical-align: text-bottom;

      &.hover-effect {
        cursor: pointer;
        transition: background .3s;

        &:hover {
          background: rgba(0, 0, 0, .025)
        }
      }
    }
    .align-items {
      display: inline-flex;
      align-items: center;
    }
    .avatar-wrapper {
        border-radius: 100%;
        height: 45px;
        width: 45px;
        overflow: hidden;
    }
  }
}
</style>
