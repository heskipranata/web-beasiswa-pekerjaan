document.querySelectorAll('.category-filter').forEach(item => {
    item.addEventListener('click', function(e) {
      e.preventDefault();
      const selectedCategory = this.getAttribute('data-category');
      const cards = document.querySelectorAll('.scholarship-card');

      cards.forEach(card => {
        const categories = card.getAttribute('data-category');
        if (selectedCategory === 'all' || categories.includes(selectedCategory)) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
