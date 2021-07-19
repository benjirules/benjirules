//Create the slider function
function slider(){
    //creating a variable
    let slides = document.querySelectorAll('#slides .slide');
    // we're setting currentSlide to keep track of the current slide
    let currentSlide = 0;
    //creating a variable to set the time interval for the next slide
    let slideInterval = setInterval(nextSlide, 3000);

    function nextSlide(){
        //first, we change the current slide's class so its not showing. The css transition handles the fade out automatically.
        slides[currentSlide].className = 'slide';
        // Add one to the current slide, but we use % operator to cycle back to zero when we reach the end of the slides.
        currentSlide = (currentSlide+1)%slides.length;
        slides[currentSlide].className = 'slide showing';
    }
}
slider();

function onScroll ()
{
    window.onscroll = function () { myFunction() };

    let navbar = document.getElementById("navbar");
    let sticky = navbar.offsetTop;

    function myFunction()
    {
        if (window.pageYOffset >= sticky)
        {
            navbar.classList.add("sticky")
        }
        else
        {
            navbar.classList.remove("sticky");
        }
    }
}
onScroll();
