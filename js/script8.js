document.addEventListener('DOMContentLoaded', function() {
  // Fetch elements
//   var searchForm = document.querySelector('.search-form');
  var searchResults = document.querySelector('.search-results');

  // Event handling for search form and search results
  if (searchForm && searchResults) {
    searchForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission
      searchResults.style.display = 'block';
    });

    // Create and handle cancel button
    var cancelButton = document.createElement('button');
    cancelButton.textContent = 'Cancel';
    cancelButton.className = 'cancel-button';

    cancelButton.addEventListener('click', function() {
      searchResults.style.display = 'none'; // Hide search results on cancel
    });

    // Insert cancel button
    searchResults.appendChild(cancelButton);
  }
});


