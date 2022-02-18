export default () => {
	document.getElementById('edit-form').addEventListener('submit', onEditFormSubmit)
}

const onEditFormSubmit = (event) => {


    //let image = event.srcElement.querySelector('input[name=image]');
    let link = event.srcElement.querySelector('input[name=link]');
    let title = event.srcElement.querySelector('input[name=title]');
    let description = event.srcElement.querySelector('textarea[name=description]');
    let content = event.srcElement.querySelector('textarea[name=content]');
    let ckEditor = event.srcElement.querySelector('div.ck.ck-reset.ck-editor.ck-rounded-corners');
  
 
    // if(image.value === '') {
    //    manyError('image', event); 
    //    image.classList.add('img-error');  
       
    // } else {
    //    image.classList.remove('img-error');  
    // }
    
    if(link.value === '') {
       manyError('link', event);
       link.classList.add('error');  
    } else {
       link.classList.remove('error');  
    }
 
    if(title.value === '') {
       manyError('title', event);  
       title.classList.add('error');  
    } else {
       title.classList.remove('error');  
    }
    
    if(description.value === '') {
       manyError('description', event);
       description.classList.add('error');    
    } else {
       description.classList.remove('error');    
    }
 
    if(content.value === '') {
       manyError('content', event);
       ckEditor.classList.add('error');
    } else {
       ckEditor.classList.remove('error');
    }
 }
 
 //error
 const manyError = (field, event) => {
    event.preventDefault(); // Stops form submit execution
 }