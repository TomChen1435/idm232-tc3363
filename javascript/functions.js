// Switching functions

// Hiding all mains. 
function mainHideAll() {
    const currentlyDisplayed = document.querySelector('main.display');
    currentlyDisplayed.classList.remove('display');
}

// Switch to and from the search main. 
function switchToSearch() {
    // Apply the clicked design to the search button in the header. 
    searchBtnDefault.classList.remove('default');
    searchBtnDefault.classList.add('clicked');

    // Only display the "search" main. 
    mainHideAll();
    // When displaying a smaller component, the page needs to expand to fit the entire screen. 
    htmlBody.classList.add('limited');
    mainSearch.classList.add('display');
}

function switchFromSearch() {
    // Remove the clicked design to the search button in the header. 
    searchBtnDefault.classList.remove('clicked');
    searchBtnDefault.classList.add('default');

    // Hide all mains.
    mainHideAll();
    htmlBody.classList.remove('limited');
    // If need to display a different main, declare it separately. 
}
