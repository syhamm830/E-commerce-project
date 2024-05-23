document.body.addEventListener('click', function(event) {
    // Check if the click target is the body itself (empty area)
    if (event.target === document.body) {
      // Go back to the previous page
      window.history.back();
    }
  });
  