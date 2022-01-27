require('./bootstrap');
import 'bootstrap';
import searchPost from './search-post';
import initDropdown from './navbar';

window.onload = () => {
    searchPost();
    initDropdown();
};
