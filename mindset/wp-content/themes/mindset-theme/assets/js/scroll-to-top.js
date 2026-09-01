const button_html = `
  <button class="scroll-top" id="scroll-top" aria-label="Scroll to top">
    <svg viewBox="0 0 40 40" aria-hidden="true">
      <path d="M20 5 L35 35 Q35 37 32 37 H8 Q5 37 5 35 Z"></path>
    </svg>
  </button>
`;

document.body.insertAdjacentHTML('beforeend', button_html);

const button = document.getElementById('scroll-top');

button.addEventListener('click', function(){
  window.scrollTo(0, 0);
});

window.addEventListener('scroll', function(){
  if(window.scrollY == 0){
    button.style.opacity = "0";
  } else {
    button.style.opacity = "1";
  }
});