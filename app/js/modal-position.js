let scrollHandler = function() {
  let modal = document.getElementById("cookies-modal");
  let chatLink = document.querySelector("#crisp-chatbox div a.cc-nsge");
  let scrollDistanceFromBottom = document.documentElement.scrollHeight - window.innerHeight - window.scrollY;

  if (window.innerWidth >= 1100) {
    if (scrollDistanceFromBottom <= 80) {
      modal.classList.add("bottom-120");
      chatLink.classList.add("bottom-120");
    } else {
      modal.classList.remove("bottom-120");
      chatLink.classList.remove("bottom-120");
    }
  } else if (window.innerWidth < 1100) {
    modal.classList.remove("bottom-120");
    chatLink.classList.remove("bottom-120");
  }
};

window.addEventListener('scroll', scrollHandler);

console.log("modal-position.js loaded");
