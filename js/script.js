// Toggle expandable content in "Хто такі приватні виконавці" section
function toggleContent() {
    const fullText = document.querySelector('.full-text');
    const previewText = document.querySelector('.preview-text');
    const button = document.querySelector('.read-more-btn');
    const sectionTitle = document.querySelector('.private-bailiffs h2');

    if (!fullText.classList.contains('open')) {
        fullText.classList.add('open');
        previewText.style.display = 'none';
        button.textContent = 'Згорнути';
    } else {
        fullText.classList.remove('open');
        previewText.style.display = 'block';
        button.textContent = 'Читати далі';
        // // Плавная прокрутка к заголовку секции при сворачивании
        // if (sectionTitle) {
        //     sectionTitle.scrollIntoView({ behavior: 'smooth', block: 'start' });
        // }
    }
}

// Toggle FAQ items
function toggleFAQ(element) {
    const faqItem = element.parentElement;
    const answer = faqItem.querySelector('.faq-answer');
    const toggle = element.querySelector('.faq-toggle');
    
    if (answer.classList.contains('open')) {
        // Close FAQ
        answer.classList.remove('open');
        toggle.textContent = '+';
        faqItem.classList.remove('active');
    } else {
        // Open FAQ
        answer.classList.add('open');
        toggle.textContent = '−';
        faqItem.classList.add('active');
    }
}

// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');
    
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close menu when clicking on a link
        document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', function() {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
        }));
    }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Add animation on scroll
function animateOnScroll() {
    const elements = document.querySelectorAll('.advantage-card, .faq-item, .registration-info');
    
    elements.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const elementVisible = 150;
        
        if (elementTop < window.innerHeight - elementVisible) {
            element.classList.add('animate');
        }
    });
}

window.addEventListener('scroll', animateOnScroll);
document.addEventListener('DOMContentLoaded', animateOnScroll);

// Ensure all functions are available globally
window.toggleContent = toggleContent;
window.toggleFAQ = toggleFAQ;

// Publications modal functions
window.openArticle = function(articleId) {
    const modal = document.getElementById('articleModal');
    if (modal) {
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
    }
};

window.closeArticle = function() {
    const modal = document.getElementById('articleModal');
    if (modal) {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
};

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('articleModal');
    if (event.target == modal) {
        window.closeArticle();
    }
};