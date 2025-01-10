const modal = document.getElementById("infoModal");
const closeBtn = document.querySelector(".close");
const modalTitle = document.getElementById("modalTitle");

function openModal(data) {
    modal.style.display = "block"; 
    const projectTitle = data;
    modalTitle.textContent = `Proyecto de interiorismo ${projectTitle}`; 
}


function closeModal() {
    modal.style.display = "none";
}
