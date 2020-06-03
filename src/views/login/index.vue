<template>
  <div class="login-container">
    <div class="login-form">
      <div class="form-left">
        <img
          style="width: 368px; height: 655px"
          src="../../assets/images/login.png"
          fit="fit"
        >
      </div>
      <div class="form-right">
        <div class="form-title">
          <el-image
            style="width: 36px; height: 36px"
            src="https://assets.forucdn.com/business-logo.svg"
            fit="fit"
          />
          <h4 class="title">FORU供应链系统</h4>
        </div>
        <div class="form-tab">
          <span :class="[currentTab === 'login-form' ? 'active' : '']" @click="changeTab(1)">登录</span>
          <span :class="[currentTab === 'register-form' ? 'active' : '']" @click="changeTab(2)">注册</span>
        </div>
        <div class="form-content">
          <component :is="currentTab" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
/* eslint-disable */
import { validUsername } from '@/utils/validate'
import loginForm from '@/views/login/components/login-form'
import registerForm from '@/views/login/components/register-form'
import SocialSign from './components/SocialSignin'

export default {
  name: 'Login',
  components: { SocialSign, loginForm, registerForm },
  data() {
    return {
      currentTab: 'login-form',
      loginForm: {
        username: '',
        password: ''
      },
      rememberMe: false,
      passwordType: 'password',
      capsTooltip: false,
      loading: false,
      showDialog: false,
      redirect: undefined,
      otherQuery: {}
    }
  },
  methods: {
    changeTab(val) {
      this.currentTab = val === 1 ? 'login-form' : 'register-form'
    },
    handleLogin() {
      this.$refs.loginForm.validate(valid => {
        if (valid) {
          this.loading = true
          this.$store.dispatch('user/login', this.loginForm)
            .then(() => {
              this.$router.push({ path: this.redirect || '/profile', query: this.otherQuery })
              this.loading = false
            })
            .catch(() => {
              this.loading = false
            })
        } else {
          console.log('error submit!!')
          return false
        }
      })
    },
  }
}
</script>

<style lang="scss" scoped>
.login-container {
  height: 100vh;
  width: 100%;
  display: flex;
  align-items: center;
  background-color: #F2F2F2;
  overflow: hidden;

  .login-form {
    position: relative;
    display: flex;
    max-width: 100%;
    padding-top: 78px;
    margin: 0 auto;
    overflow: hidden;

    .form-right {
      width: 580px;
      height: 655px;
      padding: 50px;
      background: #ffffff;
      display: flex;
      flex-direction: column;
      justify-content: space-evenly;
      .form-title {
        display: flex;
        align-items: center;
        justify-content: center;
        .title {
          margin-left: 15px;
          font-size: 20px;
          font-weight: bold;
        }
      }

      .form-tab {
        display: flex;
        justify-content: space-around;

        span {
          width: 236px;
          text-align: center;
          font-size: 18px;
          color: #808080; 
          cursor: pointer; 

          &:hover {
            color: #000000;
            border-bottom: 2px solid #3796F6;
            font-weight: bold;
            padding-bottom: 5px;
          }
        }
        .active {
          color: #000000;
          border-bottom: 2px solid #3796F6;
          font-weight: bold;
          padding-bottom: 5px;
        }
      }

      .form-content {
        
      }
    }
  }
}
</style>
