setTimeout(function(){
  const banner = window.document.getElementById('banner-img')

  banner.addEventListener("mousemove", event => {
    const { top, bottom, left, right } = event.target.getBoundingClientRect();
  
    const middleX = (right - left) / 1.2;
    const middleY = (bottom - top) / 1.2;
  
    const clientX = event.clientX;
    const clientY = event.clientY;
  
    const offsetX = (clientX - middleX) / middleX;
    const offsetY = (middleY - clientY) / middleY;
  
    event.target.style.transform = `perspective(1000px) rotateY(${offsetX *
      5}deg) rotateX(${offsetY * 5}deg) scale3d(1, 1, 1)`;
  });
  
},200)
