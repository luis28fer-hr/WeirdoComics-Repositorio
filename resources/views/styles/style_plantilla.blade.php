<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,700&display=swap');


/*  Plantilla de la estructura */
html{
    font-family: 'Montserrat', sans-serif;
    scroll-behavior: smooth;
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;

}

button{
    font-family: 'Montserrat', sans-serif;
}
body{
    background-color:  #EAEDED;
}

header {
    display: flex;
    position: fixed;
    width: 100%;
    justify-content: space-between;
    align-items: center;
    padding: 20px 3%;
    background-color: #2C3E50;
}

.logo {
    cursor: pointer;
    font-weight: 580;
    font-size: 18px;
    letter-spacing: 3px;
    transition: all 0.3s ease 0s;

}
.logo:hover{
    color: #D5DBDB;
}

a {
    color: #FFFFFF;
    text-decoration: none;
    font-family: 'Montserrat', sans-serif;
    transition: all 0.3s ease 0s;
}

.nav_links a {
    font-size: 16px;
}

.nav_links {
    list-style: none;
}

.nav_links li{
    display: inline-block;
    padding: 0 20px;

}


.nav_links li a i{
    padding-right: 4px;
}

.nav_links li a:hover{
    letter-spacing: 0.5px;
    color: #E67E22;
}

header a button i {
    padding-right: 5px;
}
header a button{
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    border-style: hidden;
    font-size: 16px;
    background-color: #2C3E50;
    padding: 5px 16px;
    border-radius: 10px;
    color: #E74C3C;
    cursor: pointer;
    letter-spacing: .8px;
    transition: all 0.3s ease 0s;
}

header a button:hover{
    color: #C0392B;
    padding: 5px 16px;
    font-size: 16.5;

}


footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 50px 3%;
    margin-top: 1rem;
    background-color: #1C2833;
}

footer p {
    color: #FFFFFF;
}

footer a i {
    padding-right: 5px;
}
footer a:hover {
    color: #E67E22;

}

/* Fin de Plantilla de la estructura */

.link_activo{
    font-size: 19px;
    letter-spacing: .5px;
    color: #E67E22;
}

</style>
