export default function error(id,alert,message) {
    document.getElementById(id).classList.add(alert);
    document.getElementById(id).textContent = message;
    document.getElementById(id).style.display = "";
    setTimeout(() => {
        document.getElementById(id).style.display = "none";
        document.getElementById(id).classList.remove(alert);
    }, 4000);
}

export const API_PHP = "http://192.168.1.13/api/public/";