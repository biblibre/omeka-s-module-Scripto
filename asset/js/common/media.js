document.addEventListener('DOMContentLoaded', e => {
  
  const panzoomContainer       = document.getElementById('panzoom-container');
  const panzoomElem            = document.getElementById('panzoom');
  const panzoomImg             = document.getElementById('panzoom-img');
  const zoomInButton           = document.getElementById('panzoom-zoom-in');
  const zoomOutButton          = document.getElementById('panzoom-zoom-out');
  const rotateLeftButton       = document.getElementById('panzoom-rotate-left');
  const rotateRightButton      = document.getElementById('panzoom-rotate-right');
  const resetButton            = document.getElementById('panzoom-reset');
  const fullscreenButton       = document.getElementById('fullscreen');
  const deleteButton           = document.getElementById('delete-button');
  const horizontalLayoutButton = document.getElementById('horizontal-layout');
  const verticalLayoutButton   = document.getElementById('vertical-layout');
  
  let panzoom;
  let rotateDeg;
  
  initMediaViewer();
  
  // Handle panzoom click to focus.
  panzoomContainer.addEventListener('click', e => {
      panzoomContainer.focus();
  });
  // Handle panning by arrow keys.
  panzoomContainer.addEventListener('keydown', e => {
      switch (e.code) {
          case 'ArrowUp':
              panzoom.pan(0, -2, {relative: true});
              break;
          case 'ArrowDown':
              panzoom.pan(0, 2, {relative: true});
              break;
          case 'ArrowLeft':
              panzoom.pan(-2, 0, {relative: true});
              break;
          case 'ArrowRight':
              panzoom.pan(2, 0, {relative: true});
              break;
          default:
              return;
      }
      e.preventDefault();
  });
  // Handle the scroll wheel.
  panzoomContainer.addEventListener('wheel', panzoom.zoomWithWheel);
  // Handle the zoom in button.
  zoomInButton.addEventListener('click', panzoom.zoomIn);
  // Handle the zoom out button.
  zoomOutButton.addEventListener('click', panzoom.zoomOut);
  // Handle the reset button.
  resetButton.addEventListener('click', e => {
      panzoom.reset();
      resetRotate();
  });
  // Handle the rotate left button.
  rotateLeftButton.addEventListener('click', e => {
      rotateDeg = rotateDeg - 90;
      panzoomImg.style.transition = 'transform 0.25s';
      panzoomImg.style.transform = `rotate(${rotateDeg}deg)`;
  });
  // Handle the rotate right button.
  rotateRightButton.addEventListener('click', e => {
      rotateDeg = rotateDeg + 90;
      panzoomImg.style.transition = 'transform 0.25s';
      panzoomImg.style.transform = `rotate(${rotateDeg}deg)`;
  });
  // Handle the fullscreen (focus) button.
  fullscreenButton.addEventListener('click', e => {
      const body = document.querySelector('body');
      if (body.classList.contains('fullscreen')) {
          disableFullscreen();
      } else {
          enableFullscreen();
      }
  });
  // Handle the horizontal layout button.
  horizontalLayoutButton.addEventListener('click', e => {
      enableHorizontalLayout();
  });
  // Handle the vertical layout button.
  verticalLayoutButton.addEventListener('click', e => {
      enableVerticalLayout();
  });
  
  // Initialize the media viewer.
  function initMediaViewer() {
      rotateDeg = 0
      panzoom = Panzoom(panzoomElem, {});
  }
  // Reset rotation.
  function resetRotate() {
      rotateDeg = 0;
      panzoomImg.style.transition = 'none';
      panzoomImg.style.transform = 'none';
  }
  // Enable fullscreen.
  function enableFullscreen() {
  }
  // Disable fullscreen.
  function disableFullscreen() {
  }
  // Enable horizontal layout.
  function enableHorizontalLayout() {
  }
  // Enable vertical layout.
  function enableVerticalLayout() {
  }
  
  });
  