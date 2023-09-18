import * as bootstrap from "bootstrap";
import axios from "axios";
import { Notyf } from "notyf";

window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

const notyf = new Notyf({ position: { x: "right", y: "top" } });

window.addEventListener('toast-error', ({ detail }) => {
    notyf.error(detail[0]);
});

window.addEventListener('toast-success', ({ detail }) => {
    notyf.success(detail[0]);
});
