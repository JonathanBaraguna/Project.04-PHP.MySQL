
const blogPosts = document.querySelectorAll('.blog-post');

blogPosts.forEach(post => {
    post.addEventListener('click', () => {
        
        zoomIn(post);
    });
});

function zoomIn(element) {
    
    element.style.transform = 'scale(1.2)';
    element.style.transition = 'transform 0.3s ease';

    const rect = element.getBoundingClientRect();
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const centerX = rect.left + rect.width / 2;
    const centerY = rect.top + rect.height / 2 - scrollTop;

    window.scrollTo({
        top: centerY - window.innerHeight / 2,
        left: centerX - window.innerWidth / 2,
        behavior: 'smooth'
    });

    setTimeout(() => {
        element.style.transform = '';
        element.style.transition = '';
    }, 3000);
}