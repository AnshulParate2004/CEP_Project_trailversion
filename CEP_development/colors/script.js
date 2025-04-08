document.addEventListener('DOMContentLoaded', function() {
  // Get all crayons
  const crayons = document.querySelectorAll('.crayon');
  
  // Add click event listeners to all crayons
  crayons.forEach(crayon => {
    crayon.addEventListener('click', function() {
      // Get the color from data attribute
      const color = this.getAttribute('data-color');
      
      // First, remove 'active' class from all crayons
      crayons.forEach(c => c.classList.remove('active'));
      
      // Add active class to the clicked crayon
      this.classList.add('active');
      
      // Play sound (in a real application)
      playColorSound(color);
      
      // Optional: Change background color or do animation
      if (color === 'rainbow') {
        document.body.style.background = 'linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet)';
        setTimeout(() => {
          document.body.style.background = 'white';
        }, 2000);
      }
    });
  });
  
  // Highlight the 'red' crayon by default (as shown in the image)
  const redCrayon = document.querySelector('.crayon.red');
  if (redCrayon) {
    redCrayon.classList.add('active');
  }
  
  // Add functionality to the buttons
  const howToJoinBtn = document.querySelector('.how-to-join-btn');
  const signInBtn = document.querySelector('.sign-in-btn');
  const backBtn = document.querySelector('.back-button');
  

  
  backBtn.addEventListener('click', function() {
    alert('This would take you back to the previous page!');
  });
  
  // Function to simulate playing a color sound (placeholder)
  function playColorSound(color) {
    console.log(`Playing sound for color: ${color}`);
    // In a real app, you would have:
    // const audio = new Audio(`sounds/${color}.mp3`);
    // audio.play();
  }
});
