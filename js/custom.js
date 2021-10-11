// Tabs
jQuery(document).ready(function() {
    jQuery(function () {

        var activeIndex = jQuery('.active-tab').index(),
            contentlis = jQuery('.tabs-content li'),
            tabslis = jQuery('.tabs li');
        
        // Show content of active tab on loads
        contentlis.eq(activeIndex).show();
    
        jQuery('.tabs').on('click', 'li', function (event) {
        var current = jQuery(event.currentTarget),
            index = current.index();
        
        tabslis.removeClass('active-tab');
        current.addClass('active-tab');
        contentlis.hide().eq(index).show();
        });
    });
});

// Accordion
jQuery(document).ready(function() {
    jQuery('.toggle').click(function(event) {
        event.preventDefault();

        let $this = jQuery(this);

        if ( $this.next().hasClass('show') ) {
            $this.removeClass('active');
            $this.next().removeClass('show');
            $this.next().slideUp('fast');
        } else {
            jQuery('.toggle').removeClass('active');
            $this.toggleClass('active');
            $this.parent().parent().find('li .inner').removeClass('show');
            $this.parent().parent().find('li .inner').slideUp('fast');
            $this.next().toggleClass('show');
            $this.next().slideToggle('fast');
        }
    });
});