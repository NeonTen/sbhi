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

// Custom
jQuery(document).ready(function() {
    // Add title and Fix placeholder
    var key1 = jQuery('.login-page .left-wrap .um-field-username').find('input').data('key');
    var key2 = jQuery('.login-page .left-wrap .um-field-password').find('input').data('key');
    // if ( key1 == 'username' ) {
    //     jQuery('.login-page .left-wrap .um-field-username').find('input').attr('title', 'login email field');
    // }
    if ( key2 == 'user_password' ) {
        // jQuery('.login-page .left-wrap .um-field-password').find('input').attr('title', 'login password field');
        jQuery('.login-page .left-wrap .um-field-password').find('input').attr('placeholder', 'Password');
    }

    var regMessage = jQuery('.um-register .um-postmessage').html().trim();
    if ( regMessage == 'Thank you for registering. Before you can login we need you to activate your account by clicking the activation link in the email we just sent you.' ) {
        jQuery('.um-register .um-postmessage').html('Thank you for registering. Before you can login we need you to activate your account by clicking the activation link in the email we just sent you.<br><br>If you have not received this email within 5 minutes, please check your Junk/Spam email folders.')
    }
});
