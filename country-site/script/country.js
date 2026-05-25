document.addEventListener("DOMContentLoaded", () => {
  const toggle   = document.querySelector(".nav-button");
	const dropdown = document.querySelector(".nav-links");

	toggle.addEventListener("click", () => {
	  dropdown.classList.toggle("active");
	});
}); 