import axios from "axios";
import { get } from "lodash";

const apiClient = axios.create({
    baseURL: "https://admin.vazhithunai.com/api", // Local
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
    },
};
