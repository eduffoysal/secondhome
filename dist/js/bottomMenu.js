const allLink = document.querySelectorAll('.b_menu li a');
const indicator = document.querySelector('.b_menu .indicator');

for(let i = 0; i < allLink.length; i++) {
	allLink[i].addEventListener('click', function () {
		allLink.forEach(item=> {
			item.classList.remove('active');
		})
		allLink[i].classList.add('active');
		indicator.style.left = `${i * 50 + 20}px`;
	})
}