require('./bootstrap');
import 'bootstrap';
import searchPost from './search-post';
import initDropdown from './navbar';
import paragraphEdit from './paragraph-edit';
import postFormValidationInit from './post-form-validation';
import editFormValidationInit from './edit-form-validation';
import loginFormValidationInit from './login-form-validation';


window.onload = () => {
    searchPost();
    initDropdown();
    paragraphEdit();
    postFormValidationInit();
    editFormValidationInit();
    loginFormValidationInit();
};
