export default () => {
	document.getElementById('mobileDropdown').addEventListener('click', onDropdownClick)
}

const onDropdownClick = (event) => {
	document.getElementById("dropdownContent").classList.toggle("show");

	if (!event.target.matches('.dropdownBtn')) {
		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			}
		}
	}
}
