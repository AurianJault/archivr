function mobileOpacityHandler(value)
{
  let arrayElements = document.querySelectorAll("."+value)
  arrayViews.forEach(element=> {
    element.setAttribute("visible","false")
  })
  arrayElements.forEach(element => {
    element.setAttribute("visible","true")
    element.setAttribute("opacity","1.0")
  });
}
