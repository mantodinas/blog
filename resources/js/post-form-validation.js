export default () => {
	document.getElementById('post-form').addEventListener('submit', onPostFormSubmit)
}

const onPostFormSubmit = (event) => {

    event.preventDefault(); // Stops form submit execution
    if (inputtx.value.length == 0)
      { 
         alert("message");  	
         return false; 
      }  	
      return true; 


}
