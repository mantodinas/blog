
export default () =>
{
    const searchBtn = document.getElementById('post-search-btn');
    searchBtn.addEventListener('click', addButtonEvent)
}

const addButtonEvent = () => {
    const searchInput = document.getElementById('post-search-input');
    document.location.search = "search=" + searchInput.value;
}