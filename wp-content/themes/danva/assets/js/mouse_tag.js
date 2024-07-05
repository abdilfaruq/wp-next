   
   
   document.addEventListener("DOMContentLoaded", function() {
    if (window.matchMedia("(min-width: 680px)").matches) {
        const cursorOuter = document.querySelector(".cursor--large"),
              cursorInner = document.querySelector(".cursor--small");

        function updateCursor(e) {
            setTimeout(function() {
                gsap.set([cursorInner], {
                    x: e.clientX,
                    y: e.clientY,
                });
            }, 50);

            setTimeout(function() {
                gsap.set([cursorOuter], {
                    x: e.clientX,
                    y: e.clientY,
                });
            }, 90);
        }

        window.addEventListener("mousemove", (e) => updateCursor(e));
    }
});

// Find the element with the class "mouse_tag"
    var element = document.querySelector('.mouse_tag');

    // Check if the element exists
    if (element) {
        // Create a new div element to contain the HTML code
        var newDiv = document.createElement('div');
        newDiv.innerHTML = `
            <div id="container_m">
                <div class="cursor cursor--large"> </div>
                <div class="cursor cursor--small"> </div>
            </div>
        `;
    
        // Append the new div to the selected element
        element.appendChild(newDiv);
    }

    gsap.registerPlugin(ScrollTrigger);

// Mouse Cursor

