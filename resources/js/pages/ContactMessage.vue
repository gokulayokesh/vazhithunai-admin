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
                <h5 class="card-title fw-semibold mb-4">Contact Message</h5>
                <div class="table-responsive" data-simplebar>
                  <table class="table text-nowrap align-middle table-custom mb-0">
                    <thead>
                      <tr>
                        <th scope="col" class="text-dark fw-normal ps-0">Name</th>
                        <th scope="col" class="text-dark fw-normal">Email</th>
                        <th scope="col" class="text-dark fw-normal">Mobile</th>
                        <th scope="col" class="text-dark fw-normal">Subject</th>
                        <th scope="col" class="text-dark fw-normal">Message</th>
                        <th scope="col" class="text-dark fw-normal">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="message in messages" :key="message.id">
                        <td class="ps-0">
                          <div class="d-flex align-items-center gap-6">
                            <!-- <img src="../assets/images/products/dash-prd-1.jpg" alt="prd1" width="48"
                              class="rounded" /> -->
                            <div>
                              <h6 class="mb-0">{{ message.name }}</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span>{{ message.mail_id }}</span>
                        </td>
                        <td>
                            <span>{{ message.mobile }}</span>
                        </td>
                        <td>
                          <span class=" truncate ">{{ message.subject.substring(0, 30) }}...</span>
                        </td>
                        <td>
                            <span class=" truncate ">{{ message.message.substring(0, 30) }}...</span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-light m-1" data-bs-toggle="modal" data-bs-target="#primary-header-modal" @click="selectedMessage = message">View Message</button>
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

  <!-- Modal for viewing message details -->
  <div id="primary-header-modal" class="modal fade" tabindex="-1" aria-labelledby="primary-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary text-white">
                    <h4 class="modal-title text-white" id="primary-header-modalLabel">
                        Customer Message Details
                    </h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" v-if="selectedMessage">
                    <p><strong style="color: black;">From:</strong> {{ selectedMessage.name }} ({{ selectedMessage.mail_id }})</p>
                    <p><strong style="color: black;">Subject:</strong> {{ selectedMessage.subject }}</p>
                    <p><strong style="color: black;">Message:</strong> {{ selectedMessage.message }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                        Close
                    </button>
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

  const messages = ref([])

  onMounted(() => {
    loadMessages()
  })

  const loadMessages = async () => {
    try {
      const response = await Api.getContactMessages()
      messages.value = JSON.parse(JSON.stringify(response.data));
      if (messages.value.status === 400) {
        console.error("Error loading messages:", messages.value.message)
      }
    } catch (error) {
      console.error("Error loading messages:", error)
    }
  }
</script>
