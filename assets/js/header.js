 
   document.querySelectorAll('.nav-link').forEach(function(link) {
    link.addEventListener('click', function(e) {

      const navbarCollapse = document.getElementById('navbarSupportedContent');
      const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
        toggle: false
      });
      bsCollapse.hide();

      const targetId = this.getAttribute('href').split('#')[1];
      const targetElement = document.getElementById(targetId);

      if (targetElement) {
        targetElement.scrollIntoView({
          behavior: 'smooth'
        });
      }
    });
  });