console.log("postload.js is successfully linked.");

// Search button function 

const searchBtn = document.querySelector('button.search');

searchBtn.addEventListener('click', () => {
    console.log("Search button is clicked.");
    if (searchBtn.classList.contains('default')) {
        // After clicking the button, apply the clicked design. 
        searchBtn.classList.remove('default');
        searchBtn.classList.add('clicked');
    }
});
