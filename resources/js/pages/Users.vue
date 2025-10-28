<template>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <Sidebar />
    <div class="body-wrapper">
      <Header />
      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <!-- content starts here  -->
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Users List</h5>
                <div class="table-responsive" data-simplebar>
                  <table class="table text-nowrap align-middle table-custom mb-0">
                    <thead>
                      <tr>
                        <th scope="col" class="text-dark fw-normal ps-0">Name</th>
                        <th scope="col" class="text-dark fw-normal">Email</th>
                        <th scope="col" class="text-dark fw-normal">Is Email Verified</th>
                        <th scope="col" class="text-dark fw-normal">Mobile</th>
                        <th scope="col" class="text-dark fw-normal">Is Profile Completed</th>
                        <th scope="col" class="text-dark fw-normal">@</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="user in users" :key="user.id">
                        <td class="ps-0">
                          <div class="d-flex align-items-center gap-6">
                            <!-- <img src="../assets/images/products/dash-prd-1.jpg" alt="prd1" width="48"
                              class="rounded" /> -->
                            <div>
                              <h6 class="mb-0">{{ user.name }}</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span>{{ user.getRawOriginal('email') }}</span>
                        </td>
                        <td>
                          <span 
                            v-if="user.email_verified_at" 
                            class="badge bg-success-subtle text-success">
                            Verified
                          </span>
                          <span 
                            v-else 
                            class="badge bg-danger-subtle text-danger">
                            Not Verified
                          </span>
                        </td>
                        <td>
                          <span class="text-dark">{{ user.getRawOriginal('mobile') }}</span>
                        </td>
                        <td>
                          <span 
                            v-if="user.profile_completed" 
                            class="badge bg-success-subtle text-success">
                            Completed
                          </span>
                          <span 
                            v-else 
                            class="badge bg-danger-subtle text-danger">
                            Pending
                          </span>
                        </td>
                        <td>
                          <div class="dropdown dropstart">
                            <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="ti ti-dots fs-5"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <!-- <li>
                                <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i class="fs-4 ti ti-plus"></i>Add</a>
                              </li> -->
                              <li>
                                <!-- <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i class="fs-4 ti ti-edit"></i>Edit</a> -->
                                <router-link :to="{ name: 'EditUser', params: { identifier: user.identifier  } }" class="dropdown-item d-flex align-items-center gap-3"><i class="fs-4 ti ti-edit"></i>Edit</router-link>
                              </li>
                              <!-- <li>
                                <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i class="fs-4 ti ti-trash"></i>Delete</a>
                              </li> -->
                            </ul>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
  import { ref, onMounted } from 'vue'
  import Sidebar from '../components/Sidebar.vue'
  import Header from '../components/Header.vue';
  import Api from '../services/Api.js';

  const users = ref([])

  onMounted(() => {
    loadUsers()
  })

  const loadUsers = async () => {
    try {
      const response = await Api.getUsers()
      users.value = JSON.parse(JSON.stringify(response.data));
      // console.log("Users loaded:", users)
      // console.log("users value:", users.value[1])
      console.log(JSON.parse(JSON.stringify(users.value)));
      if (users.value.status === 400) {
        console.error("Error loading users:", users.value.message)
      }
    } catch (error) {
      console.error("Error loading users:", error)
    }
  }

</script>
