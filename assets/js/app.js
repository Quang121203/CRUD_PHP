const toast = (isSuccess, text = '') => Toastify({
    text: text,
    duration: 3000,
    newWindow: true,
    close: true,
    gravity: "top",
    position: "right",
    stopOnFocus: true,
    style: {
        background: isSuccess ? "linear-gradient(to right, #00b09b, #96c93d)" : "linear-gradient(to right, rgb(255, 95, 109), rgb(255, 195, 113))"
    }
}).showToast();

const toastMessage = localStorage.getItem('toastMessage');
if (toastMessage) {
    toast(true, toastMessage);
    localStorage.removeItem('toastMessage');
}


const baseURL = '/CRUD';


