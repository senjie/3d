<script>
/* eslint-disable */
export default {
  data() {
    return {
      userName: '',
      password: ''
    }
  },
  methods: {
    /**
       * 修改密码
       */
    changeWord() {
      this.$emit('toggleComponent', 'changePassword')
    }
  }
}
</script>

<template>
  <div class="content">
    <div class="avatar">
      <span class="title">当前头像:</span>
      <img src="../../../assets/images/avatar.jpg" alt>
    </div>
    <div class="phone-num">
      <span class="title">手机号:</span>
      <span class="number">1789267622</span>
    </div>
    <div class="user-name">
      <span class="title">用户名:</span>
      <el-input
        ref="username"
        v-model="userName"
        placeholder="用户名"
        name="username"
        type="text"
        tabindex="1"
        autocomplete="on"
      />
    </div>
    <div class="user-name">
      <span class="title">密&nbsp&nbsp&nbsp&nbsp码:</span>
      <el-input
        ref="password"
        v-model="password"
        placeholder="密码"
        name="password"
        type="password"
        tabindex="1"
        autocomplete="on"
      />
    </div>
    <span class="change-password" @click="changeWord">修改密码</span>
    <div class="operation-btn">
      <el-button style="width:210px;">取消</el-button>
      <el-button style="width:210px;" type="primary">保存</el-button>
    </div>
  </div>
</template>

<style lang="scss" scoped>
.content {
  height: 480px;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  background: #ffffff;
  padding: 30px;
  .title {
    font-size: 16px;
    color: #808080;
    margin-right: 20px;
  }
  .avatar {
    display: flex;
    img {
      height: 119px;
      width: 119px;
    }
  }
  .user-name {
    display: flex;
    align-items: center;
    .el-input {
      width: 444px !important;
    }
  }
  .change-password {
    width: fit-content;
    font-size: 14px;
    color: #3796f6;
    cursor: pointer;
  }
  .operation-btn {
    display: flex;
  }
}
</style>
