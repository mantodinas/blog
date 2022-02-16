export default () => {
	document.getElementById('post-form').addEventListener('submit', onPostFormSubmit)
}

const onPostFormSubmit = (event) => {

   event.preventDefault(); // Stops form submit execution
   let link = event.srcElement.querySelector('input[name=link]');
   console.log(link.value);
   if(link.value === '') {

      printValidationError('padaviau i error funkctija kintamaji', 'nenutylau');      
   } else {
      printValidationSuccess();
   }
   
   
}

const printValidationError = (variableNext, aaaa) => {
   console.log('nevalidus');
   console.log(variableNext);
   console.log(aaaa);

}

const printValidationSuccess = () => {
   //



   ///


   ///
   ///
   console.log('validus');
}