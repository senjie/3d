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
     * 取消修改密码
     */
    cancle() {
      this.$emit('toggleComponent', 'personalInfo')
    }
  }
}
</script>

<template>
  <div class="content">
    <div class="change-password">
      <span class="title">旧&nbsp&nbsp密&nbsp&nbsp码:</span>
      <el-input
        ref="password"
        v-model="password"
        placeholder="旧密码"
        name="password"
        type="password"
        tabindex="1"
        autocomplete="on"
      />
    </div>
    <div class="change-password">
      <span class="title">新&nbsp&nbsp密&nbsp&nbsp码:</span>
      <el-input
        ref="password"
        v-model="password"
        placeholder="新密码"
        name="password"
        type="password"
        tabindex="1"
        autocomplete="on"
      />
    </div>
    <div class="change-password">
      <span class="title">确认密码:</span>
      <el-input
        ref="password"
        v-model="password"
        placeholder="确认密码"
        name="password"
        type="password"
        tabindex="1"
        autocomplete="on"
      />
    </div>
    <div class="operation-btn">
      <el-button style="width:210px;" @click="cancle">取消</el-button>
      <el-button style="width:210px;" type="primary">保存</el-button>
    </div>
  </div>
</template>

<style lang="scss" scoped>
.content {
  height: 317px;
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
  .change-password {
    display: flex;
    align-items: center;
    .el-input {
      width: 444px !important;
    }
  }
  .operation-btn {
    display: flex;
  }
}
</style>
