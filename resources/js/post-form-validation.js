export default () => {
   let form = document.getElementById('post-form');
   if(form != null) {
	   form.addEventListener('submit', onPostFormSubmit);
   }
}

const onPostFormSubmit = (event) => {


   let image = event.srcElement.querySelector('input[name=image]');
   let link = event.srcElement.querySelector('input[name=link]');
   let title = event.srcElement.querySelector('input[name=title]');
   let description = event.srcElement.querySelector('textarea[name=description]');
   let content = event.srcElement.querySelector('textarea[name=content]');
   let ckEditor = event.srcElement.querySelector('div.ck.ck-reset.ck-editor.ck-rounded-corners');
 

   if(image.value === '') {
      manyError(event); 
      image.classList.add('img-error');  
      
   } else {
      image.classList.remove('img-error');  
   }
   
   if(link.value === '') {
      manyError(event);
      link.classList.add('error');  
   } else {
      link.classList.remove('error');  
   }

   if(title.value === '') {
      manyError(event);  
      title.classList.add('error');  
   } else {
      title.classList.remove('error');  
   }
   
   if(description.value === '') {
      manyError(event);
      description.classList.add('error');    
   } else {
      description.classList.remove('error');    
   }

   if(content.value === '') {
      manyError(event);
      ckEditor.classList.add('error');
   } else {
      ckEditor.classList.remove('error');
   }
}


const manyError = (event) => {
   event.preventDefault(); // Stops form submit execution
}
