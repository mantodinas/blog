require('./bootstrap');
import 'bootstrap';
import searchPost from './search-post';
import initDropdown from './navbar';
import paragraphEdit from './paragraph-edit';
import postFormValidationInit from './post-form-validation';

window.onload = () => {
    searchPost();
    initDropdown();
    paragraphEdit();
    postFormValidationInit();
};
