var bouton  = document.querySelector('.boutonDeroulant')
var navigation = document.querySelector('.navBar')
bouton.addEventListener('click',()=>{
    navigation.style.display = 'block'
})
document.querySelector('.fermer').addEventListener('click',()=>{
    navigation.style.display = 'none'
})