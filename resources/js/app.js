require('./bootstrap');
import 'bootstrap';
import searchPost from './search-post';
import initDropdown from './navbar';
import paragraphEdit from './paragraph-edit';

window.onload = () => {
    searchPost();
    initDropdown();
    paragraphEdit();
};
