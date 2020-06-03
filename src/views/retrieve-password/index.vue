<script>
export default {
  data() {
    return {
      showRetrievePassword: true,
      formData: {
        phone: '',
        verificationCode: ''
      }
    }
  },
  methods: {
    handleSubmit() {
      this.showRetrievePassword = false
    }
  }
}
</script>

<template>
  <div class="retrieve-password">
    <div class="form-wrapper">
      <div class="form-title">
        <el-image
          style="width: 36px; height: 36px"
          src="https://assets.forucdn.com/business-logo.svg"
          fit="fit"
        />
        <h4 class="title">FORU供应链系统</h4>
      </div>
      <div v-if="showRetrievePassword" class="retrieve-password_content">
        <div class="form-content">
          <h4 class="form-content_title">找回密码</h4>
          <el-form autocomplete="on" label-position="left">
            <el-form-item prop="username">
              <el-input
                ref="phone"
                v-model="formData.phone"
                placeholder="手机号"
                name="phone"
                type="text"
                tabindex="1"
                autocomplete="on"
              />
            </el-form-item>
            <el-form-item prop="password">
              <el-input
                ref="verificationCode"
                v-model="formData.verificationCode"
                placeholder="验证码"
                name="verificationCode"
                tabindex="2"
                autocomplete="on"
              />
            </el-form-item>
          </el-form>
        </div>
        <div class="submit-btn">
          <el-button type="primary" style="width:100%;" @click="handleSubmit">提交</el-button>
        </div>
      </div>
      <div v-else class="confirm-password">
        <h4 class="form-content_title">填写新密码</h4>
        <el-form autocomplete="on" label-position="left">
          <el-form-item prop="username">
            <el-input
              ref="phone"
              v-model="formData.phone"
              placeholder="新密码"
              name="phone"
              type="text"
              tabindex="1"
              autocomplete="on"
            />
          </el-form-item>
          <el-form-item prop="password">
            <el-input
              ref="verificationCode"
              v-model="formData.verificationCode"
              placeholder="确认新密码"
              name="verificationCode"
              tabindex="2"
              autocomplete="on"
            />
          </el-form-item>
          <div class="submit-btn">
            <el-button style="width:50%;">取消</el-button>
            <el-button style="width:50%;" type="primary">确认并前往登录</el-button>
          </div>
        </el-form>
      </div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
.retrieve-password {
  height: 100vh;
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-color: #f2f2f2;
  .form-wrapper {
    width: 580px;
    padding: 40px;
    background: #ffffff;
  }
  .form-content_title {
    font-size: 18px;
    color: #333333;
    text-align: center;
  }
  .submit-btn {
    display: flex;
  }
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
}
</style>
