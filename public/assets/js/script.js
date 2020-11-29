const serverNav = document.querySelector('nav ul')
const RegisterForm = document.querySelector('.signup-form')
const LoginForm = document.querySelector('.login-form')
const ArchiveContainer = document.querySelector('.archive-container')
const titleSearchButton = document.querySelector('main .title-section i.search')
const titleSearchInput = document.querySelector('main .title-section input')
const titleText = document.querySelector('main .title-section p')

function handleTitleSearchButton() {
    const inputStyle = titleSearchInput.style
    const textStyle = titleText.style

    if (inputStyle.display === 'block') {
        inputStyle.display = 'none'
        textStyle.display = 'block'
    } else {
        inputStyle.display = 'block'
        textStyle.display = 'none'
    }
}

function joinServer() {
    let server = document.createElement('li')
    let link = document.createElement('a')
    let div = document.createElement('div')
    let sigla = document.createTextNode('JS')

    div.classList.add('circle')
    link.setAttribute('href', '/server')
    server.appendChild(link)
    link.appendChild(div)
    div.appendChild(sigla)

    serverNav.appendChild(server)

}

function HandleRegisterDisplay() {
    RegisterForm.style.display = 'block';
    LoginForm.style.display = 'none'
}

function HandleArchiveDisplay() {
    if (ArchiveContainer.style.display === 'flex') {
        ArchiveContainer.style.display = 'none'
    } else {
        ArchiveContainer.style.display = 'flex'
    }
}