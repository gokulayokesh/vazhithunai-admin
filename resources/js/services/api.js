import axios from "axios";
import { get } from "lodash";

const apiClient = axios.create({
  baseURL: "http://127.0.0.1:8000/api", // Local
  headers: {
    "Content-Type": "application/json",
    Accept: "application/json",
  },
});

export default {

  login(mobile, password) {
    return apiClient.post("/auth/login", { mobile, password });
  },

  getUsers() {
    return apiClient.get("/users");
  },

  getUserDetails(identifier) {
    return apiClient.get(`/user-details/${identifier}`);
  },

  getContactMessages() {
    return apiClient.get("/contact-messages");
  },

  getUsersPayments() {
    return apiClient.get("/payments");
  },

  getSubscriptions() {
    return apiClient.get("/subscriptions");
  }
};
