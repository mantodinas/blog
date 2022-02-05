import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

export default() => {
	let contentEditor = document.querySelector('#textEditor');

	if (contentEditor == null) {
		return;
	}

	ClassicEditor
	.create(contentEditor)
	.then( editor => {
		console.log( editor );
	} )
	.catch( error => {
		console.error( error );
	} );
}