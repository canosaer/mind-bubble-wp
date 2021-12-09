class MenuToggle{
  
  constructor(){
    this.toggleButton = document.querySelector(`.mega-toggle-animated-box`)
    this.toggleLine1 = document.querySelector('#mega-menu-wrap-primary .mega-menu-toggle .mega-toggle-block-1 .mega-toggle-animated-inner')
    this.toggleLine2 = document.querySelector('#mega-menu-wrap-primary .mega-menu-toggle .mega-toggle-block-1 .mega-toggle-animated-inner::after')
    
    this.menuOpen = false;

    this.setupListeners()
  }

  setupListeners() {
    this.toggleButton.addEventListener(`click`, this.handleToggleClick)
  }

  handleToggleClick = () => {
    this.menuOpen = !this.menuOpen;
    if(this.menuOpen){
      this.toggleLine1.style.backgroundColor = 'var(--orange)'
      this.toggleLine2.style.backgroundColor = 'var(--orange)'
    }
    else{
      this.toggleLine1.style.backgroundColor = 'rgb(51, 51, 51)'
      this.toggleLine2.style.backgroundColor = 'rgb(51, 51, 51)'
    }
  }
}

new MenuToggle