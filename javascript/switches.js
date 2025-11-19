// Switching statements 

// Header title 
const homeBtn = document.querySelector('header > button.home');
homeBtn.addEventListener('click', () => { 
    switchFromSearch();
    mainMenu.classList.add('display');
});

// Header search button 
// The clicked state search button is not interactive. 
const searchBtnDefault = document.querySelector('header > button.search.default');
searchBtnDefault.addEventListener('click', switchToSearch);

// "Search again" buttons 
const searchAgainBtns = document.querySelectorAll('button.search-again');
searchAgainBtns.forEach((btn) => {
    btn.addEventListener('click', switchToSearch);
});

// Search to filter 
const formSearchBtn = document.querySelector('form.search-bar > button');
formSearchBtn.addEventListener('click', () => {
    switchFromSearch();
    mainFilter.classList.add('display');
});
