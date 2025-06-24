let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
  menu.classList.toggle('fa-time');
   menu.classList.toggle('active');

}

// review section 
 const swiper = new Swiper('.swiper', {
      loop: true,
      autoplay: {
        delay: 3000,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });

document.getElementById("loadMore").addEventListener("click", function() {
  const hiddenCards = document.querySelectorAll(".card.hidden");
  hiddenCards.forEach(card => card.classList.remove("hidden"));
  this.style.display = "none"; // Hide the Load More button
});

document.getElementById("loadMore1").addEventListener("click", function() {
  const hiddenCards = document.querySelectorAll(".card.hidden1");
  hiddenCards.forEach(card => card.classList.remove("hidden1"));
  this.style.display = "none"; // Hide the Load More button
});


 function toggleGroupPeople(select) {
      const peopleField = document.getElementById('peopleField');
      peopleField.style.display = (select.value === 'Yes') ? 'block' : 'none';
    }

    function showSuccessPopup() {
      document.getElementById('popup').style.display = 'flex';
      return true;
    }

    function closePopup() {
      document.getElementById('popup').style.display = 'none';
    }

 
    function showForm(formId,element) {
  document.getElementById('local').style.display = 'none';
  document.getElementById('outstation').style.display = 'none';
  document.getElementById('airport').style.display = 'none';

  document.getElementById(formId).style.display = 'block';


   var buttons = document.querySelectorAll('.tab-btn');
  buttons.forEach(btn => btn.classList.remove('active'));

  // Add 'active' class to the clicked button
  element.classList.add('active');
}


// contact us section 

  document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const message = document.getElementById('message').value;
            
             document.getElementById('successMessage').classList.remove('hidden');
            document.getElementById('contactForm').reset();
            
             document.getElementById('contactForm').classList.add('hidden');
            
              setTimeout(() => {
                document.getElementById('successMessage').classList.add('hidden');
                document.getElementById('contactForm').classList.remove('hidden');
            }, 5000);
        });
