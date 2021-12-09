class HeroMenu{

    constructor(){
      this.heroSection = document.querySelector('.hero')
      this.defaultMenu = this.heroSection.querySelector('.hero__menu_0')
      this.programMenu = this.heroSection.querySelector('.hero__menu_1')
      this.nameMenu = this.heroSection.querySelector('.hero__menu_2')
      this.emailMenu = this.heroSection.querySelector('.hero__menu_3')
      this.lastMenu = this.heroSection.querySelector('.hero__menu_4')
      this.heroNav = this.heroSection.querySelector('.hero__button-row')
  
      this.parentButton = this.defaultMenu.querySelector('.hero__button')
      this.volunteerButton = this.defaultMenu.querySelector('.hero__last-button')
      this.heroNavContinue = this.heroSection.querySelector('.continue-button')
      this.heroNavContinueText = this.heroNavContinue.querySelector('.continue-button__text')
      this.heroNavBack = this.heroSection.querySelector('.back-button')
  
      this.programCheckboxes = this.heroSection.querySelectorAll('.hero__checkbox')
      this.nameInput = this.heroSection.querySelector('.hero__name-input')
      this.emailInput = this.heroSection.querySelector('.hero__email-input')
      this.programError = this.heroSection.querySelector('.hero__validation_program')
      this.nameError = this.heroSection.querySelector('.hero__validation_name')
      this.emailError = this.heroSection.querySelector('.hero__validation_email')
  
      this.setupListeners()
    }
  
    setupListeners = () => {
    
      this.parentButton.addEventListener('click', this.advanceMenu)
      this.volunteerButton.addEventListener('click', this.advanceMenu)
      this.heroNavContinue.addEventListener('click', this.advanceMenu)
      this.heroNavBack.addEventListener('click', this.returnMenu)
    }
  
    advanceMenu = (evt) => {
      if(!this.defaultMenu.classList.contains('hidden')){
        this.heroNav.classList.toggle('invisible')
        this.defaultMenu.classList.toggle('hidden')
        this.programMenu.classList.toggle('hidden')
      }
      else if(!this.programMenu.classList.contains('hidden')){
        if(this.programCheckboxes[0].checked || this.programCheckboxes[1].checked){
          if(!this.programError.classList.contains('invisible')) this.programError.classList.toggle('invisible')
          this.programMenu.classList.toggle('hidden')
          this.nameMenu.classList.toggle('hidden')
        }
        else{
          if(this.programError.classList.contains('invisible')) this.programError.classList.toggle('invisible')
        }
        
      }
      else if(!this.nameMenu.classList.contains('hidden')){
        if(this.nameInput.value){
          if(!this.nameError.classList.contains('invisible')) this.nameError.classList.toggle('invisible')
          this.nameMenu.classList.toggle('hidden')
          this.emailMenu.classList.toggle('hidden')
          this.heroNavContinueText.textContent = 'Sign Up!'
        }
        else{
          if(this.nameError.classList.contains('invisible')) this.nameError.classList.toggle('invisible')
        }
      }
      else if(!this.emailMenu.classList.contains('hidden')){
        if(this.emailInput.value){
          let emailRE = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w{2,}([-.]\w{2,})*$/
          if(emailRE.test(this.emailInput.value)){
            if(!this.emailError.classList.contains('invisible')) this.emailError.classList.toggle('invisible')
            this.emailMenu.classList.toggle('hidden')
            this.lastMenu.classList.toggle('hidden')
            this.heroNavBack.classList.toggle('invisible')
            this.heroNavContinueText.textContent = 'Back to Start'
          }
          else{
            if(this.emailError.classList.contains('invisible')) this.emailError.classList.toggle('invisible')
          }
        }
        else{
          if(this.emailError.classList.contains('invisible')) this.emailError.classList.toggle('invisible')
        }
      }
      else if(this.heroNavContinueText.textContent === 'Back to Start'){
        this.heroNavContinueText.textContent = 'Continue'
        this.lastMenu.classList.toggle('hidden')
        this.defaultMenu.classList.toggle('hidden')
        this.heroNavBack.classList.toggle('invisible')
        this.heroNav.classList.toggle('invisible')
        this.programCheckboxes.forEach(checkbox => {
          checkbox.checked = false
        });
        this.nameInput.value = ''
        this.emailInput.value = ''
      }
    }
  
    returnMenu = (evt) => {
      if(!this.emailMenu.classList.contains('hidden')){
        this.nameMenu.classList.toggle('hidden')
        this.emailMenu.classList.toggle('hidden')
        this.heroNavContinueText.textContent = 'Continue'
      }
      else if(!this.nameMenu.classList.contains('hidden')){
        this.programMenu.classList.toggle('hidden')
        this.nameMenu.classList.toggle('hidden')
      }
      else if(!this.programMenu.classList.contains('hidden')){
        this.defaultMenu.classList.toggle('hidden')
        this.programMenu.classList.toggle('hidden')
        this.heroNav.classList.toggle('invisible')
      }
    }
  
}

new HeroMenu