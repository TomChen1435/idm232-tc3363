const htmlBody = document.querySelector('body');

// Mains

const mainMenu = document.querySelector('main.menu');
const mainSearch = document.querySelector('main.search');
const mainRecipe = document.querySelector('main.recipe');
const mainFilter = document.querySelector('main.filter');
const mainNoResult = document.querySelector('main.no-result');

const mains = [mainMenu, mainSearch, mainRecipe, mainFilter, mainNoResult];

// Switching functions

// Add a "hide" classname to all mains. 
function mainAddHideAll() {
    mains.forEach((main) => {
        if (!main.classList.contains('hide')) {
            main.classList.add('hide');
        };
    });
}

// When displaying a smaller component, the page needs to expand to fit the entire screen. 
function limitedBodyDesign(action) {
    if ((action === "add") && (!htmlBody.classList.contains('hide'))) {
        htmlBody.classList.add('hide');
    } else if ((action === 'remove') && (htmlBody.classList.contains('hide'))) {
        htmlBody.classList.remove('hide');
    }
}

// Switch to and from the search main. 
function switchToSearch(direction) {
    if (direction === "to") {

        // Apply the clicked design to the search button in the header. 
        searchBtnDefault.classList.remove('default');
        searchBtnDefault.classList.add('clicked');

        // Only display the "search" main. 
        mainAddHideAll();
        limitedBodyDesign("add");
        mainSearch.classList.remove('hide');

    } else if (direction === "from") {

        // Remove the clicked design to the search button in the header. 
        searchBtnDefault.classList.remove('clicked');
        searchBtnDefault.classList.add('default');

        // Hide all mains.
        mainAddHideAll();
        limitedBodyDesign("remove");
        // If need to display a different main, declare it separately. 
        
    }
}

// Header title function 
const homeBtn = document.querySelector('header > button.home');
homeBtn.addEventListener('click', () => { 
    switchToSearch("from");
    mainMenu.classList.remove('hide');
});

// Header search button function 
// The clicked state search button is not interactive. 
const searchBtnDefault = document.querySelector('header > button.search.default');
searchBtnDefault.addEventListener('click', switchToSearch("to"));

// "Search again" buttons 
const searchAgainBtns = document.querySelectorAll('button.search-again');
searchAgainBtns.forEach((btn) => {
    btn.addEventListener('click', switchToSearch("to"));
});
