<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' href="../css/all.css">
    <title>Chat</title>

</head>
<body>
<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap');

    *{
        margin: 0;
        padding:0;
        box-sizing: border-box;
    }

    body{
        background-color:#2f3542;
        font-family: 'Raleway', sans-serif;
        display: block;
    }

    .background-wrapper{
        margin: 5vh auto;
        background-color: #ffffff;
        width: 145vh;
        height: 90vh;
        display: none;
        flex-direction: row;
    }

    .profile-nav{
        max-width: 45vh;
        height: 100%;
        overflow-y: scroll;
        overflow-x: hidden;
    }

    .profile-nav-header p{
        display: flex;
        flex-direction: row;
        align-items: center;
        text-align: center;
        padding: 26.5px 20px;
        font-size: 20pt;
        color: #2f3542;
        font-family: 'Raleway';
        font-weight: 700;
        width: 100%;
        cursor: default;
    }

    .p-subtitle{
        color: #5352ed;
        padding: 0px 6px;
    }

    #logo{
        font-size: 26pt;
        padding: 0px 10px;
        color: #5352ed;
    }

    .user-profile{
        width: 100%;
        height: 22vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;



    }

    .user-profile-img{
        background-color:rgba(211, 211, 211, 0.336);
        width: 10vh;
        height:10vh;
        border-radius: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        text-align: center;
        cursor: pointer;

    }

    #change-profile-pic{
        font-size: 24pt;
        color:  #2f3542c5;
        display: none;

    }
    .user-profile-img:hover {
        background-color: #2f35422f;
    }
    .user-profile-img:hover > #change-profile-pic {

        display: block;
        transition: .3s;


    }

    .user-profile-name{
        font-size: 14pt;
        padding-top: 12px;
        color:  #2f3542;
        display: flex;
        flex-direction: column;
        font-family: 'Raleway';
        font-weight: 700;

    }

    .user-connection{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        font-size: 12pt;
        color: #2f3542;


    }

    #user-connection-icon{
        font-size: 24pt;
        padding: 0 2px;
        color: #2ed573;
        cursor: pointer;

    }

    .user-conversations{

        width: 100%;
        height: 100%;
    }

    .conversations-header{
        width: 100%;
        height: 6vh;
        padding: 20px 30px;
        margin-bottom: 7px;
        font-family: 'Raleway';
        font-weight: 700;
        font-size: 14pt;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;


    }

    .conversation-notification-bckg{
        display: flex;
        align-items: center;
        justify-self: center;
        background-color: rgba(255, 255, 255, 0.856);
        margin-left: 17vh;
        padding: 0px 24px;
        height: 8vh;





    }
    .conversation-notification{
        font-size: 8pt;
        color: #ffffff;
        background-color:  #5352ed;
        border-radius: 100%;
        width: 2vh;
        height: 2vh;
        padding: 2px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Raleway';
        font-weight: 700;


    }

    .conversations-main-list{
        margin-bottom: 10px;
        border-bottom:  solid 1.5px rgb(235, 235, 235);
        width: 100%;
        height: 100%;
    }
    .contact-info{
        display: flex;
        flex-direction: row;
        align-items: center;
        width: 100%;
        height: 100%;
        max-height: 10vh;
        padding: 12px 30px;
        border-top: solid 1.5px rgb(235, 235, 235);



    }

    .contact-info:hover{
        background-color:  rgb(235, 235, 235);
        cursor: pointer;

    }
    .contact-info:hover > .conversation-notification-bckg{
        background-color: rgb(235, 235, 235);
        cursor: pointer;

    }

    .contact-name{
        max-width: 10vh;
        width: 100%;
        white-space: nowrap;
        padding-left: 12px;

    }


    .contact-profile-pic{

        background-color:rgba(211, 211, 211, 0.336);
        width: 6vh;
        height: 6vh;
        border-radius: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        text-align: center;
        cursor: pointer;



    }

    .contact-message{
        max-width: 10vh;
        width: 100%;
        white-space: nowrap;
        padding: 5px 0;
        padding-left: 12px;
        color:  #57606f;


    }


    #new-message{

        font-family: 'Raleway';
        font-weight: 600;

    }
    #contact-selected{
        font-family: 'Raleway';
        font-weight: 600;
        background-color: rgb(235, 235, 235);


    }


    #contact-selected > .conversation-notification-bckg{
        background-color: rgb(235, 235, 235);
        cursor: pointer;

    }


    .profile-nav::-webkit-scrollbar-track
    {

        border-radius: 10px;
        background-color: transparent;
    }
    .profile-nav::-webkit-scrollbar
    {
        width: 0px;
        background-color:transparent;
    }

    .profile-nav::-webkit-scrollbar-thumb
    {
        border-radius: 10px;
        background-color: transparent;
    }

    .chat-main-wrapper{

        width: 100vh;
        height: 100%;
        border-left: solid 2px rgba(211, 211, 211, 0.336);


    }

    .chat-header{
        width: 100%;
        background-color:  #5352ed;
        height: 9vh;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        padding: 15px 20px;
    }

    .chat-header-contact-profile-pic{
        width: 6vh;
        height: 6vh;
        background-color: rgba(211, 211, 211, 0.336);
        /* border:  solid 2px #ffffff; */
        border-radius: 100%;
        cursor: pointer;

    }

    .chat-header-contact-connection-display{

        font-family: 'Raleway';
        font-weight: 400;
        padding: 2px 0px;
        font-size: 11pt;
        cursor: pointer;

    }

    .chat-header-contact-name{
        font-family: 'Raleway';
        font-weight: 500;
        font-size: 13pt;
        padding-left: 15px;
        color: #ffffff;
    }

    .chat-conversation-wrapper{


        width: 100%;
        height: 80.7%;
        overflow-y: scroll;
        overflow-x: hidden;
        display: flex;
        flex-direction: column;
        padding: 20px 30px;
        z-index: 0;
        scroll-behavior: smooth;


    }


    .chat-conversation-wrapper::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.062);
        background-color: transparent;
    }


    .chat-conversation-wrapper::-webkit-scrollbar
    {
        width: 7px;
        background-color: transparent;
    }


    .chat-conversation-wrapper::-webkit-scrollbar-thumb
    {
        background-color:#a4b0bebd;
        border-radius: 6px;

    }




    .chat-user-message-wrapper{
        width: 100%;
        height: 9.3%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        background-color:#f1f2f6;
        position: relative;

    }


    .chat-user-message-form-wrapper{
        background-color: #ffffff;
        width: 85%;
        padding: 10px 20px;
        border-radius: 22px;
    }

    #user-message-form{

        width: 100%;
        font-size: 13pt;
        padding: 2px 10px;
        outline-style: none;
        border: none;
        font-family: 'Raleway';
        font-weight: 500;
    }

    #user-message::placeholder{

        color:#747d8c;

    }

    #send-message, #attach-file,#emoji{

        color: #a4b0be;
        cursor: pointer;
    }

    #send-message{
        padding: 0px 15px;
    }

    #emoji{
        padding-left: 15px;
        padding-right: 8px;
    }

    #attach-file{
        padding-right: 10px;
    }

    #chat-contact-messages-options, #video-call{
        color: white;
        cursor: pointer;
        padding: 0px 5px;

    }

    .chat-header-contact-master{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    #attach-file-input{
        display:  none;

    }

    .attach-file-wrapper{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #attach-file:active{
        color: #2f3542;
    }

    .message-wrapper{
        display: flex;
        flex-direction: row;
        padding: 12px 0;
        align-items: right;
        justify-content: flex-end;
        max-width: 60vh;
        margin-left: 36vh;



    }
    .message-box-style {
        width: 0;
        height: 0;
        border-top: 0px solid transparent;
        border-bottom: 15px solid transparent;
        border-left: 15px solid #5352ed;


    }
    .message-box{
        background-color: #5352ed;
        padding: 20px 25px;
        text-align: left;
        max-width: 60vh;
        border-radius: 14px 0px 14px 14px;




    }

    .message-box-p{
        color: white;
        line-height: 23px;
        max-width: 60vh;
        height: 100%;
    }


    /* Estilização das mensagens dos contatos */

    .contact-message-wrapper{
        display: flex;
        flex-direction: row;
        padding: 12px 0;
        align-items: right;
        justify-content: flex-start;
        max-width: 60vh;
        margin-left: 0vh;



    }
    .contact-message-box-style {
        width: 0;
        height: 0;
        border-top: 0px solid transparent;
        border-bottom: 15px solid transparent;
        border-right: 15px solid #2f3542;

    }
    .contact-message-box{
        background-color: #2f3542;
        padding: 20px 25px;
        text-align: left;
        max-width: 60vh;
        border-radius: 0px 14px 14px 14px;


    }

    .contact-message-box-p{
        color: white;
        line-height: 23px;
        max-width: 60vh;
        height: 100%;
    }

    .emojis-wrapper{

        width: 100%;
        padding: 15px 10px;
        background-color: #f1f2f6;
        position: absolute;
        z-index: 1;
        bottom: 8vh;
        display: inline-block;
        display: none;

    }

    .close-emoji-wrapper{


        width: 100%;
        padding: 15px 10px;
        background-color: #f1f2f6;
        position: absolute;
        z-index: 1;
        bottom: 8vh;
        display: inline-block;
        position: absolute;



    }

    .emoji-list{
        list-style: none;
        display: flex;
        flex-direction: row;
    }

    .emoji-item{
        font-size: 16pt;
        padding:0px 5px;
        cursor: pointer;
    }

    .select-profile-pic-wrapper{
        width: 100%;
        height: 100%;
        background-color:#2f3542ef;
        z-index: 2;
        position: absolute;
        top: 0;
        left: 0;
        display: none;
    }

    .select-profile-pic{

        animation: ease-in-out;
        transition: .2s;
        margin: 13vh auto;
        width: 1000px;
        height: 700px;
        background-color: #ffffff;
        padding: 20px 15px;
        display: flex;
        flex-direction: column;
        align-items: center;



    }

    .select-profile-pic-title{

        display: flex;
        flex-direction: row;
        font-size: 16pt;
        color: #2f3542;
        font-family: 'Raleway';
        font-weight: 700;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        padding: 10px 25px;
        text-transform: uppercase;



    }
    #close-select-profile-pic-menu{
        font-size: 22pt;
        color:#2f3542;

        cursor: pointer;



    }
    #select-pic{
        display: none;
    }

    #select-pic-btn{
        cursor: pointer;
        width: 100%;
        height: 100%;
        color: #ffffff;
        padding: 15px 25px;
        border: solid 2px #ffffff;
        text-align: center;
        font-family: 'Raleway';
        font-weight: 500;
        font-size: 12pt;

    }




    #cancel-selected-profile-pic{
        cursor: pointer;
        background-color: transparent ;
        border: solid 2px#a4b0be;
        color: #a4b0be;
        padding: 16px 50px;
        width: 200px;
        text-align: center;
        font-family: 'Raleway';
        font-size: 13pt;
        outline-style: none;
        font-weight: 500;
        margin: 0px 3px;
    }

    .select-profile-pic-img-display{
        width: 95%;
        border: solid 2px #2f3542;
        background-color: #2f3542;
        height: 570px;
        margin-top: 10px;
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

    }

    .get-started{
        display: flex;
        flex-direction: column;
        margin: 20vh auto;
        width: 500px;
        padding: 30px;
        align-items: center;
        justify-content: center;
        background-color: white;


    }
    .get-started p{
        font-size: 30pt;
        font-weight: 700;
        display: flex;
        align-items: center;
        color: #2f3542;
        margin-top: 20px;
        margin-bottom: 30px;

    }

    .login-p-subtitle{
        color: #5352ed;
    }

    #login-logo{
        color: #5352ed;
        font-size: 30pt;

    }



    .login-form{
        margin: 8px 0;
        padding: 16px 12px;
        width: 350px;
        outline-style: none;
        border: none;
        font-family: 'Raleway';
        font-size: 12pt;
        font-weight: 500;
        border: none;
        border: solid 4px rgb(235, 235, 235);

    }

    .login-btn{
        width: 350px;
        outlyne-style: none;
        border: none;
        background-color: #5352ed;
        font-size: 'Raleway';
        font-weight: 700;
        color: white;
        font-size:18pt;
        padding: 16px 0px;
        margin-top: 20px;
        margin: 20px 0;
        cursor: pointer;
    }

    .login-form:focus{
        border: solid 4px black;
        transition: .2s;
    }

    .login-btn:active{
        outline-style: none;
        border: none;
    }
</style>
<script type="text/javascript">
    var UserNameDisplay = document.getElementById('user-name')
    var UserConnectStat = document.getElementById('user-connection-icon')
    var UserProfileStatText = document.getElementById('user-profile-name')

    var chatWrapper = document.getElementById('chat-wrapper')
    var userTxt = document.getElementById('user-message-form')

    var messageWrapper = document.createElement('div')
    messageWrapper.className = 'message-wrapper'
    var messageBox = document.createElement('div')
    messageBox.className = 'message-box'
    var messageBoxStyle = document.createElement('div')
    messageBoxStyle.className = 'message-box-style'
    var messageBoxP = document.createElement('p')
    messageBoxP.className = 'message-box-p'

    var emojiWrapper = document.getElementById('emojis-wrapper')
    var emojiIcon = document.getElementById('emoji')

    var emojiCode = 0

    var selectProfilePicWrapper = document.getElementById('select-profile-pic-menu')


    // Botão de display de conexão do usuário (Online/Offline)
    function displayUserConnectStat(){
        if(UserConnectStat.innerText == 'toggle_on'){

            UserConnectStat.style.transition = '.2s'
            UserConnectStat.style.color = '#2f3542c5'
            UserConnectStat.innerText = 'toggle_off'
            UserProfileStatText.innerHTML = 'Offline'

        } else if(UserConnectStat.innerText == 'toggle_off'){

            UserConnectStat.style.transition = '.2s'
            UserConnectStat.style.color = '#2ed573'
            UserConnectStat.innerText = 'toggle_on'
            UserProfileStatText.innerHTML = 'Online'


        }
    }


    // Pega a mensagem digitada pelo usuário no formulário, cria uma estilização para ela e a exibe no chat

    function sendMessage(){

        if (userTxt.value == ''){



        }else{


            let messageWrapperClone = messageWrapper.cloneNode(true)
            let messageBoxClone = messageBox.cloneNode(true)
            let messageBoxStyleClone = messageBoxStyle.cloneNode(true)
            let messageBoxPClone = messageBoxP.cloneNode(true)

            messageWrapperClone.appendChild(messageBoxClone)
            messageBoxClone.appendChild(messageBoxPClone)
            messageWrapperClone.appendChild(messageBoxStyleClone)
            chatWrapper.appendChild(messageWrapperClone)
            messageBoxPClone.innerHTML = userTxt.value

            if (userTxt.value == 'saber mais'){


                contactMessage(contactHelp = 'Para enviar as mensagens, além de utilizar o botão Enviar ao lado direito do formulário, você pode enviar ao pressionar a tecla Enter &#x1F609;&#x1F609;')
                contactMessage(contactHelp = 'Vale ressaltar que mensagens com conteúdo vazio não são enviadas! &#x1F605;')
                contactMessage(contactHelp = 'Além disso, você pode interagir com alguns elementos da barra de navegação da esquerda &#x1F604;&#x1F604;. Tente clicar nos elementos para conferir as alterações, como mudar sua foto de perfil ou seu status de conexão')

            }


            emojiWrapper.className = 'emojis-wrapper'
            emojiIcon.style.color = '#a4b0be'
            userTxt.value = ''
            userTxt.focus()
            messageWrapperClone.scrollIntoView();






        }

    }

    // Mostra os diálogos do sistema com o usuário dependendo do que for escrito

    var contactMessageWrapper = document.createElement('div')
    contactMessageWrapper.className = 'contact-message-wrapper'
    var contactMessageBox = document.createElement('div')
    contactMessageBox.className = 'contact-message-box'
    var contactMessageBoxStyle = document.createElement('div')
    contactMessageBoxStyle.className = 'contact-message-box-style'
    var contactMessageBoxP = document.createElement('p')
    contactMessageBoxP.className = 'contact-message-box-p'


    function contactMessage(contactHelp){

        let contactMessageWrapperClone = contactMessageWrapper.cloneNode(true)
        let contactMessageBoxClone = contactMessageBox.cloneNode(true)
        let contactMessageBoxStyleClone = contactMessageBoxStyle.cloneNode(true)
        let contactMessageBoxPClone = contactMessageBoxP.cloneNode(true)

        contactMessageWrapperClone.appendChild(contactMessageBoxStyleClone)
        contactMessageWrapperClone.appendChild(contactMessageBoxClone)
        contactMessageBoxClone.appendChild(contactMessageBoxPClone)

        contactMessageBoxPClone.innerHTML = contactHelp
        chatWrapper.appendChild(contactMessageWrapperClone)
        contactMessageWrapperClone.scrollIntoView();




    }


    // Abre a janela de emojis

    function emojiWindow(){

        if (emojiWrapper.className == 'emojis-wrapper'){

            emojiIcon.style.color = '#747d8c'
            emojiWrapper.className = 'close-emoji-wrapper'
        } else if (emojiWrapper.className == 'close-emoji-wrapper'){
            emojiIcon.style.color = '#a4b0be'
            emojiWrapper.className = 'emojis-wrapper'
        }

    }

    // Seleciona o emoji e o coloca no formulário de mensagem do usuário

    function insertEmoji(x){

        if(emojiCode == 1){
            userTxt.value+= '\u{1F600}'
        }
        if(emojiCode == 2){
            userTxt.value+= '\u{1F604}'
        }
        if(emojiCode == 3){
            userTxt.value+= '\u{1F605}'
        }
        if(emojiCode == 4){
            userTxt.value+= '\u{1F602}'
        }
        if(emojiCode == 5){
            userTxt.value+= '\u{1F609}'
        }
        if(emojiCode == 6){
            userTxt.value+= '\u{1F618}'
        }
        if(emojiCode == 7){
            userTxt.value+= '\u{1F620}'
        }
        if(emojiCode == 8){
            userTxt.value+= '\u{1F49B}'
        }
        if(emojiCode == 9){
            userTxt.value+= '\u{1F44D}'
        }
        if(emojiCode == 10){
            userTxt.value+= '\u{1F44E}'
        }

    }

    function changeProfilePic(){


    }


    // Permite enviar a mensagem contida no formulário do usuário usando a tecla enter

    document.getElementById('user-message-form').addEventListener('keydown', function(event){


        var tecla = event.keyCode

        if(tecla == 13){
            sendMessage()
        }
    })

    function changeProfilePic(){

        selectProfilePicWrapper.style.display = 'block'
        contactMessage(contactHelp = 'Infelizmente, essa aplicação não tem conexão com banco de dados, portanto não é possível fazer upload da sua imagem de perfil &#x1F44E;')


    }

    document.body.addEventListener('keydown', function(event){


        var tecla = event.keyCode

        if(tecla == 27){
            closeSelectProfilePicMenu()

        }
    })

    function closeSelectProfilePicMenu(){

        selectProfilePicWrapper.style.display = 'none'


    }

    function attachFile(){




    }

    //Efetua o "login"

    var loginScreen = document.getElementById('login-screen')
    var mainWrapper = document.getElementById('main')
    function login(){

        loginScreen.style.display = 'none'
        mainWrapper.style.display = 'flex'

    }
</script>
<div class="background-wrapper" id="main">



    <nav class= "profile-nav">  <!-- Navbar da esquerda, contém os perfis do usuário e de seus contatos/conversas -->


        <div class="profile-nav-header">   <!-- Logo do projeto -->
            <p>

                    <span class="material-icons" id="logo">
                        maps_ugc
                    </span>
                Chat <span class="p-subtitle">Plus</span>

            </p>
        </div>


        <div class="user-profile"> <!-- Área do perfil do usuário -->

            <div class="user-profile-img"  onclick="changeProfilePic()">


                    <span class="material-icons" id="change-profile-pic">
                            photo_camera
                    </span>


            </div>

            <p class="user-profile-name" id="user-name"> <!-- Display das informações do usuário -->

                Usuário

            <p class="user-connection">  <!-- Botão responsável por exibir o status do usuáiro (Online/Offline) -->

                <span class="material-icons" id="user-connection-icon" onclick="displayUserConnectStat()">
                            toggle_on
                        </span>

                <span id="user-profile-name">
                            Online
                        </span>
            </p>


            </p>

        </div>

        <div class="user-conversations"> <!-- Área de conversas com contatos do usuário -->

            <div class="conversations-header">
                <p>
                    Conversas
                </p>

            </div>

            <div class="conversations-main"> <!--Todos as conversas -->


                <ul class="conversations-main-list"> <!--Lista de conversas-->

                    <li class="contact-info" id="contact-selected">

                        <div class="contact-profile-pic-bckg">

                            <div class="contact-profile-pic"></div>

                        </div>
                        <div class="contact-text-area">
                            <p class="contact-name">
                                Chat Plus
                            </p>
                            <p class="contact-message">
                                Olá! 😀😀 Esta é uma interface...
                            </p>
                        </div>



                    </li>

                    <li class="contact-info"   id= "new-message">

                        <div class="contact-profile-pic-bckg">

                            <div class="contact-profile-pic"></div>

                        </div>
                        <div class="contact-text-area">
                            <p class="contact-name">
                                Contato 1
                            </p>
                            <p class="contact-message">
                                Mensagem nova!
                            </p>
                        </div>
                        <div class="conversation-notification-bckg">
                            <div class="conversation-notification">
                                8
                            </div>
                        </div>


                    </li>
                    <li class="contact-info">

                        <div class="contact-profile-pic-bckg">

                            <div class="contact-profile-pic"></div>

                        </div>
                        <div class="contact-text-area">
                            <p class="contact-name">
                                Contato 2
                            </p>
                            <p class="contact-message">
                                Nenhuma mensagem nova
                            </p>
                        </div>


                    </li>
                    <li class="contact-info">

                        <div class="contact-profile-pic-bckg">

                            <div class="contact-profile-pic"></div>

                        </div>
                        <div class="contact-text-area">
                            <p class="contact-name">
                                Contato 3
                            </p>
                            <p class="contact-message">
                                Nenhuma mensagem nova
                            </p>
                        </div>


                    </li>
                    <li class="contact-info">

                        <div class="contact-profile-pic-bckg">

                            <div class="contact-profile-pic"></div>

                        </div>
                        <div class="contact-text-area">
                            <p class="contact-name">
                                Contato 4
                            </p>
                            <p class="contact-message">
                                Não conversamos muito...
                            </p>
                        </div>


                    </li>



                </ul>



            </div>


        </div>


    </nav>

    <main class="chat-main-wrapper"> <!-- Área do chat -->

        <div class="chat-header"> <!--Informações sobre o contato selecionado para troca de mensagens -->

            <div class="chat-header-contact-master">
                <div class="chat-header-contact-profile-pic"></div>

                <div class="chat-header-contact-name">
                    Chat Plus

                    <div class="chat-header-contact-connection-display">
                        Online
                    </div>
                </div>

            </div>
            <div class="chat-header-contact-actions">

                    <span class="material-icons" id="video-call">
                        videocam
                    </span>
                <span class="material-icons" id="chat-contact-messages-options">
                        more_vert
                    </span>

            </div>



        </div>

        <div class="chat-conversation-wrapper" id="chat-wrapper"> <!-- Área das mensagens -->
            <div class="contact-message-wrapper">
                <div class="contact-message-box-style"></div>
                <div class="contact-message-box">
                    <div class="contact-message-box-p">
                        Olá! &#x1F600;&#x1F600; me chamo Gabriel e sou o desenvolvedor desta página, seja bem-vindo! Esta é uma interface gráfica que simula uma aplicação de um chat via web. O intuito é demonstrar o design e
                        interação criados a partir dos meus conhecimentos em HTML, CSS e JavaScript puro.
                    </div>
                </div>
            </div>
            <div class="contact-message-wrapper">
                <div class="contact-message-box-style"></div>
                <div class="contact-message-box">
                    <div class="contact-message-box-p">
                        Aqui você pode interagir com alguns elementos para testar as animações e enviar mensagens e emojis.
                        Faça um teste! Para mais informações, envie 'saber mais'
                    </div>
                </div>
            </div>




        </div>


        <div class="chat-user-message-wrapper"> <!-- Área onde o usuário digita as mensagens -->

            <span class="material-icons" id="emoji" onclick="emojiWindow()">
                    sentiment_satisfied_alt
                </span>

            <p class="attach-file-wrapper">

                <input type="file" name="attach-file" id="attach-file-input">
                <label for="attach-file-input" class="material-icons" id="attach-file" onclick="attachFile()">
                    attach_file
                </label>
            </p>

            <div class="chat-user-message-form-wrapper">
                <input type="text" name="" id="user-message-form" placeholder="Digite sua mensagem aqui">
            </div>

            <span class="material-icons" id="send-message" onclick="sendMessage()">
                    send
               </span>
            <div class="emojis-wrapper" id="emojis-wrapper"> <!-- Emojis container -->

                <ul class="emoji-list">

                    <li class="emoji-item" id="grinning-face" onclick="insertEmoji(emojiCode = 1)">&#x1F600;</li>  <!-- grinning face -->
                    <li class="emoji-item" id="grinning-face-with-smiling-eyes" onclick="insertEmoji( emojiCode = 2)">&#x1F604;</li>  <!-- grinning face with smiling eyes -->
                    <li class="emoji-item" id="grinning-face-with-sweat" onclick="insertEmoji( emojiCode =3)">&#x1F605;</li>  <!-- grinning face with sweat -->
                    <li class="emoji-item" id="face-with-tears-of-joy" onclick="insertEmoji( emojiCode =4)">&#x1F602;</li>  <!-- face with tears of joy -->
                    <li class="emoji-item" id="winking-face" onclick="insertEmoji( emojiCode = 5)">&#x1F609;</li>  <!-- winking face -->
                    <li class="emoji-item" id="face-blowing-a-kiss" onclick="insertEmoji(emojiCode = 6)">&#x1F618;</li>  <!-- face blowing a kiss -->
                    <li class="emoji-item" id="angry-face" onclick="insertEmoji(emojiCode = 7)">&#x1F620;</li>  <!--angry face -->
                    <li class="emoji-item" id="heart" onclick="insertEmoji(emojiCode = 8)">&#x1F49B;</li>  <!-- heart -->
                    <li class="emoji-item" id="thumbs-up" onclick="insertEmoji(emojiCode = 9)">&#x1F44D;</li>  <!-- thumbs up -->
                    <li class="emoji-item" id="thumbs-down" onclick="insertEmoji(emojiCode = 10)">&#x1F44E;</li>  <!-- thumbs down -->

                </ul>
            </div>

        </div>


    </main>




</div>

<!-- Interfaces adicionais -->

<div class="select-profile-pic-wrapper" id="select-profile-pic-menu">

    <div class="select-profile-pic" id="select-profile-pic">
        <p class="select-profile-pic-title">
            Selecionar imagem de perfil
            <span class="material-icons" id="close-select-profile-pic-menu" onclick="closeSelectProfilePicMenu()">
                close
            </span>

        </p>

        <div class="select-profile-pic-img-display">

            <div class="select-profile-pic-options">

                <label for="select-pic" id="select-pic-btn">Procurar imagem</label>
                <input type="file" name="Escolher imagem" id="select-pic" accept="image/*">


            </div>

        </div>

        <div class="select-profile-pic-aplly-options">
            <input type="button" value="Aplicar" id="cancel-selected-profile-pic">
            <input type="button" value="Cancelar" id="cancel-selected-profile-pic">
        </div>



    </div>


</div>

<div class="get-started" id="login-screen">
    <p>

                    <span class="material-icons" id="login-logo">
                        maps_ugc
                    </span>
        Chat <span class="login-p-subtitle">Plus</span>

    </p>


    <input type="text" name="email" id="email" placeholder="Email ou telefone" class="login-form">
    <input type="password" name="password" id="password" class="login-form" placeholder="Senha">
    <input type="button" value="Login" class="login-btn" onclick="login()">

</div>





<script src="../js/all.js">

</script>

</body>
</html>
