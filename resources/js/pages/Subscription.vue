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
                <h5 class="card-title fw-semibold mb-4">Users Subscription List</h5>
                <div class="table-responsive" data-simplebar>
                  <table class="table text-nowrap align-middle table-custom mb-0">
                    <thead>
                      <tr>
                        <th scope="col" class="text-dark fw-normal ps-0">User Name</th>
                        <th scope="col" class="text-dark fw-normal">Plan Name</th>
                        <th scope="col" class="text-dark fw-normal">Amount</th>
                        <th scope="col" class="text-dark fw-normal">Start date</th>
                        <th scope="col" class="text-dark fw-normal">End date</th>
                        <th scope="col" class="text-dark fw-normal">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="subscriptions in usersSubscriptions" :key="subscriptions.id">
                        <td class="ps-0">
                          <div class="d-flex align-items-center gap-6">
                            <!-- <img src="../assets/images/products/dash-prd-1.jpg" alt="prd1" width="48"
                              class="rounded" /> -->
                            <div>
                              <h6 class="mb-0" style="text-transform: capitalize;">{{ subscriptions.user.name }}</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span>{{ subscriptions.plan_name }}</span>
                        </td>
                        <td>
                          <span><i class="fi fi-rr-indian-rupee-sign" style="font-size: 10px;"></i> {{ subscriptions.amount }}</span>
                        </td>
                        <td>
                          <span>{{ subscriptions.start_date }}</span>
                        </td>
                        <td>
                          <span>{{ subscriptions.end_date }}</span>
                        </td>
                        <td>
                            <span style="text-transform: capitalize;"
                            :class="
                                subscriptions.status === 'active'
                                ? 'badge bg-success-subtle text-success'
                                : subscriptions.status === 'expired'
                                ? 'badge bg-light-subtle text-dark'
                                : subscriptions.status === 'cancelled'
                                ? 'badge bg-danger-subtle text-danger'
                                : 'badge bg-warning-subtle text-dark'
                            "
                            >
                            {{ subscriptions.status }}
                            </span>
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

  const usersSubscriptions = ref([])

  onMounted(() => {
    loadSubscriptions()
  })

  const loadSubscriptions = async () => {
    try {
      const response = await Api.getSubscriptions()
      if (response.status === 200) {
        usersSubscriptions.value = JSON.parse(JSON.stringify(response.data));
      } 
      if (usersSubscriptions.value.status === 400) {
        console.error("Error loading users:", usersSubscriptions.value.message)
      }
    } catch (error) {
      console.error("Error loading users:", error)
    }
  }

</script>
