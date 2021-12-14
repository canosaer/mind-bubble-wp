class SearchButton{
  constructor(){
    this.searchButton = document.querySelector('.site-header .search-icon')

    this.setupListeners()
  }

  setupListeners = () => {
    this.searchButton.addEventListener(`click`, this.handleSearchClick)
  }

  handleSearchClick = () => {
    if(window.innerWidth < 768){
      window.location = "/?s"
    }
  }


}

new SearchButton