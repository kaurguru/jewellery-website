var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 0,
  autoplay: {
    delay: 2500,

  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

//--------------------------------------------------------------
//-----------------function for slider nav bar-----------------
//--------------------------------------------------------------

document.getElementById('menu_icon').addEventListener("click", toggleMenu);
document.getElementById('menu_close').addEventListener("click", closeMenu);

function toggleMenu() {
  document.getElementById('menu').style.display = "block";
}
function closeMenu() {
  document.getElementById('menu').style.display = "none";
}


//------------------------------------------------------
//-------------------sub categories------------------------------------
//--------------------------------------------------------------

document.addEventListener('DOMContentLoaded', function () {
  var toggleButton = document.getElementById('toggleButton');

  var Category1 = document.getElementById('Category-1');


  toggleButton.addEventListener('click', function () {
    if (Category1.style.display === 'none' || Category1.style.display === '') {
      Category1.style.display = 'block';
    } else {
      Category1.style.display = 'none';
    }
  });


  document.addEventListener('click', function (event) {
    if (!toggleButton.contains(event.target) && !Category1.contains(event.target)) {
      Category1.style.display = 'none';
    }

  });
});

//----------------------
document.addEventListener('DOMContentLoaded', function () {
  var toggleButton2 = document.getElementById('toggleButton2');

  var Category2 = document.getElementById('Category-2');


  toggleButton2.addEventListener('click', function () {
    if (Category2.style.display === 'none' || Category2.style.display === '') {
      Category2.style.display = 'block';
    } else {
      Category2.style.display = 'none';
    }
  });


  document.addEventListener('click', function (event) {
    if (!toggleButton2.contains(event.target) && !Category2.contains(event.target)) {
      Category2.style.display = 'none';
    }

  });
});
//----------------------
document.addEventListener('DOMContentLoaded', function () {
  var toggleButton3 = document.getElementById('toggleButton3');

  var Category3 = document.getElementById('Category-3');


  toggleButton3.addEventListener('click', function () {
    if (Category3.style.display === 'none' || Category3.style.display === '') {
      Category3.style.display = 'block';
    } else {
      Category3.style.display = 'none';
    }
  });


  document.addEventListener('click', function (event) {
    if (!toggleButton3.contains(event.target) && !Category3.contains(event.target)) {
      Category3.style.display = 'none';
    }

  });
});

//----------------------
document.addEventListener('DOMContentLoaded', function () {
  var toggleButton4 = document.getElementById('toggleButton4');

  var Category4 = document.getElementById('Category-4');


  toggleButton4.addEventListener('click', function () {
    if (Category4.style.display === 'none' || Category4.style.display === '') {
      Category4.style.display = 'block';
    } else {
      Category4.style.display = 'none';
    }
  });


  document.addEventListener('click', function (event) {
    if (!toggleButton4.contains(event.target) && !Category4.contains(event.target)) {
      Category4.style.display = 'none';
    }

  });
});

//----------------------
document.addEventListener('DOMContentLoaded', function () {
  var toggleButton5 = document.getElementById('toggleButton5');

  var Category5 = document.getElementById('Category-5');


  toggleButton5.addEventListener('click', function () {
    if (Category5.style.display === 'none' || Category5.style.display === '') {
      Category5.style.display = 'block';
    } else {
      Category5.style.display = 'none';
    }
  });


  document.addEventListener('click', function (event) {
    if (!toggleButton5.contains(event.target) && !Category5.contains(event.target)) {
      Category5.style.display = 'none';
    }

  });
});

//----------------------
document.addEventListener('DOMContentLoaded', function () {
  var toggleButton6 = document.getElementById('toggleButton6');

  var Category6 = document.getElementById('Category-6');


  toggleButton6.addEventListener('click', function () {
    if (Category6.style.display === 'none' || Category6.style.display === '') {
      Category6.style.display = 'block';
    } else {
      Category6.style.display = 'none';
    }
  });


  document.addEventListener('click', function (event) {
    if (!toggleButton6.contains(event.target) && !Category6.contains(event.target)) {
      Category6.style.display = 'none';
    }

  });
});

//----------------------
document.addEventListener('DOMContentLoaded', function () {
  var toggleButton7 = document.getElementById('toggleButton7');

  var Category7 = document.getElementById('Category-7');


  toggleButton7.addEventListener('click', function () {
    if (Category7.style.display === 'none' || Category7.style.display === '') {
      Category7.style.display = 'block';
    } else {
      Category7.style.display = 'none';
    }
  });


  document.addEventListener('click', function (event) {
    if (!toggleButton7.contains(event.target) && !Category7.contains(event.target)) {
      Category7.style.display = 'none';
    }

  });
});


//------------------------------------------------------
//------------------description -review------------------------------------
//--------------------------------------------------------------

function showDescription() {
  document.getElementById('description').style.display = 'block';
  document.getElementById('review').style.display = 'none';
}

function showReview() {
  document.getElementById('description').style.display = 'none';
  document.getElementById('review').style.display = 'block';
}
//------------------------------------------------------
//------------------quantity-btn-----------------------------------
//--------------------------------------------------------------
