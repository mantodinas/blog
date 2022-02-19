export default () => {
	let loginForm = document.getElementById('login-form'); 
   if(loginForm != null) {
      loginForm.addEventListener('submit', onLoginFormSubmit);
   }
}

const onLoginFormSubmit = (event) => {

    let email = event.srcElement.querySelector('input[name=email]');
    let password = event.srcElement.querySelector('input[name=password]');
    
    if(email.value === '') {
       manyError(event);
       email.classList.add('error');  
    } else {
       email.classList.remove('error');  
    }
 
    if(password.value === '') {
       manyError(event);  
       password.classList.add('error');  
    } else {
       password.classList.remove('error');  
    }
 }
 
 //error
 const manyError = (event) => {
    event.preventDefault(); // Stops form submit execution
 }