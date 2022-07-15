$('document').ready(function() {

    // for toogle menu
    $('.toggle').click(function() {
        $('.navigation ul').slideToggle();
        $('.toggle .menu').toggleClass('change');
    });

    // for video clicks
    $('.vbtn').click(function() {
        $(video).fadeToggle("slow");
    });

    $('.vbtn').click(function() {
        $('header').css('display', 'none');
    });

    $('.vbtn').click(function() {
        $('.banner-content').css('display', 'none');
    });

    $('.vbtn').click(function() {
        $('.close-btn').css('display', 'block');
    });

    $('.close-btn').click(function() {
        location.reload(true);
    });

    $('.close-btn').click(function() {
        $(video).css('display', 'none');
    });

    $('.close-btn').click(function() {
        $('header').css('display', 'block');
    });

    $('.close-btn').click(function() {
        $(this).css('display', 'none');
    });

    // for tabs
    $('.tab-a').click(function() {
        $(".tab").removeClass('tab-active');
        $(".tab[data-id='" + $(this).attr('data-id') + "']").addClass("tab-active");
        $(".tab-a").removeClass('active-a');
        $(this).parent().find(".tab-a").addClass('active-a');
    });
    $(".sizes button").click(function(){
		var IsSame = false;
		if ( $(this).hasClass("active") ){
			IsSame = true;
		}else{
			IsSame = false;
		}
		$( ".sizes button" ).each(function( index ) {
			$(this).removeClass( "active");
		});
		if ( IsSame == false ){
			$(this).addClass("active");
		}
	});
});


// for video play
var playButton = document.getElementById("play_button");
// Event listener for the play/pause button
playButton.addEventListener("click", function() {
    if (video.paused == true) {
        // Play the video
        video.play();

        // Update the button text to 'Pause'
        playButton.innerHTML = "<h1><i class='fa fa-pause' aria-hidden='true'></i></h1>";
    } else {
        // Pause the video
        video.pause();

        // Update the button text to 'Play'
        playButton.innerHTML = "<h1><i class='fa fa-play' aria-hidden='true'></i></h1>";
    }
});