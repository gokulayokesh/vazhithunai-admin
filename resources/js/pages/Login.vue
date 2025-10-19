<template>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden text-bg-light min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="alert alert-danger custom-alert custom-danger" id="error-message" role="alert" style="display: none;"></div>
        <div class="alert alert-success custom-alert custom-success" id="success-message" role="alert" style="display: none;">7687768</div>
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="admin-name">
              <a href="./index.html" class="text-nowrap logo-img text-center d-block">
                <img src="https://vazhithunai.com/assets/img/logo1.webp" alt="">
              </a>
              <div>
                <h4 class="text-center name">vazhithunai</h4>
              </div>
            </div>
            <div class="card mb-0">
              <div class="card-body">
                <div>
                  <h4 class="text-center mb-4">Login to Your Account</h4>
                </div>
                <!-- <p class="text-center">Your Social Campaigns</p> -->
                <form @submit.prevent="login">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mobile</label>
                    <input type="text" v-model="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" v-model="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="d-flex align-items-center justify-content-end mb-4">
                    <div>
                      <a href="#" class="f-pwd">Forgot Password?</a>
                    </div>
                    <!-- <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a> -->
                  </div>
                  <!-- <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</a> -->
                   <button type="submit" class="btn btn-primary w-100 py-2 fs-4 mb-4 rounded-2">Sign In</button>
                  <!-- <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">New to Matdash?</p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-register.html">Create an account</a>
                  </div> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
  import { ref } from 'vue'
  import { useRouter } from 'vue-router';
  import '../../css/pages/login.css'
  import Api from '../services/Api.js'

  const mobile = ref('');
  const password = ref('');
  const router = useRouter(); 

  const login = async () => {
    try {
      if (!mobile.value) {
        document.getElementById('error-message').style.display = 'block';
        document.getElementById('error-message').innerText = 'Please enter your mobile number.';
        setTimeout(() => {
        document.getElementById('error-message').style.display = 'none';
        }, 1500);
        return;
      }
      if (!password.value) {
        document.getElementById('error-message').innerText = 'Please enter your password.';
        document.getElementById('error-message').style.display = 'block';
        setTimeout(() => {
        document.getElementById('error-message').style.display = 'none';
        }, 1500);
        return;
      }
      const response = await Api.login(mobile.value, password.value);
      if (response.data.status === 200) {
        localStorage.setItem('isLoggedIn', 'true');
        document.getElementById('success-message').innerText = response.data.message;
        router.push({ name: 'Users' });
        return;
      }
      if (response.data.status === 400) {
        document.getElementById('error-message').innerText = response.data.message;
        document.getElementById('error-message').style.display = 'block';
        setTimeout(() => {
        document.getElementById('error-message').style.display = 'none';
        }, 1500);
        return;
      }
    } catch (error) {
      console.error(error);
    }
  };
</script>