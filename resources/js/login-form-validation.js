export default () => {
	document.getElementById('login-form').addEventListener('submit', onPostFormSubmit)
}

const onPostFormSubmit = (event) => {

    let email = event.srcElement.querySelector('input[name=email]');
    let password = event.srcElement.querySelector('input[name=password]');
    
    if(email.value === '') {
       manyError('email', event);
       email.classList.add('error');  
    } else {
       email.classList.remove('error');  
    }
 
    if(password.value === '') {
       manyError('password', event);  
       password.classList.add('error');  
    } else {
       password.classList.remove('error');  
    }
 }
 
 //error
 const manyError = (event) => {
    event.preventDefault(); // Stops form submit execution
 }