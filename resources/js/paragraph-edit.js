import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

export default() => {
	let contentEditor = document.querySelector('#textEditor');

	if (contentEditor == null) {
		return;
	}

	ClassicEditor
	.create(contentEditor, config)
	.then( editor => {
		console.log( editor );
	} )
	.catch( error => {
		console.error( error );
	} );
}

const config = {
	
	toolbar: 
		['heading', 'bold', 'link']

		//items: [  'bold', 'left', 'right' ],
		// items: [
		// 	 '|',
		// 	  '|',
		// 	 '|',
		// 	  '|',
		// 	'bold',  'strikethrough', 'underline', 'subscript', 'superscript', '|',
		// 	 '|',
		// 	'outdent', 'indent', '|',
		// 	'bulletedList', 'numberedList',  '|',
		// 	'code', 'codeBlock', '|',
		// 	'insertTable', '|',
		// 	'uploadImage', 'blockQuote', '|',
		// 	'undo', 'redo'
		// ],

};