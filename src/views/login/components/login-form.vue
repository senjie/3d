<script>
export default {
  data() {
    const validateUsername = (rule, value, callback) => {
      if (!value) {
        callback(new Error('请输入正确的用户名'))
      } else {
        callback()
      }
    }
    const validatePassword = (rule, value, callback) => {
      if (value.length < 6) {
        callback(new Error('密码不能少于6位数'))
      } else {
        callback()
      }
    }
    return {
      loginForm: {
        username: '',
        password: ''
      },
      loading: false,
      rememberMe: true,
      loginRules: {
        username: [
          { required: true, trigger: 'blur', validator: validateUsername }
        ],
        password: [
          { required: true, trigger: 'blur', validator: validatePassword }
        ]
      }
    }
  },
  methods: {
    handleLogin() {
      this.$refs.loginForm.validate(valid => {
        if (valid) {
          this.loading = true
          this.$store.dispatch('user/login', this.loginForm)
            .then(() => {
              this.$router.push({ path: this.redirect || '/' })
              this.loading = false
            })
            .catch(() => {
              this.loading = false
            })
        } else {
          return false
        }
      })
    }
  }
}
</script>

<template>
  <div class="login">
    <el-form
      ref="loginForm"
      :model="loginForm"
      :rules="loginRules"
      class="login-form"
      autocomplete="on"
      label-position="left"
    >
      <el-form-item prop="username">
        <el-input
          ref="username"
          v-model="loginForm.username"
          placeholder="用户名/手机号"
          name="username"
          type="text"
          tabindex="1"
          autocomplete="on"
        />
      </el-form-item>
      <el-form-item prop="password">
        <el-input
          ref="password"
          v-model="loginForm.password"
          placeholder="密码"
          name="password"
          tabindex="2"
          autocomplete="on"
        />
      </el-form-item>
      <div class="form-operate">
        <el-checkbox v-model="rememberMe">记住我</el-checkbox>
        <router-link tag="span" to="/retrieve-password">找回密码</router-link>
      </div>
      <div class="login-btn">
        <el-button :loading="loading" type="primary" style="width:100%;" @click="handleLogin">登录</el-button>
      </div>
    </el-form>
  </div>
</template>

<style lang="scss" scoped>
.login {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;

  .el-input {
    width: 480px !important;
  }
  .el-input__inner {
    background: #ffffff !important;
  }
  .form-operate {
    width: 100%;
    display: flex;
    justify-content: space-between;

    span {
      font-size: 14px;
      color: #333333;
      cursor: pointer;
    }
  }
  .login-btn {
    margin-top: 30px;
  }
}
</style>
