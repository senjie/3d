<script>
export default {
  data() {
    // const validateUsername = (rule, value, callback) => {
    //   if (!value) {
    //     callback(new Error("Please enter the correct user name"))
    //   } else {
    //     callback()
    //   }
    // }
    // const validatePassword = (rule, value, callback) => {
    //   if (value.length < 6) {
    //     callback(new Error("The password can not be less than 6 digits"))
    //   } else {
    //     callback()
    //   }
    // }
    return {
      registerForm: {
        username: '',
        phone: '',
        verificationCode: '',
        password: '',
        affirmPassword: ''
      },
      //   loginRules: {
      //     username: [
      //       { required: true, trigger: "blur", validator: validateUsername }
      //     ],
      //     password: [
      //       { required: true, trigger: "blur", validator: validatePassword }
      //     ]
      //   },
      agreement: true
    }
  }
}
</script>

<template>
  <div class="login">
    <el-form
      ref="registerForm"
      :model="registerForm"
      class="login-form"
      autocomplete="on"
      label-position="left"
    >
      <el-form-item prop="username">
        <el-input
          ref="username"
          v-model="registerForm.username"
          placeholder="用户名"
          name="username"
          type="text"
          tabindex="1"
          autocomplete="on"
        />
      </el-form-item>
      <el-form-item prop="username">
        <el-input
          ref="username"
          v-model="registerForm.phone"
          placeholder="手机号"
          name="username"
          type="text"
          tabindex="1"
          autocomplete="on"
        />
      </el-form-item>
      <!-- <el-form-item prop="username">
        <el-input
          ref="username"
          v-model="registerForm.verificationCode"
          placeholder="验证码"
          name="username"
          type="text"
          tabindex="1"
          autocomplete="on"
        />
      </el-form-item> -->
      <el-form-item prop="password">
        <el-input
          ref="password"
          v-model="registerForm.password"
          placeholder="密码"
          name="password"
          tabindex="2"
          autocomplete="on"
        />
      </el-form-item>
      <el-form-item prop="password">
        <el-input
          ref="password"
          v-model="registerForm.affirmPassword"
          placeholder="确认密码"
          name="password"
          tabindex="2"
          autocomplete="on"
        />
      </el-form-item>
      <div class="form-operate">
        <el-checkbox v-model="agreement">同意FORU协议</el-checkbox>
      </div>
      <div class="resgister-btn">
        <el-button type="primary" style="width:100%;">注册</el-button>
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
    }
  }
  .resgister-btn {
    margin-top: 30px;
  }
}
</style>
