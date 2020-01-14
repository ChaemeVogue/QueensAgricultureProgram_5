const SEARCH_TERM = "search";
const CONTACT_FORM = "search-bar";

/*
validates user input by trimming whitespace
if the length of the input is now 0, then reurn false
*/
function validSearchInput() {
    var search = document.getElementById(SEARCH_TERM);
    search = search.value.trim();
    if (search.length === 0) {
        return false;
    } else {
        return true;
    }
}

/*
if the user hits submit, it validates the input before submition
if the input is invalid, the submission is prevented and the 
input box is set to an empty string
*/
function attachHandlers() {
    let formElement = document.getElementById(CONTACT_FORM);
    var search = document.getElementById(SEARCH_TERM);
    if (formElement) {
        formElement.addEventListener("submit", function (event) {
            if (!validSearchInput()) {
                search.value = "";
                event.preventDefault();
            }
        });
    }
}

window.addEventListener("load", attachHandlers, false)

