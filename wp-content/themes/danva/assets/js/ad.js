document.addEventListener("DOMContentLoaded", function () {
    if(document.querySelector("footer")) {
      var footer = document.querySelector("footer");
      if (footer) {
          var footerInnerDiv = footer.querySelector("div");
          if (footerInnerDiv) {
              var htmlContent = `
                  <div style="color: #fff; margin-block-start: var(--wp--preset--spacing--40) !important; font-family: var(--wp--preset--font-family--urbanist) !important;">
                          Danva Wordpress Theme. Designed by: 
                          <a style="color: #fff;" href="https://realtimethemes.com/" data-type="link" data-id="https://realtimethemes.com/" target="_blank" rel="noreferrer noopener">
                              Real Time Themes
                          </a>
                  </div>
              `;
              footerInnerDiv.innerHTML += htmlContent;
          }
      }
  }
  });