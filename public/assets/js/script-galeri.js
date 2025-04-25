// JavaScript untuk halaman Galeri Digital

$(document).ready(function() {
    // Filter Gallery Items
    $('.filter-btn').on('click', function() {
        var filterValue = $(this).attr('data-filter');
        
        // Update active button
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');
        
        if (filterValue === 'all') {
            // Show all items
            $('.galeri-grid-item').show();
        } else {
            // Hide all items
            $('.galeri-grid-item').hide();
            // Show items with matching category
            $('.galeri-grid-item[data-category="' + filterValue + '"]').show();
        }
        
        // Optional: Re-layout items with animation
        $('.galeri-grid').fadeIn(300);
    });
    
    // Optional: Initialize lightbox for gallery images if needed
    // You can use libraries like Fancybox, Lightbox2, etc.
    
    // Example with Fancybox (if you have it included)
    // $('.galeri-image').fancybox({
    //     buttons: ['close'],
    //     loop: true,
    //     animationEffect: "fade"
    // });
    
    // Add smooth hover effect for gallery cards
    $('.galeri-card').hover(
        function() {
            $(this).addClass('hover');
        },
        function() {
            $(this).removeClass('hover');
        }
    );
});