export default () => {
	document.getElementById('post-form').addEventListener('submit', onPostFormSubmit)
}

const onPostFormSubmit = (event) => {

   event.preventDefault(); // Stops form submit execution
   let link = event.srcElement.querySelector('input[name=link] [name=title]');
   if(link.value === '') {

      linkError();
      titleError();         
   } else {
      linkSuccess();
      titleSuccess();
   }
   
   
}
//error
const linkError = () => {
   console.log('nevalidus');
   alert('link is not filed');
}

const titleError = () => {
   console.log('nevalidus');
   alert('title is not filed');
}

//success
const linkSuccess = () => {
   console.log('link success');
}

const titleSuccess = () => {
   console.log('title success');
}