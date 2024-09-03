var utilityDropdownVisible = false;
var siteProgressDropdownVisible = false;

function showSelectedOption(selectElement) {
    var utilityDropdownContainer = document.getElementById('utilityDropdownContainer');
    var twoDUnitPlans = document.querySelector('.two-d-unitplans');
    var threeDUnitPlans = document.querySelector('.three-d-unitplans');
    var sitedropdown = document.getElementById('siteProgressDropdownContainer');

    twoDUnitPlans.style.display = 'block'; 
    threeDUnitPlans.style.display = 'block'; 
    sitedropdown.style.display = 'none';

    var selectedOption = selectElement.value;

    if (selectedOption === 'site') {
        sitedropdown.style.display = 'block';
    }

    toggleUtilityDropdown();
}

function toggleSiteProgressDropdown() {
    var siteProgressDropdownContainer = document.getElementById('siteProgressDropdownContainer');
    var twoDUnitPlans = document.querySelector('.two-d-unitplans');
    var threeDUnitPlans = document.querySelector('.three-d-unitplans');
    var constructionImagesContainer = document.querySelector('.construction-img-container');
    var utilityDropdownContainer = document.getElementById('utilityDropdownContainer');
    var siteProgressButton = document.getElementById('siteProgressButton');
    var februaryConstructionImagesContainer = document.getElementById('februaryConstructionImagesContainer');
    var marchConstructionImagesContainer = document.getElementById('marchConstructionImagesContainer');
    var aprilConstructionImagesContainer = document.getElementById('aprilConstructionImagesContainer');
    var mayConstructionImagesContainer = document.getElementById('mayConstructionImagesContainer');
    var juneConstructionImagesContainer = document.getElementById('juneConstructionImagesContainer');
    var julyConstructionImagesContainer = document.getElementById('julyConstructionImagesContainer');
    
    mayConstructionImagesContainer.style.display = 'none';
    juneConstructionImagesContainer.style.display = 'none';
    julyConstructionImagesContainer.style.display = 'block';
    constructionImagesContainer.style.display = 'none';
    siteProgressDropdownContainer.style.display = 'block';
    twoDUnitPlans.style.display = 'none';
    threeDUnitPlans.style.display = 'none';
    utilityDropdownContainer.style.display = 'none';

    if (!siteProgressDropdownVisible) {
        document.querySelectorAll('.floorplans-towerA, .floorplans-towerB, .floorplans-towerC').forEach(tower => {
            tower.style.display = 'none';
        });
    }

    siteProgressDropdownVisible = !siteProgressDropdownVisible;
    utilityDropdownVisible = false;
    removeActiveClass();
    siteProgressButton.classList.add('active');
    document.getElementById('unitPlansButton').classList.remove('active');
}

function toggleUtilityDropdown() {
    var utilityDropdownContainer = document.getElementById('utilityDropdownContainer');
    var twoDUnitPlans = document.querySelector('.two-d-unitplans');
    var threeDUnitPlans = document.querySelector('.three-d-unitplans');
    var constructionImagesContainer = document.querySelector('.construction-img-container');
    var sitedropdown = document.getElementById('siteProgressDropdownContainer');
    var unitPlansButton = document.getElementById('unitPlansButton'); 
    var februaryConstructionImagesContainer = document.getElementById('februaryConstructionImagesContainer');
    var marchConstructionImagesContainer = document.getElementById('marchConstructionImagesContainer');
    var aprilConstructionImagesContainer = document.getElementById('aprilConstructionImagesContainer');
    var mayConstructionImagesContainer = document.getElementById('mayConstructionImagesContainer');
    var juneConstructionImagesContainer = document.getElementById('juneConstructionImagesContainer');
    var julyConstructionImagesContainer = document.getElementById('julyConstructionImagesContainer');
    
    februaryConstructionImagesContainer.style.display='none';
    marchConstructionImagesContainer.style.display='none';
    aprilConstructionImagesContainer.style.display='none';
    mayConstructionImagesContainer.style.display='none';
    juneConstructionImagesContainer.style.display='none';
    julyConstructionImagesContainer.style.display='none';
    sitedropdown.style.display = 'none';
    constructionImagesContainer.style.display = 'none';
    twoDUnitPlans.style.display = 'block';
    threeDUnitPlans.style.display = 'block';

    if (!utilityDropdownVisible) {
        utilityDropdownContainer.style.display = 'block';
    } else {
        utilityDropdownContainer.style.display = 'none';
        twoDUnitPlans.style.display = 'block';
        threeDUnitPlans.style.display = 'none';
    }

    utilityDropdownVisible = !utilityDropdownVisible;
    siteProgressDropdownVisible = false;
    removeActiveClass();
    var unitPlansButton = document.getElementById('unitPlansButton');
    unitPlansButton.classList.add('active');
    document.getElementById('siteProgressButton').classList.remove('active');
}

function removeActiveClass() {
    var buttons = document.querySelectorAll('.dropdown-btn');
    buttons.forEach(button => {
        button.classList.remove('active');
    });
}

function showConstructionImages() {
    var twoDUnitPlans = document.querySelector('.two-d-unitplans');
    var threeDUnitPlans = document.querySelector('.three-d-unitplans');
    var constructionImagesContainer = document.querySelector('.construction-img-container');
    var sitedropdown = document.getElementById('siteProgressDropdownContainer');
    var utilityDropdownContainer = document.getElementById('utilityDropdownContainer');
    var SiteProgressOption = document.querySelector('.februaryConstructionImagesContainer');

    utilityDropdownContainer.style.display = 'none';
    sitedropdown.style.display = 'block';
    twoDUnitPlans.style.display = 'none';
    threeDUnitPlans.style.display = 'none';
    SiteProgressOption.style.display='none'

    document.querySelectorAll('.floorplans-towerA, .floorplans-towerB, .floorplans-towerC').forEach(tower => {
        tower.style.display = 'none';
    });

    removeActiveClass();
    document.getElementById('siteProgressButton').classList.add('active');
}

function preloadImages() {
    var imageUrls = [
        // Add the correct image URLs here
        './media/unitplans/u-1.jpg',
        './media/unitplans/u-2.jpg',
        './media/unitplans/u-7.jpg',
        "./media/unitplans/u-5.jpg",
        "./media/unitplans/u-4.jpg",
        './media/unitplans/u-3.jpg',
        './media/unitplans/3d/3d-2-1.jpg',
        './media/unitplans/3d/3d-2-2.jpg',
        './media/unitplans/3d/3d-2-3.jpg',
        './media/construction/c-4.jpg',
        './media/construction/c-5.jpg',
    ];

    imageUrls.forEach(function (imageUrl) {
        var img = new Image();
        img.src = imageUrl;
    });
}

function showSiteProgressOption(selectElement) {
    var selectedOption = selectElement.value;
    var januaryConstructionImagesContainer = document.getElementById('januaryConstructionImagesContainer');
    var februaryConstructionImagesContainer = document.getElementById('februaryConstructionImagesContainer');
    var marchConstructionImagesContainer = document.getElementById('marchConstructionImagesContainer');
    var aprilConstructionImagesContainer = document.getElementById('aprilConstructionImagesContainer');
    var mayConstructionImagesContainer = document.getElementById('mayConstructionImagesContainer');
    var juneConstructionImagesContainer = document.getElementById('juneConstructionImagesContainer');
    var julyConstructionImagesContainer = document.getElementById('julyConstructionImagesContainer');

    if (selectedOption === 'progress1') {
        januaryConstructionImagesContainer.style.display = 'block';
        februaryConstructionImagesContainer.style.display = 'none';
        marchConstructionImagesContainer.style.display = 'none';
        aprilConstructionImagesContainer.style.display = 'none';
        mayConstructionImagesContainer.style.display = 'none';
        juneConstructionImagesContainer.style.display = 'none';
        julyConstructionImagesContainer.style.display = 'none';
    } else if (selectedOption === 'progress2') {
        januaryConstructionImagesContainer.style.display = 'none';
        februaryConstructionImagesContainer.style.display = 'block';
        marchConstructionImagesContainer.style.display = 'none';
        aprilConstructionImagesContainer.style.display = 'none';
        mayConstructionImagesContainer.style.display = 'none';
        juneConstructionImagesContainer.style.display = 'none';
        julyConstructionImagesContainer.style.display = 'none';
    } else if (selectedOption === 'progress3') {
        januaryConstructionImagesContainer.style.display = 'none';
        februaryConstructionImagesContainer.style.display = 'none';
        marchConstructionImagesContainer.style.display = 'block';
        aprilConstructionImagesContainer.style.display = 'none';
        mayConstructionImagesContainer.style.display = 'none';
        juneConstructionImagesContainer.style.display = 'none';
        julyConstructionImagesContainer.style.display = 'none';
    } else if (selectedOption === 'progress4') {
        januaryConstructionImagesContainer.style.display = 'none';
        februaryConstructionImagesContainer.style.display = 'none';
        marchConstructionImagesContainer.style.display = 'none';
        aprilConstructionImagesContainer.style.display = 'block';
        mayConstructionImagesContainer.style.display = 'none';
        juneConstructionImagesContainer.style.display = 'none';
        julyConstructionImagesContainer.style.display = 'none';
    } else if (selectedOption === 'progress5') {
        januaryConstructionImagesContainer.style.display = 'none';
        februaryConstructionImagesContainer.style.display = 'none';
        marchConstructionImagesContainer.style.display = 'none';
        aprilConstructionImagesContainer.style.display = 'none';
        mayConstructionImagesContainer.style.display = 'block';
        juneConstructionImagesContainer.style.display = 'none';
        julyConstructionImagesContainer.style.display = 'none';
    } else if (selectedOption === 'progress6') {
        januaryConstructionImagesContainer.style.display = 'none';
        februaryConstructionImagesContainer.style.display = 'none';
        marchConstructionImagesContainer.style.display = 'none';
        aprilConstructionImagesContainer.style.display = 'none';
        mayConstructionImagesContainer.style.display = 'none';
        juneConstructionImagesContainer.style.display = 'block';
        julyConstructionImagesContainer.style.display = 'none';
    } else if (selectedOption === 'progress7') {
        januaryConstructionImagesContainer.style.display = 'none';
        februaryConstructionImagesContainer.style.display = 'none';
        marchConstructionImagesContainer.style.display = 'none';
        aprilConstructionImagesContainer.style.display = 'none';
        mayConstructionImagesContainer.style.display = 'none';
        juneConstructionImagesContainer.style.display = 'none';
        julyConstructionImagesContainer.style.display = 'block';
    }
    
}

window.onload = function () {
    preloadImages();
    showSelectedOption(document.getElementById('interestedSelect'));
    var twoDUnitPlans = document.querySelector('.two-d-unitplans');
    var threeDUnitPlans = document.querySelector('.three-d-unitplans');
    var constructionImagesContainer = document.querySelector('.construction-img-container');
    var januaryConstructionImagesContainer = document.getElementById('januaryConstructionImagesContainer');
    var februaryConstructionImagesContainer = document.getElementById('februaryConstructionImagesContainer');
    var marchConstructionImagesContainer = document.getElementById('marchConstructionImagesContainer');
    var aprilConstructionImagesContainer = document.getElementById('aprilConstructionImagesContainer');
    var mayConstructionImagesContainer = document.getElementById('mayConstructionImagesContainer');
    var juneConstructionImagesContainer = document.getElementById('juneConstructionImagesContainer');
    var julyConstructionImagesContainer = document.getElementById('julyConstructionImagesContainer');

    twoDUnitPlans.style.display = 'none';
    threeDUnitPlans.style.display = 'none';
    constructionImagesContainer.style.display = 'none';
    januaryConstructionImagesContainer.style.display = 'none'; 
    februaryConstructionImagesContainer.style.display = 'none';
    marchConstructionImagesContainer.style.display = 'none';
    aprilConstructionImagesContainer.style.display = 'none';
    mayConstructionImagesContainer.style.display = 'none';
    juneConstructionImagesContainer.style.display = 'none';
    julyConstructionImagesContainer.style.display = 'block';
};
